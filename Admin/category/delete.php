<?php
include "../config/koneksi.php";

$id  =$_POST['id'];
	

$query  ="DELETE FROM categoriers WHERE id='$id'";
$result = mysqli_query($koneksi,$query);

if ($result){

    header ('location:../category.php');
}