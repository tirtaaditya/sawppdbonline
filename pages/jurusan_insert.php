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
					<form action="proses_insert.php" method="POST">
                     	                  <input type='hidden' name="proses" value="jurusan" >
                     	                  <input class="form-control" placeholder="Nama Jurusan" name="nama_jurusan" type="text" maxlength ="40" autofocus><br>
                     	                  <input class="form-control" placeholder="Akreditas" name="akreditas" type="text" maxlength ="2" autofocus><br>
                     	                  <input class="form-control" placeholder="Jumlah Terima Siswa" name="ppdb" type="text" maxlength ="4" autofocus><br>
	                                  <button class="btn btn-lg btn-primary btn-block">Simpan</button>
					</form>
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