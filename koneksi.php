<?php

    $koneksi = mysqli_connect("localhost", "root", "", "pembayaranSPP");
    
    if(!$koneksi) {
        echo "gagal terhubung ke database". mysqli_connect_error();
    }


?>