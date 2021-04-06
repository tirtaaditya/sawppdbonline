
			   <form action="proses_update.php?proses=ppdb_formulir" method="POST" enctype="multipart/form-data">
                                <!-- /.panel-heading -->
					<?php 
					include '../koneksi.php';
					$username = $_SESSION['username'];
					$data = mysqli_query($koneksi,"select * from siswa_baru where id_user='$username'");
					while($d = mysqli_fetch_array($data)){
					?>

                            <div class="panel panel-default">
                                <div class="panel-heading">
	                           Catan Perbaikan
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
					<?=$d[catatan];?>
				    </div>
				</div>
			    </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
	                           Data Diri
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                     	                  <input type='hidden' name="proses" value="ppdb_formulir">
					  <Label for="nama_lengkap">Nama Lengkap</label>
                     	                  <input class="form-control" placeholder="Nama Lengkap" name="nama_lengkap" type="text" maxlength ="40" value="<?=$d[nama_lengkap];?>" autofocus><br>
					  <Label for="nama_lengkap">Nama Panggilan</label>
                     	                  <input class="form-control" placeholder="Nama Panggilan" name="nama_panggilan" type="text" maxlength ="40" value="<?=$d[nama_panggilan];?>" autofocus><br>
					  <Label for="nama_lengkap">Jenis Kelamin</label>
					  <Select class="form-control" name="jenis_kelamin">
						<option value=""><?php if($d[jenis_kelamin]="L"){ echo "Laki-Laki";}else{echo "Perempuan";} ?></option>
						<option value="L">Laki - Laki</option>
						<option value="P">Perempuan</option>
					  </select><br>
					  <Label for="nama_lengkap">Tempat Lahir</label>
                     	                  <input class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" type="text" value="<?=$d[tempat_lahir];?>" maxlength ="40" autofocus ><br>
					  <Label for="nama_lengkap">Tanggal Lahir</label>
					  <input class="form-control" name="tanggal_lahir" type="date" value="<?=$d[tanggal_lahir];?>" autofocus ><br>
					  <Label for="nama_lengkap">Agama</label>
					  <input class="form-control" name="agama" type="text" placeholder="Agama" value="<?=$d[agama];?>" autofocus ><br>
					  <Label for="nama_lengkap">No Whatsapp</label>
					  <input class="form-control" name="no_whatsapp" type="text" placeholder="No Whatsapp" value="<?=$d[no_wa];?>" autofocus ><br>
					  <Label for="nama_lengkap">Alamat</label>
					  <input class="form-control" name="alamat" type="text" placeholder="Alamat" value="<?=$d[alamat];?>" autofocus ><br>
					  <Label for="nama_lengkap">Asal Sekolah</label>
					  <input class="form-control" name="asal_sekolah" type="text" placeholder="Asal Sekolah" value="<?=$d[asal_sekolah];?>" autofocus ><br>
					  <Label>Nilai Ujian Nasional</label>
					  <input class="form-control" name="nem" type="text" placeholder="NEM" value="<?=$d[nem];?>" autofocus><br>
					  <Label>Rata Rata Nilai Rapot Semester Akhir</label>
					  <input class="form-control" name="nilai_rapot" type="text" placeholder="nilai_rapot" value="<?=$d[nilai_rapot];?>" autofocus><br>

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
					  <input class="form-control" name="ayah_nama_lengkap" type="text" placeholder="Nama Lengkap" value="<?=$d[ayah_nama];?>" autofocus ><br>
					  <Label for="nama_lengkap">Tempat Lahir</label>
                     	                  <input class="form-control" placeholder="Tempat Lahir" name="ayah_tempat_lahir" type="text" maxlength ="40" value="<?=$d[ayah_tempat_lahir];?>" autofocus ><br>
					  <Label for="nama_lengkap">Tanggal Lahir</label>
					  <input class="form-control" name="ayah_tanggal_lahir" type="date" value="<?=$d[ayah_tanggal_lahir];?>" autofocus ><br>
					  <Label for="nama_lengkap">Agama</label>
					  <input class="form-control" name="ayah_agama" type="text" placeholder="Agama" value="<?=$d[ayah_agama];?>" autofocus ><br>
					  <Label for="nama_lengkap">Pendidikan Terakhir</label>
					  <input class="form-control" name="ayah_pendidikan_terakhir" type="text" value="<?=$d[ayah_pendidikan_terakhir];?>" placeholder="Pendidikan Terakhir" autofocus ><br>
					  <Label for="nama_lengkap">Pekerjaan</label>
					  <input class="form-control" name="ayah_pekerjaan" type="text" placeholder="Pekerjaan" value="<?=$d[ayah_pekerjaan];?>" autofocus ><br>
					  <Label for="nama_lengkap">No Telp / HP</label>
					  <input class="form-control" name="ayah_no_telp" type="text" placeholder="No Telp / HP" value="<?=$d[ayah_no_telp];?>" autofocus ><br><hr>
					  <Label for="nama_lengkap">Ibu Kandung</label><br><hr>
					  <Label for="nama_lengkap">Nama Lengkap</label>
					  <input class="form-control" name="ibu_nama_lengkap" type="text" placeholder="Nama Lengkap" value="<?=$d[ibu_nama];?>" autofocus ><br>
					  <Label for="nama_lengkap">Tempat Lahir</label>
                     	                  <input class="form-control" placeholder="Tempat Lahir" name="ibu_tempat_lahir" type="text" value="<?=$d[ibu_tempat_lahir];?>" maxlength ="40" autofocus ><br>
					  <Label for="nama_lengkap">Tanggal Lahir</label>
					  <input class="form-control" name="ibu_tanggal_lahir" type="date" value="<?=$d[ibu_tanggal_lahir];?>" autofocus ><br>
					  <Label for="nama_lengkap">Agama</label>
					  <input class="form-control" name="ibu_agama" type="text" placeholder="Agama" value="<?=$d[ibu_agama];?>" autofocus ><br>
					  <Label for="nama_lengkap">Pendidikan Terakhir</label>
					  <input class="form-control" name="ibu_pendidikan_terakhir" type="text" value="<?=$d[ibu_pendidikan_terakhir];?>" placeholder="Pendidikan Terakhir" autofocus ><br>
					  <Label for="nama_lengkap">Pekerjaan</label>
					  <input class="form-control" name="ibu_pekerjaan" type="text" placeholder="Pekerjaan" value="<?=$d[ibu_pekerjaan];?>" autofocus ><br>
					  <Label for="nama_lengkap">No Telp / HP</label>
					  <input class="form-control" name="ibu_no_telp" type="text" placeholder="No Telp / HP" value="<?=$d[ibu_no_telp];?>" autofocus ><br>

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
					<Label for="nama_lengkap">Ijazah</label><a href="<?=$d[dokumen_ijazah];?>" target="_blank" rel="nofollow"> (Lihat Ijazah)</a>
					<input type="file" name="ijazah"><br>
					<Label for="nama_lengkap">Nilai Rapot Semester Terakhir</label><a href="<?=$d[dokumen_rapot];?>" target="_blank" rel="nofollow"> (Lihat Rapot)</a>
					<input type="file" name="rapot"><br>
					<Label for="nama_lengkap">Akta Kelahiran</label><a href="<?=$d[dokumen_akta_kelahiran];?>" target="_blank" rel="nofollow"> (Lihat Akta)</a>
					<input type="file" name="akta"><br>
					<Label for="nama_lengkap">Pas Foto</label><a href="<?=$d[dokumen_pas_foto];?>" target="_blank" rel="nofollow"> (Lihat Foto)</a>
					<input type="file" name="foto"><br>
					<Label for="nama_lengkap">Kartu Keluarga</label><a href="<?=$d[dokumen_kartu_keluarga];?>" target="_blank" rel="nofollow"> (Lihat Kartu Keluarga)</a>
					<input type="file" name="kk"><br>
				    </div>
				</div>
			    </div>
					<?php } ?>

			  <button class="btn btn-lg btn-primary btn-block">Simpan</button><br>
			 </form>

