<?php

include("conn.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location:');
}

// //ambil id dari query string
// $id = $_GET['id'];

// // // // buat query untuk ambil data dari database
// $result = mysqli_query($koneksi, "SELECT * FROM anggota_ekstra WHERE nim=$id");
// $sql = "SELECT * FROM anggota_ekstra WHERE nim=$id";
// $query = mysqli_query($koneksi, $sql);
// $siswa = mysqli_fetch_assoc($query);

// // jika data yang di-edit tidak ditemukan
// if( mysqli_num_rows($query) < 1 ){
//     die("data tidak ditemukan...");
// }
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM kontak WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $tanggal = $user_data['tanggal'];
    $isi = $user_data['isi'];
}

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="loginn.css">
    <title>Edit eskul</title>
</head>

<body>

    <form method="POST" action="adminkontak.php">
        <table border="0">
            <tr> 
                <td>Tanggal</td>
                <td><input type="date" name="tanggal" value="<?php echo $tanggal;?>"></td>
            </tr>
            <tr> 
                <td>Informasi</td>
                <td><input type="text" name="isi" value="<?php echo $isi;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
    </body>
</html>