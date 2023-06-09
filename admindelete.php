<?php
// include database connection file
include("conn.php");
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM kontak WHERE id=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.

header("location:adminkontak.php");
?>
