<?php
include_once("function/helper.php");
include_once("function/connection.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Siswa</title>
</head>
<body>
<p>Login Ini</p>

<div id="container-user-acess">

    <form action="<?php echo BASE_URL."/loginsiswa.php";?>" method ="POST">
<!--        Script dibawah ini pisah proses-->
<!--    <form action="--><?php //echo BASE_URL."/process_login.php";?><!--" method ="POST">-->
        <?php

        $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
        if ($notif == true){
            echo "<div class='notif'>Maaf tidak cocok</div>";

        }
        ?>
        <div class="element-form">
            <label>Email</label>
            <span><input type="email" name="email"></span>
        </div>
        <div class="element-form">
            <label>Password</label>
            <span><input type="password" name="password"/></span>
        </div>
        <div class="element-form">
            <span><input type="submit" value="login" name="logsub"></span>
        </div>
    </form>
</div>
</body>
</html>

<?php
if (isset($_POST['logsub'])){
    $email = $_POST['email'];
    $paswd = $_POST['password'];
    $query = mysqli_query($koneksi, "SELECT * FROM usersiswa WHERE email='$email' AND password='$paswd'");
    if (mysqli_num_rows($query) == 0){
        header("location:". BASE_URL ."/index.php?page=loginsiswa&notif=true");
    }else{
        $row = mysqli_fetch_assoc($query);
    echo $row['email'];
    }

}
?>