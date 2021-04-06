

                                <!-- /.panel-heading -->
				<?php
				  include "../koneksi.php";
				  $no = 1;
				  $id=$_GET['id'];
                                  $data = mysqli_query($koneksi,"select * from soal_test where id_jurusan='$id' LIMIT 10");
				   while($d = mysqli_fetch_array($data)){ ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
				SOAL <?=$no++;?>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
			   <form action="proses_update.php?proses=soal" method="POST">							    
					<textarea class="form-control" name="soal" placeholder="Soal"><?=$d['soal'];?></textarea><br>
						<input class="form-control" name="id_get" value="<?=$id;?>" type="hidden"><br>
						<input class="form-control" name="id_soal" value="<?=$d['id_soal'];?>" type="hidden"><br>
						<input class="form-control" name="A" value="<?=$d['A'];?>" placeholder="Pilihan A"><br>
						<input class="form-control" name="B" value="<?=$d['B'];?>" placeholder="Pilihan B"><br>
						<input class="form-control" name="C" value="<?=$d['C'];?>" placeholder="Pilihan C"><br>
						<input class="form-control" name="D" value="<?=$d['D'];?>" placeholder="Pilihan D"><br>
						<select class="form-control" name="jawaban">
						<option value="<?=$d['jawaban_benar'];?>"> <?=$d['jawaban_benar'];?> </optinon>
						<option value="A"> A </optinon>
						<option value="B"> B </optinon>
						<option value="C"> C </optinon>
						<option value="D"> D </optinon>
						</select><br><br><br>
	                                  <button class="btn btn-lg btn-primary btn-block">Simpan</button><br><br><br><br>
			 </form>

				    </div>
				</div>
			    </div>
				<?php
				  }
				?>


