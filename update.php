<?php
// koneksi database
include('konek.php');

// menangkap data yang di kirim dari form
$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun_terbit = $_POST['tahun_terbit'];
$isbn = $_POST['isbn'];

// update data ke database
mysqli_query($koneksi, "UPDATE id_buku SET judul='$judul', pengarang='$pengarang', tahun_terbit='$tahun_terbit', isbn='$isbn' WHERE id='$id_buku'");


// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
