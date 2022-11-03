<?php
    include 'koneksi.php';
    session_start();
     $idd= $_SESSION['id'];
        $id= $_POST['kolom1'];
        $alamat = $_POST['alamat'];
        $hasil = mysqli_query($conn,"SELECT asal,tujuan,jarak FROM stasiun WHERE id_stas = '$id'");
        while($row=mysqli_fetch_array($hasil))
            {
                $asal=$row['asal'];
                $tujuan=$row['tujuan'];
                $jarak=$row['jarak'];
            }
    if (isset($_POST['signup-btn'])) {
        $harga= $jarak * 5000;
        $_SESSION['id_stasiun'] = $_POST['kolom1'];
        $_SESSION['asal'] = $asal;
        $_SESSION['tujuan'] = $tujuan;
        $bayar = $_POST['bayar'];
        $_SESSION['bayar'] = $bayar;
        $_SESSION['alamat'] = $_POST['alamat'];
        $_SESSION['harga'] = $harga;     
    $query = "INSERT INTO prosespesan (id,user_id,stasiun_id,Alamat,Harga,Bayar) VALUES ('','$idd','$id','$alamat','$harga','$bayar')";
    $data=mysqli_query($conn,$query);
    if ($data) {
    header("location: pesan.php");
}
    }
 ?>