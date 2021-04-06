<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: ../login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Teks Editor -->
	<link href="../assets/tekseditor/summernote/summernote.css" rel="stylesheet">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>PPDB Online</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php" style="color:white">PPDB Online</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <ul class="dropdown-menu dropdown-user">
			   <?php if($_SESSION['level']==1){ ?>
			   <?php } ?>
                            <li class="divider"></li>
                            <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="ppdb_insert.php"><i class="fa fa-tasks fa-fw"></i> Siap PPDB</a>
                            </li>
			    <?php if($_SESSION['level']=='1') { ?>
                            <li>
                                <a href="jurusan_list.php"><i class="fa fa-sitemap fa-fw"></i> Jurusan</a>
				<a href="soal_insert.php?type=0"><i class="fa fa-file-text fa-fw"></i> Soal</a>
				<a href="bobot_insert.php"><i class="fa fa-cubes fa-fw"></i> Bobot SPK</a>
                            </li> 
			    <?php }elseif($_SESSION['level']=='2'){ ?>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Jurusan<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                <?php 
					include '../koneksi.php';
					$data = mysqli_query($koneksi,"select * from jurusan");
					while($d = mysqli_fetch_array($data)){
				?>  		
						<li>
                                        		<a href="jurusan_detail.php?id=<?=$d['id_jurusan'];?>"><?=$d['nama_jurusan'];?></a>
                                    		</li>
				<?php
					}
				}
				?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
