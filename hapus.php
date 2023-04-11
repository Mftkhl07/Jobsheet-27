<?php
$nis = isset($_GET['nis']) ? $_GET['nis'] : null;
//Import File Koneksi Database
require_once('koneksi.php');
//Membuat SQL Query
$sql = "DELETE FROM siswa WHERE nis='$nis';";
//Menghapus Nilai pada database
if(mysqli_query($con,$sql)){
    echo 'Berhasil Menghapus data Siswa';
} else {
    echo 'Gagal Menghapus data Siswa';
}
mysqli_close($con);