<?php
include'koneksi.php';
session_start();
$name = "";
$username = "";
$phone = "";
$email = "";
$errors = [];

// SIGN UP USER
if (isset($_POST['signup-btn'])) {
	if (empty($_POST['name'])) {
        $errors['name'] = 'Name required';
    }
    if (empty($_POST['username'])) {
        $errors['username'] = 'Username required';
    }
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email required';
    }
	if (empty($_POST['phone'])) {
        $errors['phone'] = 'Number phone required';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = 'Password required';
    }
    if (isset($_POST['password']) && $_POST['password'] !== $_POST['passwordConf']) {
        $errors['passwordConf'] = 'The two passwords do not match';
    }

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //encrypt password

    // Check if email already exists
    $sql = "SELECT * FROM login WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $errors['email'] = "Email already exists";
    }

    if (count($errors) === 0) {
        $query = "INSERT INTO login (id_name,name,username,email,phone,password) VALUES ('','$name','$username','$email','$phone','$password')";
        $hasil= mysqli_query($conn, $query);

            $_SESSION['verified'] = false;
            $_SESSION['message'] = 'You are logged in!';
            $_SESSION['type'] = 'alert-success';
            header("location: login.php");
    }
}
?>
