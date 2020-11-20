<?php
include_once("../function/helper.php");
$Page = isset($_GET['page'])? $_GET['page'] :false;
//include_once ("function/")
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMP PGRI 32</title>
    <link href="<?php echo BASE_URL."../css/style.css";?>" type="text/css" rel="stylesheet"/>
</head>
<body>
<div id="container">
    <div id="header">
        <a href="<?php echo BASE_URL."../index.php";?>">
        <img src="<?php echo BASE_URL."../images/logosmppgri.png";?>   "/>
        </a>
        <div id="menu">
            <div id="user">
                <a href="<?php echo BASE_URL."/index.php";?>">Home</a>
                <a href="<?php echo BASE_URL."/index.php?page=login";?>">Login</a>
                <a href="<?php echo DAFTAR."/index.php?page=daftar";?>">Registrasi</a>
            </div>

        </div>
    </div>
    <div id="content">
        <?php
        $filename ="$Page.php";
        if (file_exists($filename)){
            include_once ($filename);
        }
        ?>
        <p>isi paragraf</p>
    </div>
    <div id="footer">
        <p> Copyright SMP 2020</p>
    </div>
</div>

</body>
</html>
