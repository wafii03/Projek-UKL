<?php

include("conn.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){
    
        $id = $_POST['nim'];
        $nama = $_POST['nama'];
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        $ekstra = $_POST['Nilai'];
        $siswa = $_POST['keaktifan'];



    // buat query update
    $result = mysqli_query($koneksi, "UPDATE anggota_ekstra SET nama='$nama',Username='$username',Password='$password', nilai='$ekstra',keaktifan='$siswa' WHERE nim=$id");
    header('Location: tabel.php');

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