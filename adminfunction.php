<?php
if(isset($_POST['submit'])){
    // jika tombol register di klik
    $tanggal = $_POST['tanggal'];
    $info = $_POST['isi'];

    include_once("conn.php");

    // insert to db
    $result = mysqli_query($koneksi, "INSERT INTO kontak (tanggal,isi) VALUES('$tanggal','$info')");
    header("location:adminkontak.php");
}