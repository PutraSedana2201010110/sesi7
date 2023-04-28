<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("error");
    /*
    if($cnn){
        echo "Koneksi Sukses";
    }else{
        echo "Koneksi Gagal";
    }
    
    mysqli_close($cnn);
    */