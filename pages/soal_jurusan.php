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
                                                    <th>Nama Jurusan</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
		                                <?php 
							$no = 1;
							include '../koneksi.php';
							$data = mysqli_query($koneksi,"select * from jurusan");
							while($d = mysqli_fetch_array($data)){
						?>  			
						<tr class="gradeU">
                                                    <td><?=$no++?></td>
                                                    <td><?=$d['nama_jurusan'];?></td>
						    <td class="center">
		                                       <a href="soal_insert.php?id=<?=$d['id_jurusan'];?>&type=1"><button type="button" class="btn btn-success btn-xs">Lihat Soal</button></a>
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
