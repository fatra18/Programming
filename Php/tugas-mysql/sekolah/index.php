<?php
	include "koneksi.php";
?>

<html>
	<head>
		<title>Data Siswa</title>
	</head>
	</body>
		<?php
		  include "judul.php";
		?>
		<a href="create.php">BUAT DATA</a>
		<table border="1" cellpadding="10">
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Email</th>
				<th>Alamat</th>
				<th>Kelas</th>
				<th>Eskul</th>
				<th>action</th>
			</tr>
			
			<?php
			$query="SELECT siswa.ID ,siswa.name , siswa.email,siswa.address ,kelas.name as name_kelas, eskul.name as name_eskul FROM siswa
			JOIN kelas ON siswa.kelas_id = kelas.id
			JOIN eskul ON siswa.eskul_id = eskul.id
			";
			
			$result=mysqli_query($koneksi,$query);
			
			$no= 1;
			while($data=mysqli_fetch_assoc($result)){
			
			?>
			<tr>
				<td><?= $no++;  ?></td>
				<td><?=$data['name']; ?></td>
				<td><?=$data['email']; ?></td>
				<td><?=$data['address']; ?></td>
				<td><?=$data['name_kelas']; ?></td>
				<td><?=$data['name_eskul']; ?></td>
				<td>
					<a href="edit.php?ID=<?= $data['ID']	 ?>">Edit</a>
					<form method="POST" action="proses-hapus.php">
						<input type="hidden" name="id" value="<?= $data['ID']?>" /> 
						<button type="submit">Hapus</button>
					
					</form>
				</td>
			
								
			</tr>
			<?php
			 };
			?>
		</table>
	</body>
</html>

