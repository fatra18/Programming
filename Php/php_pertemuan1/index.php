<html>
	<head>
		<title>Pertemuan 1 php</title>
		<style>
		
		body{
		 	color: red;
		 	
		 	
		}
		
		body:hover{}
		</style>
	</head>
	<body>
		
		<h1>Pertemuan 1 php</h1>
		 
		 ############################### yang dibawah sini php ########################
		 
		 <br>
		<?php
			
			$nama = 'pahmi';
			
			echo $nama;
			echo "<br>";
			
			if ($nama =="pepet"){
				echo "benar";	
			} else{
				echo "Salah";
			}
			
			echo "<br>";
			echo "<br>";
			
			$angka = 10;
			
			if ($angka < 11){
				echo "lebih besar";
			} else{
				echo "lebih kecil";
			}
			
			echo "<br>";
			echo "<br>";
			
			$cat = "white";
			
			echo 'saya mau pesan cat warna ' . $cat . 'ya bang';
			echo "<br>";
			
			if ($cat =="kuning"){
				echo 'wah maaf warna kunignya habis';
			} elseif($cat =="biru"){
				echo 'ok bang siap';
			}else{
				echo "kita ngak jual kucing";
			}
		?>
	
		
		
	</body>
</html>
