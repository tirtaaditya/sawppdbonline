                            <div class="panel panel-default">
                                <div class="panel-heading">
	                           Status Pendaftaran
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
				<?php
				include "../koneksi.php";
				$username = $_SESSION['username'];
				$param5 = mysqli_query($koneksi,"select * from soal_jawaban where id_user='$username'");
				$cek5 = mysqli_num_rows($param5);
				if($cek5<10){ ?>
					<center><span style="color:green"><h4>Pendaftaran Diterima, Silakan Mengisi Soal Test</h4></span></center>
				<?php }else{ ?>
					<center><span style="color:green"><h4>Pendaftaran Selesai</h4></span></center>
				<?php } ?>
				    </div>
				</div>
			    </div>




                            <div class="panel panel-default">
                                <div class="panel-heading">
	                           Data Diri
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
					<?php 
					include '../koneksi.php';
					$username = $_SESSION['username'];
					$data = mysqli_query($koneksi,"select * from siswa_baru where id_user='$username'");
					while($d = mysqli_fetch_array($data)){
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
					  <Label>Asal Sekolah</label>
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
					  <Label>Ayah Kandung</label><br><hr>
					  <Label>Nama Lengkap</label>
					  <input class="form-control" name="ayah_nama_lengkap" type="text" placeholder="Nama Lengkap" value="<?=$d[ayah_nama];?>" autofocus readonly><br>
					  <Label>Tempat Lahir</label>
                     	                  <input class="form-control" placeholder="Tempat Lahir" name="ayah_tempat_lahir" type="text" maxlength ="40" value="<?=$d[ayah_tempat_lahir];?>" autofocus readonly><br>
					  <Label>Tanggal Lahir</label>
					  <input class="form-control" name="ayah_tanggal_lahir" type="text" value="<?=$d[ayah_tanggal_lahir];?>" autofocus readonly><br>
					  <Label>Agama</label>
					  <input class="form-control" name="ayah_agama" type="text" placeholder="Agama" value="<?=$d[ayah_agama];?>" autofocus readonly><br>
					  <Label>Pendidikan Terakhir</label>
					  <input class="form-control" name="ayah_pendidikan_terakhir" type="text" value="<?=$d[ayah_pendidikan_terakhir];?>" placeholder="Pendidikan Terakhir" autofocus readonly><br>
					  <Label>Pekerjaan</label>
					  <input class="form-control" name="ayah_pekerjaan" type="text" placeholder="Pekerjaan" value="<?=$d[ayah_pekerjaan];?>" autofocus readonly><br>
					  <Label>No Telp / HP</label>
					  <input class="form-control" name="ayah_no_telp" type="text" placeholder="No Telp / HP" value="<?=$d[ayah_no_telp];?>" autofocus readonly><br><hr>

					  <Label>Ibu Kandung</label><br><hr>
					  <Label>Nama Lengkap</label>
					  <input class="form-control" name="ibu_nama_lengkap" type="text" placeholder="Nama Lengkap" value="<?=$d[ibu_nama];?>" autofocus readonly><br>
					  <Label>Tempat Lahir</label>
                     	                  <input class="form-control" placeholder="Tempat Lahir" name="ibu_tempat_lahir" type="text" value="<?=$d[ibu_tempat_lahir];?>" maxlength ="40" autofocus readonly><br>
					  <Label>Tanggal Lahir</label>
					  <input class="form-control" name="ibu_tanggal_lahir" type="text" value="<?=$d[ibu_tanggal_lahir];?>" autofocus readonly><br>
					  <Label>Agama</label>
					  <input class="form-control" name="ibu_agama" type="text" placeholder="Agama" value="<?=$d[ibu_agama];?>" autofocus readonly><br>
					  <Label>Pendidikan Terakhir</label>
					  <input class="form-control" name="ibu_pendidikan_terakhir" type="text" value="<?=$d[ibu_pendidikan_terakhir];?>" placeholder="Pendidikan Terakhir" autofocus readonly><br>
					  <Label>Pekerjaan</label>
					  <input class="form-control" name="ibu_pekerjaan" type="text" placeholder="Pekerjaan" value="<?=$d[ibu_pekerjaan];?>" autofocus readonly><br>
					  <Label>No Telp / HP</label>
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
					<Label>Ijazah</label><br><a href="<?=$d[dokumen_ijazah];?>" target="_blank" rel="nofollow"> (Lihat Ijazah)</a>
					<br><br><Label>Nilai Rapot Semester Terakhir</label><br><a href="<?=$d[dokumen_rapot];?>" target="_blank" rel="nofollow"> (Lihat Rapot)</a>
					<br><br><Label>Akta Kelahiran</label><br><a href="<?=$d[dokumen_akta_kelahiran];?>" target="_blank" rel="nofollow"> (Lihat Akta)</a>
					<br><br><Label>Pas Foto</label><br><a href="<?=$d[dokumen_pas_foto];?>" target="_blank" rel="nofollow"> (Lihat Foto)</a>
					<br><br><Label>Kartu Keluarga</label><br><a href="<?=$d[dokumen_kartu_keluarga];?>" target="_blank" rel="nofollow"> (Lihat Kartu Keluarga)</a>
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
						<?php
							$jurusan=$d[id_jurusan];
							}
						?>
					<?php 
					include '../koneksi.php';
					$data = mysqli_query($koneksi,"select * from jurusan where id_jurusan='$jurusan'");
					while($a = mysqli_fetch_array($data)){
					?>
					<input class="form-control" name="jurusan" type="text" value="<?=$a[nama_jurusan];?>" autofocus readonly><br>
						<?php
							}
						?>
				    </div>
				</div>
			    </div>

