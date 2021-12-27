<?php

include('../connect/config.php');

$id =$_POST['id'];

$query ="DELETE FROM post WHERE id='$id'";
$result = mysqli_query($koneksi, $query);

if ($result){
    header ('location:../home.php');
}else{
    echo "gagal";
}