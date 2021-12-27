 <?php
//  $santri = [
//      ["Fatra Dinata","08776112","fatra88876@gmail.com","Programmer"],
//      ["Ihsan","05520252","ihsan@gmail.com","Programmer"],
//      ["Muji","05520252","ihsan@gmail.com","Pengemis"],
//      ["Abdu","05520252","ihsan@gmail.com","Pengemis"]
//     ];
    // assoctiative array
    // definisinya sama seperti array numerik, kecuali
    // key-nya adalah string yang kita buat sendiri 
    ?>
    <?php

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
    <!-- // echo $santri["jurusan"];
    // echo $santri[1]["email"];
    // echo "<br>";
    // echo $santri[1]["tugas"][1]; -->

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Santri</title>
</head>
<body>
    <h1>Daftar Santri</h1>
    <?php foreach ($santri as $san) : ?>
    <ul>
        <li>Nama : <?= $san["nama"];?></li>
        <li>NRP : <?= $san["nrp"];?></li>
        <li>Email : <?= $san["email"];?></li>    
        <li>Jurusan : <?= $san["jurusan"];?></li>
        <li>
            <img src="img1/<?= $san["gambar"];?>">
        </li>
    </ul>
    <?php endforeach; ?>
</body>
</html>