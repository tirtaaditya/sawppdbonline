<?php include "header.php" ?>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">SIAP PPDB Online</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
		    <?php if($_GET['id']!=0){ ?> <?php include "ppdb_pendaftar_proses.php" ?> <?php }else{ ?>
		    <?php if($_SESSION['level']=='2') { ?>
                    <!-- /.row -->
				<button class="btn btn-primary" type="button">
                                   Formulir
                                </button>
				<?php
				include "../koneksi.php";
				$username = $_SESSION['username'];
				$param4 = mysqli_query($koneksi,"select * from siswa_baru where id_user='$username' and tanggal_disetujui is not null and status_siswa='2'");
				$cek4 = mysqli_num_rows($param4);
				$param5 = mysqli_query($koneksi,"select * from soal_jawaban where id_user='$username'");
				$cek5 = mysqli_num_rows($param5);
				if($cek4==1&&$cek5<10){ ?>
				<a href="soal_insert.php?type=2">
                                <button class="btn btn-primary" type="button">
                                   Soal Test
                                </button>
				</a> <?php }else{ ?>
				<a href="soal_insert.php?type=2">
                                <button class="btn btn-primary" type="button">
                                   Soal Selesai
                                </button>
				</a>
				<?php } ?>
                                <br><br>
		    <?php }else{ ?><a href="ppdb_insert.php">
				<button class="btn btn-primary" type="button">
                                   Pendaftar Baru
                                </button></a><a href="ppdb_insert.php?type=1">
                                <button class="btn btn-primary" type="button">
                                   Pendaftar Terverifikasi
                                </button></a>
                                <br><br><?php } ?>

                    <div class="row">
                        <div class="col-lg-12">
			<?php if($_GET['type']!='1'){ $Type=1; }else{ $Type=2; }?>
		       <?php if($_SESSION['level']=='1' && $Type=='1') { ?>
			   <?php include "ppdb_pendaftar_baru.php" ?>
		       <?php }elseif($_SESSION['level']=='1' && $Type=='2') { ?>
			   <?php include "ppdb_pendaftar_terverifikasi.php" ?>

		       <?php }else{ ?>
			<?php
				include "../koneksi.php";
				$username = $_SESSION['username'];
				$param1 = mysqli_query($koneksi,"select * from siswa_baru where id_user='$username'");
				$cek1 = mysqli_num_rows($param1);
				$param2 = mysqli_query($koneksi,"select * from siswa_baru where id_user='$username' and status_siswa is null");
				$cek2 = mysqli_num_rows($param2);
				$param3 = mysqli_query($koneksi,"select * from siswa_baru where id_user='$username' and tanggal_disetujui is null and status_siswa='1'");
				$cek3 = mysqli_num_rows($param3);
				$param4 = mysqli_query($koneksi,"select * from siswa_baru where id_user='$username' and tanggal_disetujui is not null and status_siswa='2'");
				$cek4 = mysqli_num_rows($param4);
			
				if($cek1==0){
			?>
                           <!-- JIKA BELUM ISI -->
			   <?php include "ppdb_formulir.php" ?>
			<?php }elseif($cek2==1){ ?>
                           <!-- JIKA SUDAH ISI dan SEDANG DIVERIFIKASI -->
			   <?php include "ppdb_formulir_1.php" ?>
			<?php }elseif($cek3==1){ ?>
                           <!-- JIKA SUDAH ISI VERIFIKASI DITOLAK -->
			   <?php include "ppdb_formulir_2.php" ?>
			<?php }elseif($cek4==1){ ?>
                           <!-- JIKA SUDAH ISI VERIFIKASI DITERIMA -->
			   <?php include "ppdb_formulir_3.php" ?>
			<?php } ?>
		      <?php } ?>
		    <?php } ?>

                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
<?php include "footer.php" ?>