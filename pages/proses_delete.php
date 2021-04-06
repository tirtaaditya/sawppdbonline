<?php
  include "../koneksi.php";
  $type = $_GET['proses'];

 if($type == 'jurusan'){
   $id = $_GET['id'];
   $mysqli  = "Delete From jurusan Where id_jurusan='$id'";
    $result  = mysqli_query($koneksi, $mysqli);
    if ($result) {
      echo "<script>alert('Berhasil');window.location='jurusan_list.php'</script>";
    } else {
     echo "<script>alert('Gagal');window.location='jurusan_list.php'</script>";
    }
      mysqli_close($conn);  
  }
 

?>