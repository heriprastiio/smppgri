<?php
include_once ("function/connection.php");
include_once ("function/helper.php");

$level = "user";
$nama_lengkap = $_POST["nama_lengkap"];
$nisn = $_POST["alamatleng"];
$notel = $_POST["notel"];
$email = $_POST["email"];
$pass = $_POST["password"];

mysqli_query($koneksi,"INSERT INTO usersiswa('level','nama_lengkap','nisn','alamat_lengkap','email','password')
values ('$level','$nama_lengkap', '$nisn','$notel','$email','$pass') ");
$sqlget = "SELECT * from usersiswa";
$sqldata = mysqli_query($koneksi,$sqlget);
var_dump($sqldata);

