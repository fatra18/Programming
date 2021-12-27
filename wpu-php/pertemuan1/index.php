<?php

// Pertemuan 1 - PHP Dasar
// Sintaks PHP

// Standart Output
// sebuah peritah untuk menampilkan sesuatu ke layar

// echo print // mencetak tulisan mencetak isi variable

//  print r, var_dump dipakai untuk proses debugger
// print_r // khusus mencetak isi array
// var_dump // untuk melihat isi dari variable tersebut

// echo "fatra dinata";
// print "fatra dinata";
// print_r("fatra dinata");
// var_dump("fatra dinata");

// Penulisan sintaks PHP
// Didalam PHP
// Didalam HTML

// Variabel dan tipe Data
// Variabel
// Tidak boleh diawali angka, tapi boleh mengandung angka
$nama = "fatra dinata";

// Konsep interpolasi
// untuk mengecek didalam apakah didalam kutip dua terdapat variable apa ngak ? kalau ada tampikan : ngak

// Operator
// Aritmatika
//  + - * / %

// operator penggabung string / concatenation / concat
// .
// $nama_depan = "fatra";
// $nama_belakang = "dinata";
// echo $nama_depan . "" . $nama_belakang;

// Assignment
// =, +=, -=, *=, /, %=, .=

// $x = 1;
// $x += 5;
// echo $x; 

// $nama = "Fatra";
// $nama .= " ";
// $nama .= "Galih";
// echo $nama;


// Perbandingan 
// <, >, <=, >=, == !=
// var_dump(1 == "1");
// biasa dipakai saat pengkondsian

// Identitas
// ===, !==
// var_dump(1 === "1");  


// Logika
// && = harus sama" true
// || = ngak harus
// !

$x = 30; 
var_dump($x < 20 || $x % 2 == 0);

?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan1</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo "fatra dinata"; ?></h1>
    <p><? echo "ini adalah paragraf";?></p>
</body>
</html> -->