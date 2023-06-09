<?php

include("conn.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['Simpan'])){
    
        $id = $_POST['id'];
        $tanggal = $_POST['tanggal'];
        $isi = $_POST['isi'];

    // buat query update
    $result = mysqli_query($koneksi, "UPDATE kontak SET tanggal='$tanggal', isi='$isi' WHERE id='$id'");
    header('Location:adminkontak.php');

    $query = mysqli_query($db, $sql);

    // // apakah query update berhasil?
    // if( $query ) {
    //     // kalau berhasil alihkan ke halaman list-siswa.php
    //     header('Location: anggota_ekstra.php');
    // } else {
    //     // kalau gagal tampilkan pesan
    //     die("Gagal menyimpan perubahan...");
    // }


} else {
    die("Akses dilarang...");
}

?>