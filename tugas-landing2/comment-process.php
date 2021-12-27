<?php

include './config/koneksi.php';

$commentator_name =$_POST['name'];
$article_id= $_POST['article_id'];
$comment = $_POST['comment'];
$date = date("Y-m-d");

$query = "INSERT INTO comments(comment, commentator_name, article_id, date) VALUES 
('$comment', '$commentator_name', '$article_id','$date')";

$result = mysqli_query($koneksi, $query);

if ($result) {
    header('location: ./detail.php?id=' . $article_id);
} else {
    echo "gagal";
}