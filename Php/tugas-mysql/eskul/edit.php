<?php
	include 'koneksi.php';
	
	$id = $_GET['id'];
	$query= "SELECT * FROM eskul WHERE id='$id'";
	$res =mysqli_query($koneksi,$query);
	$data =mysqli_fetch_assoc($res);
	
	
?>

<h2>Edit Nama</h2>

<form method="POST" action="proses-edit.php">
	<input type="hidden" name="id" value="<?=$id?>">
	<label>name</label>	
	<label>name</label>	
	<input type="text" name="name" value="<?=$data['name']?>">
	

	<button type="submit">kirim</button>
</form>
