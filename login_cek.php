<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from users where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['Level']=="1"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "1";
		header("location:pages/");

	// cek jika user login sebagai siswa
	}else if($data['Level']=="2"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "2";
		header("location:pages/");

	}else{

		// alihkan ke halaman login kembali
		header("location:login.php?alert=3");
	}	
}else{
	header("location:login.php?alert=1");
}

?>