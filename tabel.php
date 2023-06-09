<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css2.css">
        <title>Tabel</title>
    </head>
    <body>
    </body>
         <div class="banner">
            <div class="navbar">
            <label class=" logo"></label>
             <ul>
                <li><a href="uadmin.html">Home</a></li>
                <li><a href="#"><a href="tabel.php">Penilaian</a></li>
                <li><a href="#"><a href="adminkontak.php">Informasi</a></li>
             </ul>

            </div>
            <div class="content">
                <div>
                    <style>
                        a:any-link{
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
                <th>No</th>
                <th>nama user</th>
                <th>ekstra</th>
                <th>Nilai</th>
                <th>Keaktifan</th>
                <th>opsi</th>
            </tr>
            
<?php
    include "conn.php";
    $query_mysqli = mysqli_query($koneksi,"SELECT anggota_ekstra.nim,anggota_ekstra.nilai,anggota_ekstra.keaktifan,
    anggota_ekstra.nama,
    ekstra.Nama
FROM
    anggota_ekstra,
    ekstra
WHERE
    anggota_ekstra.Id_ekstra = ekstra.Id")or die(mysqli_error());
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysqli)){ 
?>
    <tr>
        <td><?php echo $nomor++ ?></td>
        <td><?php echo $data['nama'] ?></td>
        <td><?php echo $data['Nama'] ?></td>
        <td><?php echo $data['nilai'] ?></td>
        <td><?php echo $data['keaktifan'] ?></td>
        <td>
            <a href='tabeledit.php?id=<?php echo $data['nim'];?>'>EDIT</a> |
            <a href='tabeldelete.php?nim=<?php echo $data['nim']?>'>HAPUS</a>
        </td>
    </tr>
   <?php } ?>
        </table>

    </body>
</html>