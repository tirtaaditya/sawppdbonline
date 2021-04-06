<?php include "header.php" ?>
 <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
			  <?php 
			     $id = $_GET['id'];
			     include '../koneksi.php';
			     $data = mysqli_query($koneksi,"select * from jurusan where id_jurusan='$id'");
			     while($d = mysqli_fetch_array($data)){ ?>
                            <h1 class="page-header"><?=$d['nama_jurusan'];?></h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                </div>
<div class="row">
                        <div class="col-lg-9">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Jumlah Terima Siswa
                                </div>
                                <div class="panel-body">
					<?=$d['ppdb'];?>
                                </div>
                            </div>
                            <!-- /.panel -->
                        </div>

                        <div class="col-lg-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Akreditas
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
					<center><?=$d['akreditas'];?></center>
                                </div>
                                <!-- .panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>

                        <!-- /.col-lg-6 -->
                <!-- /.container-fluid -->
			<?php } ?> 
            </div>

                <div class="container-fluid">
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
					Siswa Diterima
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Siswa</th>
                                                    <th><center>Nem</th>
                                                    <th><center>Nilai Rapot</th>
                                                    <th><center>Nilai Soal</th>
                                                    <th><center>Umur</th>
                                                    <th><center>Penilaian</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
		                                <?php 
							$no = 1;
							include '../koneksi.php';
							$jurusan = $_GET['id'];
							$data = mysqli_query($koneksi,"select * from jurusan where id_jurusan='$jurusan'");
							while($a = mysqli_fetch_array($data)) {$ppdb = $a['ppdb'];}							$data = mysqli_query($koneksi,"select b.nama_lengkap as nama, a.nem as nemspk, 
							a.nilai_rapot as nrspk, a.nilai_soal as nsspk, a.umur as umurspk, a.spk_score as scorespk 
							from spk_siswa a join siswa_baru b on a.username=b.id_user where a.id_jurusan='$jurusan' 
							ORDER BY spk_score desc LIMIT $ppdb ");
							while($d = mysqli_fetch_array($data)){
						?>  			
						<tr class="gradeU">
                                                    <td><?=$no++?></td>
                                                    <td><?=$d['nama'];?></td>
                                                    <td><center><?=$d['nemspk'];?></center></td>
                                                    <td><center><?=$d['nrspk'];?></center></td>
                                                    <td><center><?=$d['nsspk'];?></center></td>
                                                    <td><center><?=$d['umurspk'];?></center></td>
                                                    <td><center><?=$d['scorespk'];?></center></td>
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

<?php include "footer.php" ?>