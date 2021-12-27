<?php
	include 'koneksi.php';
	
	$id = $_GET['ID'];
	$query= "SELECT * FROM siswa WHERE ID='$id'";
	$res =mysqli_query($koneksi,$query);
	$data =mysqli_fetch_assoc($res);
	
	$queryKelas ='SELECT * FROM kelas';

	$resultKelas= mysqli_query($koneksi, $queryKelas);

	$queryEskul ='SELECT * FROM eskul';

	$resultEskul= mysqli_query($koneksi, $queryEskul);
?>
	
	//var_dump($data);
?>

<h2>Edit Data</h2>
<br>
<br>
<br>
<form method="POST" action="proses-edit.php">
	<input type="hidden" name="id" value="<?=$id?>">
	<label>name</label>	
	<input type="text" name="name" value="<?=$data['name']?>">
	<br>
	<br>
	<label>email</label>
	<input type="email" name="email" value="<?=$data['email']?>">
	<br>
	<br>
	<label>alamat</label>
	<textarea name="address"><?=$data['address']?></textarea>
	<br>
	<br>
	<label>eskul</label>
	<select name="eskul_id">
		
	<?php while ($dataEskul=mysqli_fetch_assoc($resultEskul)){?>
	<option 
		value ="<?=$dataEskul['id']?>"
		<?=$data['eskul_id'] == $dataEskul['id']? 'selected':null?>
	>
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
	<?php while ($dataKelas=mysqli_fetch_assoc($resultKelas)){
	?>
	<option 
	value ="<?=$dataKelas['id']?>"
	<?=$data['kelas_id'] == $dataKelas['id']? 'selected':null?>
	>
	<?= $dataKelas['name']?>
	</option>
	
	<?php }?>
		<option value="6">6</option>
		<option value="7">7</option>
	</select>
			
	<button type="submit">kirim</button>
</form>
