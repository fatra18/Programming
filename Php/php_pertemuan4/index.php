<html>
 <head>
	<title>Belajar Php</title>
 </head>
<body>
	<h1>Belajar Php</h1>
	<form action="index.php" method="POST">
		ahmad<input type="number" name="ahmad" />
		<br/>
		uje<input type="number" name="uje" />
		<br/>
		<select name="pilih">
			<option value="10">Sepuluh</option>
			<option value="20">Duapuluh</option>
			<option value="30">Tigapuluh</option>
			<option value="40">Empatpuluh</option>	
			<option value="50">Limapuluh</option>
		
		</select>	
		<br>
		<button> +tambah</button>
		</select>
		
	</form>
	<?php
			$ahmad = $_POST['ahmad'];
			$uje = $_POST['uje'];
			$pilihan=$_POST['pilih'];
			
			$penjumlahan = $ahmad + $uje;
		
			$perkalian = $ahmad * $uje;
			
			$total = $penjumlahan * $pilihan;
	?>
	<p>Hasil =  <?php echo 'penjumlahan =' . $penjumlahan . 'perkalian =' .$perkalian; ?></p>
	<h1>Pilihan = <?php echo $_POST['pilih'] ?></h1>
	<h1>Tot = <?php echo $total ?> </h1>
</body>
</html>
