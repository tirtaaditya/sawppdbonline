<?php
$koneksi = mysqli_connect("localhost:3306","ppdb","siapppdb!@#","db_pendaftaran");
                     if (!$koneksi){
                        die("Koneksi database gagal:".mysqli_connect_error());
                     }
                     ?>