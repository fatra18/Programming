<?php
include "../config/koneksi.php";

$id = $_POST['id'];
$user_id= 1;
$title = $_POST['title'];
$date = $_POST['date'];
$content =$_POST['content'];
$category_id= $_POST['category'];
$image =$_POST ['image'];

$query  ="UPDATE articles SET id='$id', user_id='$user_id', title='$title', date="$date"
content='$content', category_id='$category_id', date='$date', image='$image' WHERE
id='$id'";

$result = mysqli_query($koneksi,$query);

if ($result){

    header ('location:../article.php');
}