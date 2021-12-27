<?php

include './connect/config.php';

$user_id =$_POST['user_id'];
$post_id= $_POST['post_id'];
$comment = $_POST['comment'];
$date = date("Y-m-d");

$query = "INSERT INTO comments(comment, user_id, post_id, date) VALUES 
('$comment', '$user_id', '$post_id','$date')";

$result = mysqli_query($koneksi, $query);

if ($result) {
    header('location: ./detail.php?id=' . $post_id);
} else {
    echo "gagal";
}