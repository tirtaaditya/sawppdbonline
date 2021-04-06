<?php
session_start();

//Koneksi
  include "../koneksi.php";
  $type = $_POST['proses'];
  $type1 = $_GET['proses'];
  $username = $_SESSION['username'];

// POST JURUSAN


  if($type == 'jurusan'){
  $nama_jurusan  = $_POST['nama_jurusan'];
  $akreditas     = $_POST['akreditas'];
  $ppdb   = $_POST['ppdb'];

  $mysqli  = "INSERT INTO jurusan (nama_jurusan, akreditas, id_user, ppdb) VALUES ('$nama_jurusan', '$akreditas', '$username', '$ppdb')";
  $result  = mysqli_query($koneksi, $mysqli);
  if ($result) {
    echo header("location:proses_insert.php?nama_jurusan=".$nama_jurusan."&akreditas=".$akreditas."&proses=soal");
   } else {
    echo "<script>alert('Gagal');window.location='jurusan_list.php'</script>";
   }
  mysqli_close($conn);  
  }

// POST SOAL

  elseif($type1 == 'soal'){
  $nama_jurusan  = $_GET['nama_jurusan'];
  $akreditas     = $_GET['akreditas'];  

  $data = mysqli_query($koneksi,"select * from jurusan where nama_jurusan='$nama_jurusan' and akreditas='$akreditas'");
  while($d = mysqli_fetch_array($data)){
    $id_jurusan=$d['id_jurusan'];
	}
  $mysqli1  = "INSERT INTO soal_test (id_jurusan) VALUES ('$id_jurusan')"; mysqli_query($koneksi, $mysqli1);
  $mysqli2  = "INSERT INTO soal_test (id_jurusan) VALUES ('$id_jurusan')"; mysqli_query($koneksi, $mysqli2);
  $mysqli3  = "INSERT INTO soal_test (id_jurusan) VALUES ('$id_jurusan')"; mysqli_query($koneksi, $mysqli3);
  $mysqli4  = "INSERT INTO soal_test (id_jurusan) VALUES ('$id_jurusan')"; mysqli_query($koneksi, $mysqli4);
  $mysqli5  = "INSERT INTO soal_test (id_jurusan) VALUES ('$id_jurusan')"; mysqli_query($koneksi, $mysqli5);
  $mysqli6  = "INSERT INTO soal_test (id_jurusan) VALUES ('$id_jurusan')"; mysqli_query($koneksi, $mysqli6);
  $mysqli7  = "INSERT INTO soal_test (id_jurusan) VALUES ('$id_jurusan')"; mysqli_query($koneksi, $mysqli7);
  $mysqli8  = "INSERT INTO soal_test (id_jurusan) VALUES ('$id_jurusan')"; mysqli_query($koneksi, $mysqli8);
  $mysqli9  = "INSERT INTO soal_test (id_jurusan) VALUES ('$id_jurusan')"; mysqli_query($koneksi, $mysqli9);
  $mysqli  = "INSERT INTO soal_test (id_jurusan) VALUES ('$id_jurusan')";
  $result  = mysqli_query($koneksi, $mysqli);
  if ($result) {
    echo "<script>alert('Berhasil');window.location='jurusan_list.php'</script>";
   } else {
    echo "<script>alert('Gagal');window.location='jurusan_list.php'</script>";
   }
  mysqli_close($conn);  
  }




// POST FORMULIR


  elseif($type=='ppdb_formulir'){
  $nama_lengkap     		= $_POST['nama_lengkap'];	 
  $nama_panggilan   		= $_POST['nama_panggilan'];		 
  $jenis_kelamin    		= $_POST['jenis_kelamin'];
  $tempat_lahir     		= $_POST['tempat_lahir'];
  $tanggal_lahir    		= $_POST['tanggal_lahir'];
  $agama            		= $_POST['agama'];
  $no_whatsapp       		= $_POST['no_whatsapp'];
  $alamat           		= $_POST['alamat'];
  $asal_sekolah     		= $_POST['asal_sekolah'];
  $nem		     		= $_POST['nem'];
  $nilai_rapot     		= $_POST['nilai_rapot'];
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


  $mysqli  = "INSERT INTO siswa_baru 
    (nama_lengkap, nama_panggilan, jenis_kelamin, tempat_lahir, tanggal_lahir, agama, no_wa, alamat, asal_sekolah, 
   	ayah_nama, ayah_tempat_lahir, ayah_tanggal_lahir, ayah_agama, ayah_pekerjaan, ayah_pendidikan_terakhir, ayah_no_telp,
	ibu_nama, ibu_tempat_lahir, ibu_tanggal_lahir, ibu_agama, ibu_pekerjaan, ibu_pendidikan_terakhir, ibu_no_telp,
	id_user, dokumen_ijazah, dokumen_akta_kelahiran, dokumen_pas_foto, dokumen_kartu_keluarga, dokumen_rapot, tanggal_registrasi, id_jurusan,
	nem, nilai_rapot) VALUES
    ('$nama_lengkap', '$nama_panggilan', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$agama', '$no_whatsapp', '$alamat', '$asal_sekolah',
	'$ayah_nama', '$ayah_tempat_lahir', '$ayah_tanggal_lahir', '$ayah_agama', '$ayah_pekerjaan', '$ayah_pendidikan_terakhir', '$ayah_no_telp', 
	'$ibu_nama', '$ibu_tempat_lahir', '$ibu_tanggal_lahir', '$ibu_agama', '$ibu_pekerjaan', '$ibu_pendidikan_terakhir', '$ibu_no_telp',
	'$username', '$dokumen_ijazah_path', '$dokumen_akta_path', '$dokumen_foto_path', '$dokumen_kk_path', '$dokumen_rapot_path', now(), '$jurusan',
	'$nem', '$nilai_rapot')";
  $result  = mysqli_query($koneksi, $mysqli);
  if ($result) {
    echo "<script>alert('Berhasil');window.location='ppdb_insert.php'</script>";
   } else {
    echo "<script>alert('Gagal');window.location='ppdb_insert.php'</script>";
   }
  mysqli_close($conn);  
  }

//SOAL JAWABAN

  elseif($type1 == 'soal_jawab'){
  $id_soal	 = $_POST['id_soal'];
  $jawaban_benar = $_POST['jawaban_benar'];
  $jawaban       = $_POST['jawaban'];

  if($jawaban==$jawaban_benar){ $nilai=10; }else{ $nilai=0; };

  $mysqli  = "INSERT INTO soal_jawaban (id_user, id_soal, jawaban, nilai) VALUES 
  ('$username', '$id_soal', '$jawaban', '$nilai')";
  $result  = mysqli_query($koneksi, $mysqli);
  if ($result) {
    echo header("location:soal_insert.php?type=2");
   } else {
    echo "<script>alert('Gagal');window.location='soal_insert.php?type=2'</script>";
   }
  mysqli_close($conn);  
  }


//UPDATE SPK

  elseif($type1 == 'spk'){

  $data = mysqli_query($koneksi,"select id_jurusan, nem, nilai_rapot, YEAR(now())-YEAR(tanggal_lahir) as umur from siswa_baru where id_user='$username'");
  while($d = mysqli_fetch_array($data)){
    $id_jurusan		= $d['id_jurusan'];
    $nem		= $d['nem'];
    $nilai_rapot	= $d['nilai_rapot'];
    $umur		= $d['umur'];
	}
  $data = mysqli_query($koneksi,"select sum(nilai) as nilai_soal from soal_jawaban where id_user='$username'");
  while($d = mysqli_fetch_array($data)){
    $nilai_soal		= $d['nilai_soal'];
	}


  $mysqli  = "INSERT INTO spk_siswa (username, nem, nilai_rapot, umur, nilai_soal, id_jurusan, id_bobot) VALUES 
  				    ('$username', '$nem', '$nilai_rapot', '$umur', '$nilai_soal', '$id_jurusan', '1')";
  mysqli_query($koneksi, $mysqli);

  $mysqli  = "UPDATE spk_siswa SET 
	      spk_nem = 
			(nem/(SELECT maxnem.nem FROM (SELECT (MAX(a.nem)) AS nem FROM spk_siswa a WHERE id_jurusan='$id_jurusan') maxnem))
			*(SELECT bobotnem.nem FROM (SELECT (a.nem) AS nem FROM spk_bobot a WHERE id_bobot=1) bobotnem),
	      spk_nilai_rapot = 
			(nilai_rapot/(SELECT maxnr.nilai_rapot FROM (SELECT (MAX(a.nilai_rapot)) AS nilai_rapot FROM spk_siswa a WHERE id_jurusan='$id_jurusan')   maxnr))
			*(SELECT bobotnr.nilai_rapot FROM (SELECT (a.nilai_rapot) AS nilai_rapot FROM spk_bobot a WHERE id_bobot=1) bobotnr),
	      spk_umur = 
			(umur/(SELECT maxumur.umur FROM (SELECT (MAX(a.umur)) AS umur FROM spk_siswa a WHERE id_jurusan='$id_jurusan') maxumur))
			*(SELECT bobotumur.umur FROM (SELECT (a.umur) AS umur FROM spk_bobot a WHERE id_bobot=1) bobotumur),
	      spk_nilai_soal = 
			(nilai_soal/(SELECT maxns.nilai_soal FROM (SELECT (MAX(a.nilai_soal)) AS nilai_soal FROM spk_siswa a WHERE id_jurusan='$id_jurusan') maxns))
			*(SELECT bobotns.nilai_soal FROM (SELECT (a.nilai_soal) AS nilai_soal FROM spk_bobot a WHERE id_bobot=1) bobotns),
	      spk_score =
			spk_nem + spk_nilai_rapot + spk_umur + spk_nilai_soal
WHERE id_jurusan='$id_jurusan'";
  $result  = mysqli_query($koneksi, $mysqli);

  

  if ($result) {
    echo "<script>alert('Pendaftaranmu Berhasil, Silakan Cek Peringkatmu');window.location='soal_insert.php?type=2'</script>";
   } else {
    echo "<script>alert('Gagal');window.location='soal_insert.php?type=2'</script>";
   }
  mysqli_close($conn);  
  }


  else{ echo "SALAH"; }

?>