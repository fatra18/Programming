<?php
include "../connect/config.php";

$id  =$_POST['id'];
$name=$_POST['name'];

$query  ="UPDATE categoriers SET name='$name' WHERE id='$id'";
$result = mysqli_query($koneksi,$query);

if ($result){

    header ('location:../profile.php');
}