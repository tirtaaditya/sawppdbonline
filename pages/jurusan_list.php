<?php include "header.php" ?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Jurusan</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
	                           <a href="jurusan_insert.php"><button type="button" class="btn btn-primary btn-xs">+ Tambah</button></a>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Jurusan</th>
                                                    <th>Akreditas</th>
                                                    <th>Aksi</th>
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
                                                    <td><a href="jurusan_detail.php?id=<?=$d['id_jurusan'];?>"><?=$d['nama_jurusan'];?></a></td>
                                                    <td class="center"><?=$d['akreditas'];?></td>
                                                    <td class="center">
		                                        <a href="jurusan_update.php?id=<?=$d['id_jurusan'];?>"><button type="button" class="btn btn-success btn-xs">Ubah</button></a>
							<a href="proses_delete.php?proses=jurusan&id=<?=$d['id_jurusan'];?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><button type="button" class="btn btn-danger btn-xs">Hapus</button></a>
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
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
<?php include "footer.php" ?>