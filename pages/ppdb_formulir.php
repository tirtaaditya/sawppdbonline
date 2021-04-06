
			   <form action="proses_insert.php" method="POST" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
	                           Data Diri
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">

                                    <div class="table-responsive">
                     	                  <input type='hidden' name="proses" value="ppdb_formulir" >
					  <Label for="nama_lengkap">Nama Lengkap</label>
                     	                  <input class="form-control" placeholder="Nama Lengkap" name="nama_lengkap" type="text" maxlength ="40" autofocus required><br>
					  <Label for="nama_lengkap">Nama Panggilan</label>
                     	                  <input class="form-control" placeholder="Nama Panggilan" name="nama_panggilan" type="text" maxlength ="40" autofocus required><br>
					  <Label for="nama_lengkap">Jenis Kelamin</label>
					  <Select class="form-control" name="jenis_kelamin">
						<option value="">- Pilih -</option>
						<option value="L">Laki - Laki</option>
						<option value="P">Perempuan</option>
					  </select><br>
					  <Label for="nama_lengkap">Tempat Lahir</label>
                     	                  <input class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" type="text" maxlength ="40" autofocus required required><br>
					  <Label for="nama_lengkap">Tanggal Lahir</label>
					  <input class="form-control" name="tanggal_lahir" type="date" autofocus required><br>
					  <Label for="nama_lengkap">Agama</label>
					  <input class="form-control" name="agama" type="text" placeholder="Agama" autofocus required><br>
					  <Label for="nama_lengkap">No Whatsapp</label>
					  <input class="form-control" name="no_whatsapp" type="text" placeholder="No Whatsapp" autofocus required><br>
					  <Label for="nama_lengkap">Alamat</label>
					  <textarea class="form-control" name="alamat" type="text" placeholder="Alamat" autofocus required></textarea><br>
					  <Label for="nama_lengkap">Asal Sekolah</label>
					  <input class="form-control" name="asal_sekolah" type="text" placeholder="Asal Sekolah" autofocus required><br>
					  <Label for="nama_lengkap">Nilai Ujian Nasional</label>
					  <input class="form-control" name="nem" type="text" placeholder="Nilai Ujian Nasional (NEM)" maxlength="2" autofocus required><br>
					  <Label for="nama_lengkap">Rata Rata Nilai Rapot Semester Akhir (1-100)</label>
					  <input class="form-control" name="nilai_rapot" type="text" placeholder="Rata Rata Nilai Rapot" maxlength="3" autofocus required><br>


                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
	                           Data Orang Tua
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
					  <Label for="nama_lengkap">Ayah Kandung</label><br><hr>
					  <Label for="nama_lengkap">Nama Lengkap</label>
					  <input class="form-control" name="ayah_nama_lengkap" type="text" placeholder="Nama Lengkap" autofocus required><br>
					  <Label for="nama_lengkap">Tempat Lahir</label>
                     	                  <input class="form-control" placeholder="Tempat Lahir" name="ayah_tempat_lahir" type="text" maxlength ="40" autofocus><br>
					  <Label for="nama_lengkap">Tanggal Lahir</label>
					  <input class="form-control" name="ayah_tanggal_lahir" type="date" autofocus required><br>
					  <Label for="nama_lengkap">Agama</label>
					  <input class="form-control" name="ayah_agama" type="text" placeholder="Agama" autofocus required><br>
					  <Label for="nama_lengkap">Pendidikan Terakhir</label>
					  <input class="form-control" name="ayah_pendidikan_terakhir" type="text" placeholder="Pendidikan Terakhir" autofocus required><br>
					  <Label for="nama_lengkap">Pekerjaan</label>
					  <input class="form-control" name="ayah_pekerjaan" type="text" placeholder="Pekerjaan" autofocus required><br>
					  <Label for="nama_lengkap">No Telp / HP</label>
					  <input class="form-control" name="ayah_no_telp" type="text" placeholder="No Telp / HP" autofocus required><br><hr>

					  <Label for="nama_lengkap">Ibu Kandung</label><br><hr>
					  <Label for="nama_lengkap">Nama Lengkap</label>
					  <input class="form-control" name="ibu_nama_lengkap" type="text" placeholder="Nama Lengkap" autofocus required><br>
					  <Label for="nama_lengkap">Tempat Lahir</label>
                     	                  <input class="form-control" placeholder="Tempat Lahir" name="ibu_tempat_lahir" type="text" maxlength ="40" autofocus required><br>
					  <Label for="nama_lengkap">Tanggal Lahir</label>
					  <input class="form-control" name="ibu_tanggal_lahir" type="date" autofocus required><br>
					  <Label for="nama_lengkap">Agama</label>
					  <input class="form-control" name="ibu_agama" type="text" placeholder="Agama" autofocus required><br>
					  <Label for="nama_lengkap">Pendidikan Terakhir</label>
					  <input class="form-control" name="ibu_pendidikan_terakhir" type="text" placeholder="Pendidikan Terakhir" autofocus required><br>
					  <Label for="nama_lengkap">Pekerjaan</label>
					  <input class="form-control" name="ibu_pekerjaan" type="text" placeholder="Pekerjaan" autofocus required><br>
					  <Label for="nama_lengkap">No Telp / HP</label>
					  <input class="form-control" name="ibu_no_telp" type="text" placeholder="No Telp / HP" autofocus required><br>

				    </div>
				</div>
			    </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
	                           Dokumen Pelengkap
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
					<Label for="nama_lengkap">Ijazah</label>
					<input type="file" name="ijazah"><br>
					<Label for="nama_lengkap">Nilai Rapot Semester Terakhir</label>
					<input type="file" name="rapot"><br>
					<Label for="nama_lengkap">Akta Kelahiran</label>
					<input type="file" name="akta"><br>
					<Label for="nama_lengkap">Pas Foto</label>
					<input type="file" name="foto"><br>
					<Label for="nama_lengkap">Kartu Keluarga</label>
					<input type="file" name="kk"><br>
				    </div>
				</div>
			    </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
	                           Jurusan yang Diambil
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
					<select name="jurusan" class="form-control">
							<?php 
							include '../koneksi.php';
							$data = mysqli_query($koneksi,"select * from jurusan");
							while($d = mysqli_fetch_array($data)){
							?> 
						<option value="<?=$d[id_jurusan];?>"><?=$d[nama_jurusan];?></option>
							<?php
							}
							?>

					</select>
				    </div>
				</div>
			    </div>

			  <button class="btn btn-lg btn-primary btn-block">Simpan</button><br>
			 </form>

