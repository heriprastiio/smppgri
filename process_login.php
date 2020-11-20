<?php
include_once ("function/connection.php");
include_once ("function/helper.php");
$email = $_POST['email'];
$paswd = $_POST['password'];
$query = mysqli_query($koneksi, "SELECT * FROM usersiswa WHERE email='$email' AND password='$paswd'");
if (mysqli_num_rows($query) == 0){
    header("location:". BASE_URL ."/index.php?page=loginsiswa&notif=true");
}else{
    $row = mysqli_fetch_row($query);
//    echo $row['email'];
}
?>