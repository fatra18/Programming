<?php
include "../config/koneksi.php";

$id  =$_POST['id'];
	

$query  ="DELETE FROM users WHERE id='$id'";
$result = mysqli_query($koneksi,$query);

if ($result){

    header ('location:../user.php');
}