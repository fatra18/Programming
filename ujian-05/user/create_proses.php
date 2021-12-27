<?php
include "../connect/config.php";


$name           =$_POST['name'];
$email          =$_POST['email'];
$password       =$_POST['password'];



$query  ="INSERT INTO users (name, email,password ) VALUES ('$name','$email','$password')";
$result = mysqli_query($koneksi,$query);

if ($result){
    header('location:../login.php');
}else{
    echo 'gagal';
}
