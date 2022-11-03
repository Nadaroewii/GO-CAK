<?php
    include 'koneksi.php';
    session_start();
    if (isset($_POST['signup-btn'])) {
        $idd= $_SESSION['id'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['phone'] = $_POST['phone'];
        
    $query = "UPDATE login SET name = '$name' , username = '$username', email = '$email', phone = '$phone' WHERE id_name = '$idd'";
    $data=mysqli_query($conn,$query);
    
    if ($data) {
    header("location: akunku.php");
}
    }
 ?>