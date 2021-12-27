<html>
	<head>
			<title>pepet kejatuhan mic</title>
			<style>
					h1{
						color:gold;
						font-size:45px;
						text-align:center;
					}
					body{
						text-align:center;
					
					}
					
					.form{
					       width:500px;
					       height:800px;
					       background-color:grey;
					       border-radius:20px;
                                            					   
					}
					
					label{
					  	padding:0px;
					}
			</style>
	</head>
	<body>
	
		<h1>Biodata</h1>
	   <div class="form">
		<form action="result.php" method="POST">
			<label>Nama:</label>
			<input type="text" name="name"><br><br>
			<label>Nama Lengkap:</label>
			<input type="text" name="nameP"><br><br>
			<label>Tanggal Lahir:</label>
			<input type="number" name="numberP"><br><br>
			<label>Alamat:</label>
			<textarea type="text" name="alamatP"></textarea><br><br>
			<label>Umur:</label>
			<input type="number" name="umurP"><br><br>
			<label>Hobi:</label><br><br>
			<input type="checkbox" id="makan" name="Hobi[]" value="makan">
  			<label>makan</label><br>
  			<input type="checkbox" id="tidur" name="Hobi[]" value="tidur">
  			<label>tidur</label><br>
 		       <input type="checkbox" id="renang" name="Hobi[]" value="renang">
  			<label>renang</label><br><br>
			<label>Kelamin:</label><br><br>
			<input type="radio" id="male" name="gender" value="male">
  			<label for="male">Male</label><br>
  			<input type="radio" id="female" name="gender" value="female">
  			<label for="female">Female</label><br>
 		       <input type="radio" id="other" name="gender" value="other">
  			<label for="other">Other</label><br><br>
			<label>Status:</label><br><br>
  			<input type="radio" id="nikah" name="status" value="nikah">
  			<label for="nikah">nikah</label><br>
  			<input type="radio" id="jomblo" name="status" value="jomblo">
  			<label for="jomblo">jomblo</label><br>
			<label>Nomor:</label>
			<input type="number" name="nomorP"><br><br>
			<label>Email:</label>
			<input type="email" name="emailP" placeholder=""><br><br>
			
			<button>submit</button>
           </div>	
		</form>	
	</body>
</html>
