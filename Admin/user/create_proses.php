<?php
include "../config/koneksi.php";


$name           =$_POST['name'];
$email          =$_POST['email'];
$password       =$_POST['password'];
$gender         =$_POST['gender'];
$phone_number   =$_POST['phone_number'];
$address        =$_POST['address'];
$image          =$_POST['image'];


$query  ="INSERT INTO users (name, email, password, gender, phone_number, address, image) VALUES ('$name','$email','$password','$gender','$phone_number','$address','$image')";
$result = mysqli_query($koneksi,$query);

if ($result){
    header('location:../user.php');
}else{
    echo 'gagal';
}
