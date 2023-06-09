<?php

include("conn.php");

// kalau tidak ada id di query string
if( !isset($_GET['nim']) ){
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
$result = mysqli_query($koneksi, "SELECT * FROM anggota_ekstra WHERE nim=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $username = $user_data['Username'];
    $password = $user_data['Password'];
    $ekstra = $user_data['Nilai'];
    $siswa = $user_data['keaktifan'];
}

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="loginn.css">
    <title>Edit eskul</title>
</head>

<body>

    <form method="POST" action="tabelprosesedit.php">
        <table border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
            </tr>
            <tr> 
                <td>Username</td>
                <td><input type="text" name="Username" value="<?php echo $username;?>"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="text" name="Password" value="<?php echo $password;?>"></td>
            </tr>
            <tr> 
                <td>nilai</td>
                <td><input type="text" name="Nilai" value="<?php echo $ekstra;?>"></td>
            </tr>
            <tr> 
                <td>keaktifan</td>
                <td><input type="text" name="keaktifan" value="<?php echo $siswa;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="nim" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
    </body>
</html>