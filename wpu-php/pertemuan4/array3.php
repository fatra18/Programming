    <?php
    
    $mahasiswa = [
        ["fatra dinata","088282897","Teknik Informatika","fatra88876@gmail.com"],
        ["fajar saputra","056284897","Teknik Informasi","fajar33276@gmail.com"],
        ["sri afriyana","056835557","Teknik Nuklir","yana94376@gmail.com"],
];
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
<ul>
   
   <?php foreach( $mahasiswa as $mhs) : ?>
</ul>      
  
<ul>
    <li>Nama : <?=  $mhs[0];?></li>
    
    <li>NRP : <?=  $mhs[1];?></li>
    
    <li>Jurusan : <?=  $mhs[2];?></li>

    <li>Email : <?=  $mhs[3];?></li>
</ul>

<?php endforeach;?> 



</body>
</html>