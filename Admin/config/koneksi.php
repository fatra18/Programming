<?php

    $server     = 'localhost';
    $user       = 'root';
    $password   = '1234';
    $db_name    = 'cms2';

    $koneksi =mysqli_connect($server,$user,$password,$db_name);

    if ($koneksi){
        // echo "koneksi berhasil";
    }else {
        echo "kon gagal";
    }
?>