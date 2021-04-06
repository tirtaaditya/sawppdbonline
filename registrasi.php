<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Siap PPDB Online</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

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

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sign Up PPDB Online</h3>
                        </div>
                        <div class="panel-body">
				    <?php 
				    $alert=0;
				    $alert=$_GET['alert'];
				    if($alert==1){ ?>
                             	       <div class="form-group">
                              		   <span style="color:red">Nama Pengguna Telah Digunakan</span>
                                       </div>
				    <?php } ?>
                            <form role="form" action="registrasi_proses.php" method="POST">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Nama" name="nama" type="text" maxlength="30" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="No HP" name="no_hp" type="text" maxlength="13" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Nama Pengguna / Username" name="username" type="text" maxlength="12" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Kata Sandi" name="password" type="password" maxlength="12" required>
                                    </div>
                                       <div class="form-group">
                              		   Sudah Punya Akun ?<a href="login.php">Login</a>
                                       </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button class="btn btn-lg btn-success btn-block">Daftar</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>
