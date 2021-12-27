<?php

include('./connect/config.php');

$id =$_POST['id'];
$post_id =$_POST['post_id'];

$query ="DELETE FROM comments WHERE id='$id'";
$result = mysqli_query($koneksi, $query);

if ($result){
    header('location: ./detail.php?id='.$post_id);
}else{
    echo "gagal";
}