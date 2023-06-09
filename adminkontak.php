<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css3.css">
        <title>ESKUL SKOMDA</title>
    </head>
    <body>
    </body>
         <div class="banner">
            <div class="navbar">
            <label class=" logo"></label>
            <ul>
                <li><a href="#"><a href="uadmin.html">Home</a></li>
                <li><a href="#"><a href="tabel.php">Penilaian</a></li>
                <li><a href="#"><a href="adminkontak.php">Informasi</a></li>
             </ul>

            </div>
            <div class="content">
                <div>
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
                <th>tanggal</th>
                <th>informasi</th>
                <th>opsi</th>
            </tr>
            
<?php
    include "conn.php";
    $query_mysqli = mysqli_query($koneksi,"SELECT * FROM kontak")or die(mysqli_error());
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysqli)){
?>
    <tr>
        <td><?php echo $data['tanggal'] ?></td>
        <td><?php echo $data['isi']; ?></td>
        <td><a href='addinfo.php?id=<?php echo $data['id'];?>'>Add</a>|
        <a href='Editinfo.php?id=<?php echo $data['id'];?>'>Edit</a>|
        <a href='admindelete.php?id=<?php echo $data['id'];?>'>Delete</a></td>
    </tr>
   <?php } ?>
        </table>

    </body>
</html>