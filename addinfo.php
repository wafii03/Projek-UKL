<?php
require 'adminfunction.php';
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
            <h3>Masukkan Informasi</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg ">'.$error.'</span>';
                };
            };
            ?>
            <input type="date" name="tanggal" required placeholder="Masukkan tanggal">
            <input type="text" name="isi" required placeholder="Masukkan informasi">
            <input type="submit" name="submit" value="Daftar Sekarang" class="form-btn">
            <p>Tidak Jadi ? <a href="adminkontak.php">Back</a></p>
        </form>
    </div>
</body>
</html>