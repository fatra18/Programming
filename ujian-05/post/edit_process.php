<?php
include "../connect/config.php";

$id = $_POST['id'];
$user_id = $_POST['user_id'];
$title = $_POST['title'];
$date = $_POST['date'];
$deskripsi = $_POST['deskripsi'];
$category_id = $_POST['category'];

$image =$_POST ['image'];

$query  ="UPDATE post SET id='$id', user_id='$user_id', title='$title',date='$date',
deskripsi='$deskripsi', category_id='$category_id', image='$image' WHERE
id='$id'";


$result = mysqli_query($koneksi,$query);

if ($result){
    
    header ('location:../home.php');
}else{
    echo 'data gagal';
}
