<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "web_ekstra";
    $tb = "anggota_ekstra";

	$koneksi = mysqli_connect($host, $user, $pass, $db, $tb);

	if(!$koneksi) {
		die("Koneksi gagal : ".mysqli_connect_error());
	}
?>