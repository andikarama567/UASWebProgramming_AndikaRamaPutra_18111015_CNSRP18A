<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$pwd = $_POST['pwd'];
 
// menyeleksi data user dengan username dan pwd yang sesuai
$result = mysqli_query($koneksi,"SELECT * FROM masuk where username='$username' and pwd='$pwd'");

$cek = mysqli_num_rows($result);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	header("location:../Afterlogin/cover.php");
} else {
	header("location:Login.php?pesan=Username Or Password Doesn't Exist !!");
}
?>