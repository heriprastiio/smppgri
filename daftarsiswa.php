<?php include_once('function/connection.php'); ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Daftar</title>
    </head>
    <body>
    <form  action="" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>NISN</td>
                <td><input type="text" name="nisn" required></td>
            </tr>
            <tr>
                <td>Alamat Lengkap</td>
                <td><textarea name="alamat" required></textarea> </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="passwrd" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="add"></td>
            </tr>
        </table>
    </form>

    </body>
    </html>
<?php
if (isset($_POST['add'])) {
    $level = "user";
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $alam = $_POST['alamat'];
    $email = $_POST['email'];
    $pass = $_POST['passwrd'];
    $sql = "INSERT INTO usersiswa (level,nama_lengkap,nisn,alamat_lengkap,email,password) values ('$level','$nama','$nisn','$alam','$email','$pass')";


    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Berhasil add');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}
//}
?>