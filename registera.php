<?php
require 'functiona.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="loginn.css">
</head>
<body>
    <!-- Nav end -->
    <div class="form-container">
        <form action="" method="post">
            <h3>Daftar Silat Sekarang</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg ">'.$error.'</span>';
                };
            };
            ?>
            <input type="text" name="nama" required placeholder="Masukkan nama">
            <input type="text" name="Username" required placeholder="Masukkan Username">
            <input type="password" name="Password" required placeholder="Masukkan Kata Sandi">
            <input type="submit" name="submit" value="Daftar Sekarang" class="form-btn">
            <p>Sudah Punya Akun ? <a href="login.php">Login Sekarang</a></p>
        </form>
    </div>
</body>
</html>