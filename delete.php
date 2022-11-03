<?php
include "koneksi.php";
$idfit = $_GET['id_fitbek'];
$query = "DELETE FROM fitbek WHERE id = $idfit";
$hasil = mysqli_query($conn,$query);
if ($hasil) {
    include "home1.php";
}
?>