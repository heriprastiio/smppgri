<div id="container-user-acess">
    <form action="<?php echo BASE_URL."/proses_register.php";?>" method="POST">
        <div class="element-form">
            <label>Nama Lengkap</label>
            <span><input type="text" name="nama_lengkap"></span>
        </div>
        <div class="element-form">
            <label>NISN</label>
            <span><input type="text" name="nisn"></span>
        </div>
       <div class="element-form">
           <label>Alamat</label>
           <span><textarea name="alamatleng"></textarea></span>
       </div>
        <div class="element-form">
            <label>Nomor Telepon</label>
            <span><input type="number" name="notel"></span>
        </div>
        <div class="element-form">
            <label>Email</label>
            <span><input type="number" name="email"></span>
        </div>
        <div class="element-form">
            <label>Password</label>
            <span><input type="number" name="password"></span>
        </div>
        <div class="element-form">
            <span><input type="submit" value="register"></span>
        </div>
    </form>
</div>