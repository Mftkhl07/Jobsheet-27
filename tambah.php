<?php
if ($_SERVER['REQUEST_METHOD'] -- 'POST') (
    //MendapatkanNilai Variable
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk']
    $kelas = $_POST['kelas'];
    //Pembuatan Syntax SQL
    $sql = "INSERT INTO siswa (nis, nama, jk, kelas)
            VALUES ('$nis', '$nama', '$jk', '$kelas')";
    //Import File Koneksi database
    require_once('koneksi.php');
    //Eksekusi Queri database
    if (mysqli_query($con, $sql)) {
        echo 'Berhasil Menambahkan Siswa';
    } else{
        echo 'Gagal Menambahkan Siswa';
    }
    mysqli_close($con);
)

