<?php
include "../config/koneksi.php";

$name=$_POST['name'];

$query  ="INSERT INTO categoriers (name) VALUES ('$name')";
$result = mysqli_query($koneksi,$query);

if ($result){

    header ('location:../category.php');
}