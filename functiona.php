<?php
if(isset($_POST['submit'])){
    // jika tombol register di klik
    $nama = $_POST['nama'];
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    include_once("conn.php");

    // insert to db
    $result = mysqli_query($koneksi, "INSERT INTO anggota_ekstra (nama,Username,Password,Nilai,keaktifan,Id_ekstra) VALUES('$nama','$username','$password','B','Aktif','3')");
    header("location:login.php");
}