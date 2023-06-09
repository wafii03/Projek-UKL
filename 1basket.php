<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css3.css">
        <title>TABEL BASKET</title>
    </head>
    <body>
    </body>
         <div class="banner">
            <div class="navbar">
            <label class=" logo"></label>
            <ul>
                <li><a href="#"><a href="user.html">Home</a></li>
                <li><a href="#"><a href="usertable.html">Penilaian</a></li>
                <li><a href="#"><a href="userkontak.php">Informasi</a></li>
                <li><a href="#"><a href="login.php">Log out</a></li>
             </ul>

            </div>
            <div class="content">
                <div>
                    <style>
                        a:any-link{
                            color:whitesmoke;
                            background-color: none;
                            text-decoration: none;
                        }
                    </style>
                </div>
            </div>
         </div>
    </html>
    <DOCTYPE! html>
    <head>
    <link rel="stylesheet" href="tabel.css">
    </head>

    <body>
        <table border="1" class="table">
            <tr>
                <th>nomor</th>
                <th>nama user</th>
                <th>nilai</th>
                <th>keaktifan</th>
            </tr>
            
<?php
    include "conn.php";
    $query_mysqli = mysqli_query($koneksi,"SELECT nim, nama, username, password, nilai, keaktifan
    FROM anggota_ekstra
    WHERE id_ekstra = '4'")or die(mysqli_error());
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysqli)){
?>
    <tr>
    <td><?php echo $nomor++ ?></td>
        <td><?php echo $data['nama'] ?></td>
        <td><?php echo $data['nilai'] ?></td>
        <td><?php echo $data['keaktifan'] ?></td>
    </tr>
   <?php } ?>
        </table>

    </body>
</html>