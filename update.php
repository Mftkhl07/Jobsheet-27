<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    //Mendapatkan NIlai Dari Variable
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $kelas = $_POST['kelas'];
    //import file koneksi database
    require_once('koneksi.php');
    //membuat SQL Query
    $sql = "UPDATE siswa SET nama = '$nama', jk = '$jk', kelas = '$kelas'
            WHERE nis = '$nis';";
    //meng-update database
    if(mysqli_query($con.sql)){
        echo 'Berhasil Update Data Siswa';
    } else(
        echo 'Gagal Update Data Siswa';
    )  
        mysqli_close($con);
}