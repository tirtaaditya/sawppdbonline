                            <div class="panel panel-default">
                                <div class="panel-heading">
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Siswa</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Jenis Kelamin</th>
						    <th>Jurusan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
		                                <?php 
							$no = 1;
							include '../koneksi.php';
							$data = mysqli_query($koneksi,"select * from siswa_baru a join jurusan b on a.id_jurusan=b.id_jurusan
							where tanggal_disetujui is not null and status_siswa=2");
							while($d = mysqli_fetch_array($data)){
						?>  			
						<tr class="gradeU">
                                                    <td><?=$no++?></td>
                                                    <td><?=$d['nama_lengkap'];?></td>
                                                    <td class="center"><?=$d['tanggal_lahir'];?></td>
						    <td class="center"><?php if($d['jenis_kelamin']=='L'){ echo "Laki-Laki"; }else{echo "Perempuan"; } ?></td>
                                                    <td class="center"><?=$d['nama_jurusan'];?></td>
						    <td class="center">
		                                       <a href="ppdb_insert.php?id=<?=$d['id_siswa_baru'];?>&Type=1"><button type="button" class="btn btn-success btn-xs">Detail</button></a>
						    </td>
                                                </tr>
						<?php
						}
						?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
