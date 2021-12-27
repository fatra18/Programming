<?php
    //  echo date("l")."<br>"; menampilkan hari
    //  echo date("d")."<br>"; menampilkan tanggal
    //  echo date("m")."<br>"; menampilkan bulan
    
    // echo date("l" ,time()-60*60*24*100);100 hari kebelakang
    // echo date("l", time()+60*60*24*100);100 hari kedepan
    // echo date("l", mktime(0,0,0,5,18,2002)); ulang tahun
    // echo date("l",strtotime("18 Mei 2002"));
    function salam($waktu = "Datang" , $nama="Admin"){
        return "Selamat $waktu $nama";
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan Function</title>
    </head>
    <body>
        <h1><?= salam();?></h1>
    </body>
    </html>
