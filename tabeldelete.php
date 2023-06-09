<?php
// include database connection file
include("conn.php");
 
// Get id from URL to delete that user
$id = $_GET['nim'];
 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM anggota_ekstra WHERE nim=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.

header("location:tabel.php");
?>
