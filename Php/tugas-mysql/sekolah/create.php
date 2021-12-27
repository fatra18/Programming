<?php
include 'koneksi.php';

$queryKelas ='SELECT * FROM kelas';

$resultKelas= mysqli_query($koneksi, $queryKelas);

$queryEskul ='SELECT * FROM eskul';

$resultEskul= mysqli_query($koneksi, $queryEskul);
?>
<h2>Buat Data</h2>
<br>
<br>
<br>
<form method="POST" action="createproses.php">
	<label>name</label>	
	<input type="text" name="name">
	<br>
	<br>
	
	<label>email</label>
	<input type="email" name="email">
	<br>
	<br>
	
	<label>alamat</label>
	<textarea name="address"></textarea>
	<br>
	<br>
	
	<label>eskul</label>
	<select name="eskul_id">
		
	<?php while ($dataEskul=mysqli_fetch_assoc($resultEskul)){?>
	<option value ="<?=$dataEskul['id']?>">
	<?= $dataEskul['name']?>
	</option>
	
	<?php }?>
		<option value="11">11</option>
		<option value="12">12</option>
		
	</select>
	<br>
	<br>
	
	<label>kelas</label>
	<select name="kelas_id">
	<?php while ($dataKelas=mysqli_fetch_assoc($resultKelas)){?>
	<option value ="<?=$dataKelas['id']?>">
	<?= $dataKelas['name']?>
	</option>
	
	<?php }?>
		<option value="6">6</option>
		<option value="7">7</option>
	</select>		
	<button type="submit">kirim</button>
</form>
