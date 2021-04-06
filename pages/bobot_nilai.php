
			   <form action="proses_update.php?proses=bobot" method="POST">
                                <!-- /.panel-heading -->
					<?php 
					include '../koneksi.php';
					$data = mysqli_query($koneksi,"select * from spk_bobot where id_bobot=1");
					while($d = mysqli_fetch_array($data)){
					?>
					  <label>NEM</label>
                     	                  <input class="form-control" name="nem" type="text" value="<?=$d['nem'];?>" maxlength="2" autofocus><br>
					  <label>Nilai Rapot</label>
                     	                  <input class="form-control" name="nilai_rapot" type="text" value="<?=$d['nilai_rapot'];?>" maxlength="2" autofocus><br>
					  <label>Umur</label>
                     	                  <input class="form-control" name="umur" type="text" value="<?=$d['umur'];?>" maxlength="2" autofocus><br>
					  <label>Nilai Soal</label>
                     	                  <input class="form-control" name="nilai_soal" type="text" value="<?=$d['nilai_soal'];?>" maxlength="2" autofocus><br>
* Total Bobot harus 100<br><br>

			  <button class="btn btn-lg btn-primary btn-block">Simpan</button><br>
					  <label>Terakhir di Edit Oleh</label>
                     	                  <input class="form-control" value="<?=$d['updateby'];?>" readonly><br>

					<?php } ?>
			 </form>

