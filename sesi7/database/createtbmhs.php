<?php
    include("koneksi.php");

    $tble = "CREATE TABLE tbmhs(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(35),
        nim VARCHAR(50),
        prodi VARCHAR(255),
        tgl_lahir date,
        jk VARCHAR(1),
        id_mhs VARCHAR(255)
    );";

    $hsl = mysqli_query($cnn , $tble);
    if($hsl){
        echo "Tabel tbMHS ==> SUAPIII🔥";
    }
