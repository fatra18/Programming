<?php
include "../config/koneksi.php";

$id             =$_POST['id'];         
$name           =$_POST['name'];
$email          =$_POST['email'];
$password       =$_POST['password'];
$gender         =$_POST['gender'];
$phone_number   =$_POST['phone_number'];
$address        =$_POST['address'];
$image          =$_POST['image'];


$query  ="UPDATE users SET name='$name', email='$email', password='$password',
gender='$gender', phone_number='$phone_number', address='$address', image='$image' WHERE
id='$id'";
$result = mysqli_query($koneksi,$query);
if ($result){

    header('location:../user.php');
}else{
    echo 'gagal';
}