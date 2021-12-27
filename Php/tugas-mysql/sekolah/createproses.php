<?php
	include 'koneksi.php';
	
	$id  =$_POST['id'];
	$name  =$_POST['name'];
	$email  =$_POST['email'];
	$address  =$_POST['address'];
	$kelas_id  =$_POST['kelas_id'];
	$eskul_id  =$_POST['eskul_id'];
	
	$query= "
   	 INSERT INTO siswa 
  	  (name, email , address, kelas_id, eskul_id) 
   	 VALUES 
  	  ('$name','$email','$address',$kelas_id,$eskul_id)
  	  ";	
  	  var_dump($query);
   	 $result= mysqli_query($koneksi,$query);

   	 if ($result){
        header('location:index.php');
  	  }else {
        echo "data gagal ditambahkan";
  	  }
