
                            <div class="panel panel-default">
                                <div class="panel-heading">
	                           Data Diri
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
					<?php 
					include '../koneksi.php';
					$id = $_GET['id'];
					$data = mysqli_query($koneksi,"select * from siswa_baru a join jurusan b on a.id_jurusan=b.id_jurusan where id_siswa_baru='$id'");
					while($d = mysqli_fetch_array($data)){
					$id_siswa_p = $d[id_siswa_baru];
					?>
                                    <div class="table-responsive">
                     	                  <input type='hidden' name="proses" value="ppdb_formulir">
					  <Label for="nama_lengkap">Nama Lengkap</label>
                     	                  <input class="form-control" placeholder="Nama Lengkap" name="nama_lengkap" type="text" maxlength ="40" value="<?=$d[nama_lengkap];?>" autofocus readonly><br>
					  <Label for="nama_lengkap">Nama Panggilan</label>
                     	                  <input class="form-control" placeholder="Nama Panggilan" name="nama_panggilan" type="text" maxlength ="40" value="<?=$d[nama_panggilan];?>" autofocus readonly><br>
					  <Label for="nama_lengkap">Jenis Kelamin</label>
                     	                  <input class="form-control" placeholder="Nama Panggilan" name="nama_panggilan" type="text" maxlength ="40" value="<?php if($d[jenis_kelamin]="L"){ echo "Laki-Laki";}else{echo "Perempuan";} ?>" autofocus readonly><br><br>
					  <Label for="nama_lengkap">Tempat Lahir</label>
                     	                  <input class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" type="text" value="<?=$d[tempat_lahir];?>" maxlength ="40" autofocus readonly><br>
					  <Label for="nama_lengkap">Tanggal Lahir</label>
					  <input class="form-control" name="tanggal_lahir" type="text" value="<?=$d[tanggal_lahir];?>" autofocus readonly><br>
					  <Label for="nama_lengkap">Agama</label>
					  <input class="form-control" name="agama" type="text" placeholder="Agama" value="<?=$d[agama];?>" autofocus readonly><br>
					  <Label for="nama_lengkap">No Whatsapp</label>
					  <input class="form-control" name="no_whatsapp" type="text" placeholder="No Whatsapp" value="<?=$d[no_wa];?>" autofocus readonly><br>
					  <Label for="nama_lengkap">Alamat</label>
					  <input class="form-control" name="alamat" type="text" placeholder="Alamat" value="<?=$d[alamat];?>" autofocus readonly><br>
					  <Label for="nama_lengkap">Asal Sekolah</label>
					  <input class="form-control" name="asal_sekolah" type="text" placeholder="Asal Sekolah" value="<?=$d[asal_sekolah];?>" autofocus readonly><br>
					  <Label>Nilai Ujian Nasional</label>
					  <input class="form-control" name="nem" type="text" placeholder="NEM" value="<?=$d[nem];?>" autofocus readonly><br>
					  <Label>Rata Rata Nilai Rapot Semester Akhir</label>
					  <input class="form-control" name="nilai_rapot" type="text" placeholder="nilai_rapot" value="<?=$d[nilai_rapot];?>" autofocus readonly><br>

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
					  <input class="form-control" name="ayah_nama_lengkap" type="text" placeholder="Nama Lengkap" value="<?=$d[ayah_nama];?>" autofocus readonly><br>
					  <Label for="nama_lengkap">Tempat Lahir</label>
                     	                  <input class="form-control" placeholder="Tempat Lahir" name="ayah_tempat_lahir" type="text" maxlength ="40" value="<?=$d[ayah_tempat_lahir];?>" autofocus readonly><br>
					  <Label for="nama_lengkap">Tanggal Lahir</label>
					  <input class="form-control" name="ayah_tanggal_lahir" type="text" value="<?=$d[ayah_tanggal_lahir];?>" autofocus readonly><br>
					  <Label for="nama_lengkap">Agama</label>
					  <input class="form-control" name="ayah_agama" type="text" placeholder="Agama" value="<?=$d[ayah_agama];?>" autofocus readonly><br>
					  <Label for="nama_lengkap">Pendidikan Terakhir</label>
					  <input class="form-control" name="ayah_pendidikan_terakhir" type="text" value="<?=$d[ayah_pendidikan_terakhir];?>" placeholder="Pendidikan Terakhir" autofocus readonly><br>
					  <Label for="nama_lengkap">Pekerjaan</label>
					  <input class="form-control" name="ayah_pekerjaan" type="text" placeholder="Pekerjaan" value="<?=$d[ayah_pekerjaan];?>" autofocus readonly><br>
					  <Label for="nama_lengkap">No Telp / HP</label>
					  <input class="form-control" name="ayah_no_telp" type="text" placeholder="No Telp / HP" value="<?=$d[ayah_no_telp];?>" autofocus readonly><br><hr>

					  <Label for="nama_lengkap">Ibu Kandung</label><br><hr>
					  <Label for="nama_lengkap">Nama Lengkap</label>
					  <input class="form-control" name="ibu_nama_lengkap" type="text" placeholder="Nama Lengkap" value="<?=$d[ibu_nama];?>" autofocus readonly><br>
					  <Label for="nama_lengkap">Tempat Lahir</label>
                     	                  <input class="form-control" placeholder="Tempat Lahir" name="ibu_tempat_lahir" type="text" value="<?=$d[ibu_tempat_lahir];?>" maxlength ="40" autofocus readonly><br>
					  <Label for="nama_lengkap">Tanggal Lahir</label>
					  <input class="form-control" name="ibu_tanggal_lahir" type="text" value="<?=$d[ibu_tanggal_lahir];?>" autofocus readonly><br>
					  <Label for="nama_lengkap">Agama</label>
					  <input class="form-control" name="ibu_agama" type="text" placeholder="Agama" value="<?=$d[ibu_agama];?>" autofocus readonly><br>
					  <Label for="nama_lengkap">Pendidikan Terakhir</label>
					  <input class="form-control" name="ibu_pendidikan_terakhir" type="text" value="<?=$d[ibu_pendidikan_terakhir];?>" placeholder="Pendidikan Terakhir" autofocus readonly><br>
					  <Label for="nama_lengkap">Pekerjaan</label>
					  <input class="form-control" name="ibu_pekerjaan" type="text" placeholder="Pekerjaan" value="<?=$d[ibu_pekerjaan];?>" autofocus readonly><br>
					  <Label for="nama_lengkap">No Telp / HP</label>
					  <input class="form-control" name="ibu_no_telp" type="text" placeholder="No Telp / HP" value="<?=$d[ibu_no_telp];?>" autofocus readonly><br>

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
					<Label for="nama_lengkap">Ijazah</label><br><a href="<?=$d[dokumen_ijazah];?>" target="_blank" rel="nofollow"> (Lihat Ijazah)</a>
					<br><br><Label for="nama_lengkap">Nilai Rapot Semester Terakhir</label><br><a href="<?=$d[dokumen_rapot];?>" target="_blank" rel="nofollow"> (Lihat Rapot)</a>
					<br><br><Label for="nama_lengkap">Akta Kelahiran</label><br><a href="<?=$d[dokumen_akta_kelahiran];?>" target="_blank" rel="nofollow"> (Lihat Akta)</a>
					<br><br><Label for="nama_lengkap">Pas Foto</label><br><a href="<?=$d[dokumen_pas_foto];?>" target="_blank" rel="nofollow"> (Lihat Foto)</a>
					<br><br><Label for="nama_lengkap">Kartu Keluarga</label><br><a href="<?=$d[dokumen_kartu_keluarga];?>" target="_blank" rel="nofollow"> (Lihat Kartu Keluarga)</a>
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
					<input class="form-control" name="ibu_no_telp" type="text" value="<?=$d[nama_jurusan];?>" autofocus readonly><br>							<?php
							}
							?>
				    </div>
				</div>
			    </div>




