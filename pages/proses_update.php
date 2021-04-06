<?php
session_start();

//Koneksi
  include "../koneksi.php";
  $type = $_GET['proses'];
  $username = $_SESSION['username'];
  
// UPDATE FORMULIR

  if($type=='ppdb_formulir'){
  $nama_lengkap     		= $_POST['nama_lengkap'];	 
  $nama_panggilan   		= $_POST['nama_panggilan'];		 
  $jenis_kelamin    		= $_POST['jenis_kelamin'];
  $tempat_lahir     		= $_POST['tempat_lahir'];
  $tanggal_lahir    		= $_POST['tanggal_lahir'];
  $agama            		= $_POST['agama'];
  $no_whatsapp       		= $_POST['no_whatsapp'];
  $alamat           		= $_POST['alamat'];
  $asal_sekolah     		= $_POST['asal_sekolah'];
  $ayah_nama        		= $_POST['ayah_nama_lengkap'];
  $ayah_tempat_lahir		= $_POST['ayah_tempat_lahir'];
  $ayah_tanggal_lahir		= $_POST['ayah_tanggal_lahir'];
  $ayah_agama       		= $_POST['ayah_agama'];
  $ayah_pekerjaan    		= $_POST['ayah_pekerjaan'];
  $ayah_pendidikan_terakhir     = $_POST['ayah_pendidikan_terakhir'];                                        
  $ayah_no_telp			= $_POST['ayah_no_telp'];
  $ibu_nama        		= $_POST['ibu_nama_lengkap'];
  $ibu_tempat_lahir		= $_POST['ibu_tempat_lahir'];
  $ibu_tanggal_lahir		= $_POST['ibu_tanggal_lahir'];
  $ibu_agama       		= $_POST['ibu_agama'];
  $ibu_pekerjaan    		= $_POST['ibu_pekerjaan'];
  $ibu_pendidikan_terakhir     	= $_POST['ibu_pendidikan_terakhir'];                                        
  $ibu_no_telp			= $_POST['ibu_no_telp'];        
  $jurusan	    		= $_POST['jurusan'];
  $nem		    		= $_POST['nem'];
  $nilai_rapot	    		= $_POST['nilai_rapot'];

  $dokumen_ijazah		= $_FILES['ijazah']['name'];
  $dokumen_ijazah_temp		= $_FILES['ijazah']['tmp_name'];
  $dokumen_ijazah_path		= "../dokumen/ijazah/".$username."_".$dokumen_ijazah;
  move_uploaded_file($dokumen_ijazah_temp, $dokumen_ijazah_path);

  $dokumen_rapot		= $_FILES['rapot']['name'];
  $dokumen_rapot_temp		= $_FILES['rapot']['tmp_name'];
  $dokumen_rapot_path		= "../dokumen/rapot/".$username."_".$dokumen_rapot;
  move_uploaded_file($dokumen_rapot_temp, $dokumen_rapot_path);

  $dokumen_akta			= $_FILES['akta']['name'];
  $dokumen_akta_temp		= $_FILES['akta']['tmp_name'];
  $dokumen_akta_path		= "../dokumen/akta/".$username."_".$dokumen_akta;
  move_uploaded_file($dokumen_akta_temp, $dokumen_akta_path);

  $dokumen_foto			= $_FILES['foto']['name'];
  $dokumen_foto_temp		= $_FILES['foto']['tmp_name'];
  $dokumen_foto_path		= "../dokumen/foto/".$username."_".$dokumen_foto;
  move_uploaded_file($dokumen_foto_temp, $dokumen_foto_path);

  $dokumen_kk			= $_FILES['kk']['name'];
  $dokumen_kk_temp		= $_FILES['kk']['tmp_name'];
  $dokumen_kk_path		= "../dokumen/kk/".$username."_".$dokumen_kk;
  move_uploaded_file($dokumen_kk_temp, $dokumen_kk_path);

  $data = mysqli_query($koneksi,"select * from siswa_baru where id_user='$username'");
  while($a = mysqli_fetch_array($data)){
	$ori_ijazah = $a['dokumen_ijazah'];
	$ori_rapot  = $a['dokumen_rapot'];
	$ori_akta   = $a['dokumen_akta_kelahiran'];
	$ori_foto   = $a['dokumen_pas_foto'];
	$ori_kk     = $a['dokumen_kartu_keluarga'];
  };

  if($dokumen_ijazah_path=="../dokumen/ijazah/".$username."_"){
	$dokumen_ijazah=$ori_ijazah;
  }else{ $dokumen_ijazah=$dokumen_ijazah_path;
  }

  if($dokumen_akta_path=="../dokumen/akta/".$username."_"){
	$dokumen_akta=$ori_akta;
  }else{ $dokumen_akta=$dokumen_akta_path;
  }

  if($dokumen_pas_foto_path=="../dokumen/foto/".$username."_"){
	$dokumen_foto=$ori_foto;
  }else{ $dokumen_foto=$dokumen_pas_foto_path;
  }

  if($dokumen_kk_path=="../dokumen/kk/".$username."_"){
	$dokumen_kk=$ori_kk;
  }else{ $dokumen_kk=$dokumen_kk_path;
  }

  if($dokumen_rapot_path=="../dokumen/rapot/".$username."_"){
	$dokumen_rapot=$ori_rapot;
  }else{ $dokumen_rapot=$dokumen_rapot_path;
  }

  $mysqli  = "UPDATE siswa_baru set
    nama_lengkap='$nama_lengkap', nama_panggilan='$nama_panggilan', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', 
    tanggal_lahir='$tanggal_lahir', agama='$agama', no_wa='$no_whatsapp', alamat='$alamat', asal_sekolah='$asal_sekolah', 
    ayah_nama='$ayah_nama', ayah_tempat_lahir='$ayah_tempat_lahir', ayah_tanggal_lahir='$ayah_tanggal_lahir', ayah_agama='$ayah_agama', ayah_pekerjaan='$ayah_pekerjaan', 
    ayah_pendidikan_terakhir='$ayah_pendidikan_terakhir', ayah_no_telp='$ayah_no_telp', ibu_nama='$ibu_nama', ibu_tempat_lahir='$ibu_tempat_lahir', ibu_tanggal_lahir='$ibu_tanggal_lahir', ibu_agama='$ibu_agama', 
    ibu_pekerjaan='$ibu_pekerjaan', ibu_pendidikan_terakhir='$ibu_pendidikan_terakhir', ibu_no_telp='$ibu_no_telp',

    dokumen_ijazah='$dokumen_ijazah', 
    dokumen_akta_kelahiran='$dokumen_akta', 
    dokumen_pas_foto='$dokumen_foto', 
    dokumen_kartu_keluarga='$dokumen_kk', 
    dokumen_rapot='$dokumen_rapot', 
    
    tanggal_registrasi=now(), status_siswa=null WHERE
    id_user='$username'";

  $result  = mysqli_query($koneksi, $mysqli);
  if ($result) {
    echo "<script>alert('Berhasil');window.location='ppdb_insert.php'</script>";
   } else {
    echo "<script>alert('Gagal');window.location='ppdb_insert.php'</script>";
   }
  mysqli_close($conn);  
  }


// TOLAK SISWA PPDB


  elseif($type=='ppdb_tolak'){
  $catatan     		= $_POST['catatan'];	 
  $id     		= $_POST['siswa_id'];		
  $mysqli  = "UPDATE siswa_baru set catatan='$catatan', status_siswa='1' where
    id_siswa_baru='$id'";

  $result  = mysqli_query($koneksi, $mysqli);
  if ($result) {
    echo "<script>alert('Berhasil');window.location='ppdb_insert.php'</script>";
   } else {
    echo "<script>alert('Gagal');window.location='ppdb_insert.php'</script>";
   }
  mysqli_close($conn);  
  }

// TERIMA SISWA PPDB

  elseif($type=='ppdb_terima'){
  $id 		= $_GET['id_siswa'];	 	
  $mysqli  = "UPDATE siswa_baru set tanggal_disetujui=now(), status_siswa='2' where
    id_siswa_baru='$id'";

  $result  = mysqli_query($koneksi, $mysqli);
  if ($result) {
    echo "<script>alert('Berhasil');window.location='ppdb_insert.php'</script>";
   } else {
    echo "<script>alert('Gagal');window.location='ppdb_insert.php'</script>";
   }
  mysqli_close($conn);  
  }

// SOAL

  elseif($type=='soal'){
  $soal     		= $_POST['soal'];
  $A     		= $_POST['A'];
  $B     		= $_POST['B'];
  $C     		= $_POST['C'];
  $D     		= $_POST['D'];
  $jawaban    		= $_POST['jawaban'];	 
  $idsoal     		= $_POST['id_soal'];
  $id_get     		= $_POST['id_get'];

  $mysqli  = "UPDATE soal_test set soal='$soal', A='$A', B='$B', C='$C', D='$D', jawaban_benar='$jawaban' where
    id_soal='$idsoal'";

  $result  = mysqli_query($koneksi, $mysqli);
  if ($result) {
    echo "<script>alert('Berhasil');window.location='soal_insert.php?id=".$id_get."&type=1'</script>";
   } else {
    echo "<script>alert('Gagal');window.location='soal_insert.php'</script>";
   }
  mysqli_close($conn);  
  }

// BOBOT

  elseif($type=='bobot'){
  $nem     		= $_POST['nem'];
  $nilai_rapot 		= $_POST['nilai_rapot'];
  $umur     		= $_POST['umur'];
  $nilai_soal  		= $_POST['nilai_soal'];

  $mysqli  = "UPDATE spk_bobot set nem='$nem', nilai_rapot='$nilai_rapot', umur='$umur', nilai_soal='$nilai_soal', updateon=now(), updateby='$username' where
    id_bobot=1";

  $result  = mysqli_query($koneksi, $mysqli);
  if ($result) {
    echo "<script>alert('Berhasil');window.location='bobot_insert.php'</script>";
   } else {
    echo "<script>alert('Gagal');window.location='bobot_insert.php'</script>";
   }
  mysqli_close($conn);  
  }

//JURUSAN

  elseif($type=='jurusan'){
  $id	 		= $_POST['idjurusan'];
  $nama_jurusan		= $_POST['nama_jurusan'];
  $akreditas 		= $_POST['akreditas'];
  $ppdb 		= $_POST['ppdb'];	 	
  $mysqli  = "UPDATE jurusan SET nama_jurusan='$nama_jurusan', akreditas='$akreditas', ppdb='$ppdb', id_user='$username' where id_jurusan='$id'";

  $result  = mysqli_query($koneksi, $mysqli);
  if ($result) {
    echo "<script>alert('Berhasil');window.location='jurusan_list.php'</script>";
   } else {
    echo "<script>alert('Gagal');window.location='jurusan_list.php'</script>";
   }
  mysqli_close($conn);  
  }else{ echo "SALAH"; }


?>