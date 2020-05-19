<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$name = $_POST['name'];
$keterangan = $_POST['keterangan'];


// menginput data ke database
mysqli_query($koneksi,"insert into bermasalah  values('','$keterangan','$name')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
