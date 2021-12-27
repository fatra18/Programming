<?php
include "../connect/config.php";

$id  =$_POST['id'];
	

$query  ="DELETE FROM users WHERE id='$id'";
$result = mysqli_query($koneksi,$query);

if ($result){

    header ('location:../users.php');
}