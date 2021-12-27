<?php
 
 $server="localhost";
 $usernama="root";
 $password="1234";
 $db	="sekolah";
 
 $koneksi= mysqli_connect ($server,$usernama,$password,$db);
 
 if($koneksi){
 	//echo "koneksi berhasil";
 }
 else {
 	echo "koneksi gagal";
 }
 
