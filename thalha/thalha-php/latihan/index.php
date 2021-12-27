<?php
//<---------------------------------------------------Function 1----------------------------------------------------------------->
	//Pembuatan function
	function perkalian($bil1,$bil2){
		$a = $bil1;
		$b = $bil2;
		$result = $bil1*$bil2;
		return $result;	
	}
	//Pemanggilan Function
	$result =perkalian(32,58);
	echo "Hasil dari 32 x 58 adalah $result";echo '<br>';
//<---------------------------------------------------function 2----------------------------------------------------------------->
	function pembagian($num1,$num2,$num3){
			$answer= $num1/$num2/$num3;
			print'<br>';
			print "hasil dari 100/20/2= $answer"; 
	}
	pembagian(100,20,2);echo'<br>';echo'<br>';
//<---------------------------------------------------function 3----------------------------------------------------------------->
	function motor(){
		$pengendara="Rossi";
		echo $pengendara;
	} 
	motor();echo'<br>';echo'<br>';
//<---------------------------------------------------function 4----------------------------------------------------------------->
	function kelasThalhah($namaBelakang){
		echo "$namaBelakang THALHAH.<br>";
	}
	kelasThalhah("AAL");
	kelasThalhah("ALI");
	kelasThalhah("DUR");
	kelasThalhah("FATHIN");
	kelasThalhah("ICONG");
	kelasThalhah("HISYAM");
	kelasThalhah("JAMIL");
	kelasThalhah("MAIL");
	kelasThalhah("MALIK");
	kelasThalhah("RHOMA");
	kelasThalhah("YASIR");
	echo"<br>";
//<---------------------------------------------------function 5----------------------------------------------------------------->
	function match($funct1 , $funct2){
		$mat = $funct1 + $funct2;
		return $mat;
	}
	$return_value= match(10,20);
	echo "nilai kembali dari fungsi: $return_value";echo"<br>";
//<---------------------------------------------------/*EXPLODE*/----------------------------------------------------------------->
	echo"<p>EXPLODE</p>";
	#1
	$sunda = "sok";
		var_dump(explode(' ',$sunda));echo"<br>";
	#2
	$jawa ="mangga";
		var_dump(explode(' ',$jawa));echo"<br>";
	#3
	$str = "nama-depan,nama-belakang,ig,wa";
	$step = explode(',',$str);
		print_r($step);

?>

index.php
Menampilkan index.php.
Komentar 1 dari 1 