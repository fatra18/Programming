<html>
	<head>
			<title>pepet kejatuhan mic</title>
	</head>
	<body>
		nama: <?php echo $_POST ["name"];?>
		nama lengkap: <?php echo $_POST ["nameP"];?>
		Tanggal Lahir: <?php echo $_POST ["numberP"];?>
		Alamat: <?php echo $_POST ["alamatP"];?>
		Umur: <?php echo $_POST ["umurP"];?>
		Hobi: <?php foreach($_POST ["Hobi"] as $hobi) {
			echo $hobi.', ';
		} ?>
		Kelamin: <?php echo $_POST ["gender"];?>
		Status: <?php echo $_POST ["status"];?>
		nomor: <?php echo $_POST ["nomorP"];?>
		email: <?php echo $_POST ["emailP"];?>
	</body>
</html>
