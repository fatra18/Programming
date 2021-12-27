<?php

include './connect/config.php';


$id =$_POST['id'];
$post_id= $_POST['post_id'];
$comment = $_POST['comment'];
$date = date("Y-m-d");


$query ="UPDATE comments set post_id='$post_id', comment='$comment', date='$date' where id='$id'";
$result = mysqli_query($koneksi,$query);
if ($result) {
    header('location: ./detail.php?id='.$post_id);
} else {
    echo "gagal";
}