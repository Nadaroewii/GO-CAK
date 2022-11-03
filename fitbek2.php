<?php
include'koneksi.php';
session_start();
$errors = [];
// SIGN UP USER
if (isset($_POST['signup-btn'])) {
    if (empty($_POST['nilai'])) {
        $errors['nilai'] = 'Nilai required';
    }
    if (empty($_POST['pesan'])) {
        $errors['pesan'] = 'Pesan required';
    }
    $username = $_POST['username'];
    $nilai = $_POST['nilai'];
    $pesan = $_POST['pesan'];
    $idd= $_SESSION['id'];

$query = "INSERT INTO fitbek (id,username,nilai,pesan) VALUES ('','$username','$nilai','$pesan')";
$data=mysqli_query($conn,$query);
if ($data) {
    $hasil = mysqli_query($conn,"SELECT stasiun.asal,stasiun.tujuan,stasiun.jarak,prosespesan.alamat,prosespesan.harga 
        FROM prosespesan INNER JOIN stasiun ON id_stas=stasiun_id WHERE user_id= $idd");
header("location: home.php");
}
}
?>