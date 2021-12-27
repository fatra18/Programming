<?php
include "../connect/config.php";
$id =$_POST['id'];
$name=$_POST['name'];


$query  ="INSERT INTO categoriers (name, pet_id) VALUES ('$name','$id')";
$result = mysqli_query($koneksi,$query);

if ($result){
    var_dump($query);
    header ('location:../profile.php');
}else{
    echo'gagal';
}