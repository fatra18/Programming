<!-- <?php

$x = 10;
// echo $x;

function tampilx(){
    // $x = 20;
    global $x;
    echo $x;
}


tampilx();
echo "<br>";
echo $x;

?> -->

<?php
// SUPERGLOBAL
// variable global milik php
// merupakan Array Assoctiave 

// var_dump($_POST);
// echo "<br>";
// var_dump($_SERVER);
// echo "<br>";
// echo $_SERVER["SERVER_NAME"]

// $_GET["nama"] = "fatra dinata";
// echo "<br>";
// $_GET["nro"] = "08765212";
// var_dump($_GET); 

$santri = [
    [
    "nama" => "Fatra Dinata",
    "nrp" => "043040023",
    "email" => "fatra88876@gmail.com",
    "jurusan" => "Programmer",
    "gambar" => "avatar1.jpg"
    ],
    [
    "nama" => "Muji Kuwat",
    "nrp" => "022010935",
    "email" => "muji24591@gmail.com",
    "jurusan" => "Programmer",
    "gambar" =>"avatar.jpg",
    // "tugas" => [80, 90, 100]
]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Santri</h1>
    <?php foreach($santri as $san) : ?>
        <ul>
        </ul>
    <?php endforeach; ?>
</body>
</html>