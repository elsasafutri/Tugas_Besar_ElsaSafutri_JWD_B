<?php 

$host  = "localhost";
$user  ="root";
$pass  ="";
$db    ="db_perpustakaan";

$koneksi = mysqli_connect ('localhost','root','','db_perpustakaan');

//cek koneksi 
if (mysqli_connect_error()){
	echo 'koneksi ke database salah: ', mysqli_connect_error();
	//ini berfungsi jika error maka akan keluar output seperti di atas
}
?>