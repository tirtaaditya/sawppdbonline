<?php include "header.php" ?>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">SOAL TEST</h1>
                        </div>
                    </div>
                    <div class="row">
			<?php if($_GET['type']=='0'&&$_SESSION['level']=='1'){ ?>
				<?php include "soal_jurusan.php" ?>

			<?php }elseif($_GET['type']=='1'&&$_SESSION['level']=='1'){ ?>
				<?php include "soal_list.php" ?>

			<?php }elseif($_GET['type']=='2'){ ?>
				<?php include "soal_jawab.php" ?>

			<?php } ?>

                    </div>
                </div>
            </div>

<?php include "footer.php" ?>