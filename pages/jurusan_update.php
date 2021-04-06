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
	                           + Tambah Jurusan
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
		                                <?php 
							$idjurusan = $_GET['id'];
							include '../koneksi.php';
							$data = mysqli_query($koneksi,"select * from jurusan where id_jurusan='$idjurusan'");
							while($d = mysqli_fetch_array($data)){
						?>
					<form action="proses_update.php?proses=jurusan" method="POST">
                     	                  <input type='hidden' name="idjurusan" value="<?=$d['id_jurusan'];?>" >
                     	                  <input class="form-control" value="<?=$d['nama_jurusan'];?>" name="nama_jurusan" type="text" maxlength ="40" autofocus><br>
                     	                  <input class="form-control" value="<?=$d['akreditas'];?>" name="akreditas" type="text" maxlength ="2" autofocus><br>
                     	                  <input class="form-control" value="<?=$d['ppdb'];?>" name="ppdb" type="text" maxlength ="4" autofocus><br>
	                                  <button class="btn btn-lg btn-primary btn-block">Simpan</button>
					</form>
						<?php } ?>
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