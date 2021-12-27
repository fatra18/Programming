<?php
include "../connect/config.php";


$user_id        =$_POST['user_id'];     
$title          =$_POST['title'];
$date          =$_POST['date'];
$deskripsi      =$_POST['deskripsi'];
$category_id    =$_POST['category'];
$image          =$_POST ['image'];

$query  ="INSERT INTO post (  user_id, title, date, deskripsi, category_id, image) VALUES ('$user_id','$title','$date','$deskripsi','$category_id','$image')";
$result = mysqli_query($koneksi,$query);

if ($result){

    header ('location:../profile.php');
}