<?php
	include 'koneksi.php';
	
	$id  =$_POST['id'];
	$name  =$_POST['name'];
	$email  =$_POST['email'];
	$address  =$_POST['address'];
	$kelas_id  =$_POST['kelas_id'];
	$eskul_id  =$_POST['eskul_id'];
	
	$query =
	"UPDATE siswa 
	 SET name='$name',
	 email='$email',
	 address='$address',
	 kelas_id=$kelas_id,
	 eskul_id=$eskul_id
	 WHERE id='$id'";
	 
	 //var_dump($query);
	$res = mysqli_query($koneksi,$query);
	
	if($res){
	
	header('location:index.php');
	
	}else{
	echo('data gagal di update');
	}
	
