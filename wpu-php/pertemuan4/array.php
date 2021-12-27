<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
        // array
        // Variabel yang mampu menampung banyak nilai
        // elemen pada array boleh memiliki tipe data yang berbeda
        // key index dimulai dari nol

        
        $bulan = ["Januari","Februari","Maret","April","Mei","Juni","July","Augustus","September","Oktober","September"];
        $arr1 = [123,"tulisan",false];

        // Menampilkan Array

        // var_dump($arr1);
        // echo "<br>";
        // print_r($bulan);

        // menampilkan satu element pada array
        // echo "<br>";
        // echo $arr1[1];
        // echo "<br>";
        // echo $bulan[1]; 

        var_dump($bulan);
        $bulan[] = "Desember";
        echo "<br>";
        var_dump($bulan);
    ?>
</body>
</html>