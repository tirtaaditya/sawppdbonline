<?php
  include "koneksi.php";
  $nama  = $_POST['nama'];
  $nohp  = $_POST['no_hp'];
  $username  = $_POST['username'];
  $password  = md5($_POST['password']);

// cek username sudah terdaftar atau belum
  $login = mysqli_query($koneksi,"select * from users where username='$username'");
  $cek = mysqli_num_rows($login);
  if($cek > 0){
	header("location:registrasi.php?alert=1");
  }else{
  $mysqli  = "INSERT INTO users (Username, Password, Nama, Nohp, Level) VALUES ('$username', '$password', '$nama', '$nohp', '2')";
  $result  = mysqli_query($koneksi, $mysqli);
  if ($result) {
    echo "<script>alert('Registrasi Berhasil');window.location='login.php'</script>";
   } else {
    echo "<script>alert('Registrasi Gagal');window.location='registrasi.php'</script>";
   }
  mysqli_close($conn);  
  }

?>