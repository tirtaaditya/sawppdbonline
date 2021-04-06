
				<?php
				include "../koneksi.php";
				$username = $_SESSION['username'];
				$param5 = mysqli_query($koneksi,"select * from soal_jawaban where id_user='$username'");
				$cek5 = mysqli_num_rows($param5);
				if($cek5<10){ ?>



                                <!-- /.panel-heading -->
				<?php
				  include "../koneksi.php";
				  $no = 1;
				  $username = $_SESSION['username'];
					$data = mysqli_query($koneksi,"select * from siswa_baru where id_user='$username'");
					while($d = mysqli_fetch_array($data)){ $id=$d['id_jurusan']; }

                                  $data = mysqli_query($koneksi,"select * from soal_test where id_jurusan='$id' and id_soal not in (select id_soal from soal_jawaban where id_user='$username')");
				   while($d = mysqli_fetch_array($data)){ ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
				SOAL
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
			   <form action="proses_insert.php?proses=soal_jawab" method="POST">							    
					<?=$d['soal'];?><br>
						<input class="form-control" name="id_get" value="<?=$id;?>" type="hidden"><br>
						<input class="form-control" name="id_soal" value="<?=$d['id_soal'];?>" type="hidden">
						<input class="form-control" name="jawaban_benar" value="<?=$d['jawaban_benar'];?>" type="hidden">
						<input type="radio" name="jawaban" value="A"> <?=$d['A'];?><br>
						<input type="radio" name="jawaban" value="B"> <?=$d['B'];?><br>
						<input type="radio" name="jawaban" value="C"> <?=$d['C'];?><br>
						<input type="radio" name="jawaban" value="D"> <?=$d['D'];?><br>
						<br><br><br>
	                                  <button class="btn btn-lg btn-primary btn-block">Simpan</button><br>
			 </form>

				    </div>
				</div>
			    </div>
				<?php
				  }
				?>



				<?php }else{ ?>


                                <!-- /.panel-heading -->
				<?php
				  include "../koneksi.php";
				  $no = 1;
				  $username = $_SESSION['username'];
                                  $data = mysqli_query($koneksi,"select id_jurusan from siswa_baru where id_user='$username'");
				   while($d = mysqli_fetch_array($data)){ $jurusanid = $d['id_jurusan'];}

                                  $data = mysqli_query($koneksi,"select sum(nilai) as nilaitotal from soal_jawaban where id_user='$username'");
				   while($d = mysqli_fetch_array($data)){ ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
				PENILAIAN
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">

					<center><h3>Total Nilai <?=$d['nilaitotal'];?></h3></center>

					<?php 				  
						$username = $_SESSION['username'];
						$param1 = mysqli_query($koneksi,"select * from spk_siswa where username='$username'");
						$cek1 = mysqli_num_rows($param1);
						if($cek1!=1){ ?><br>
					  <a href="proses_insert.php?proses=spk"> 
					   <button class="btn btn-lg btn-primary btn-block">Proses Pendaftaran</button><br>
					  </a>


					<?php }else{ ?><br><a href="jurusan_detail.php?id=<?=$jurusanid;?>">
					   <button class="btn btn-lg btn-primary btn-block">Cek Peringkat</button></a><br>
					<?php } ?>

				    </div>
				</div>
			    </div>
				<?php
				  }
				?>



				<?php } ?>


