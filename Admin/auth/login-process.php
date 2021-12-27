<?php
   session_start();
   include '../config/koneksi.php';

   $email       = $_POST['email'];
   $password    = $_POST['password'];
  

   

    if ($email && $password){
        $query ="SELECT * FROM users WHERE email='$email' AND password='$password'";
        $res   =mysqli_query($koneksi,$query);
      

        if(mysqli_num_rows($res) > 0){
            $data =mysqli_fetch_assoc($res);
           
            $_SESSION['email'] = $data['email'];
            $_SESSION['image'] = $data['image'];
            $_SESSION['name'] = $data['name'];
            header ('location:../index.php');
    }else{
        echo 'email atau password salah';
     }
    }else{
        echo 'email dan password kosong.';
    }
?>