<?php
	include "koneksi.php";
?>

<html>
	<head>
		<title>kelas</title>
	</head>
	</body>
		<?php
		  include "judul.php2";
		?>
		<a href="create2.php">BUAT DATA</a>
		<table border="1" cellpadding="10">
			<tr>
				<th>No</th>
				<th>Nama</th>
				
				<th>action</th>
			</tr>
			
			<?php
			$query="SELECT * FROM kelas";
			$result=mysqli_query($koneksi,$query);
			$no= 1;
			while($data=mysqli_fetch_assoc($result)){
			
			?>
			<tr>
				<td><?= $no++;  ?></td>
				<td><?=$data['name']; ?></td>
				
				<td>
					<a href="edit2.php?id=<?= $data['id']?>">Edit</a>
					<form method="POST" action="proses-hapus2.php">
						<input type="hidden" name="id" value="<?= $data['id']?>" /> 
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
