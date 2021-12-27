
<?php

function 	Tambahkan ($bilangan1, $bilangan2 ){
			$hasil= $bilangan1 + $bilangan2;
			echo ($hasil);
		}
		
		Tambahkan (2,8);
			echo "<br>";
			echo "<br>";
			echo "<br>";

function 	kurangin ($bilangan1, $bilangan2 ){
			$hasil= $bilangan1 - $bilangan2;
			echo ($hasil);
		}
		
		kurangin (2,8);
			echo "<br>";
			echo "<br>";
			echo "<br>";
			
function 	kalikan ($bilangan1, $bilangan2 ){
			$hasil= $bilangan1 * $bilangan2;
			echo ($hasil);
		}
		
		kalikan (2,8);
			echo "<br>";
			echo "<br>";
			echo "<br>";
			
function 	bagikan ($bilangan1, $bilangan2 ){
			$hasil= $bilangan1 / $bilangan2;
			echo ($hasil);
		}
		
		bagikan (2,8);
			echo "<br>";
			echo "<br>";
			echo "<br>";
			
function 	samakan ($bilangan1, $bilangan2 ){
			$hasil= $bilangan1 / $bilangan2;
			echo ($hasil);
		}
		
		samakan (2,8);
			echo "<br>";
			echo "<br>";
			echo "<br>";	

function familyName($fname, $year){
		
			echo "$fname . $year <br>";
		
		}
		
		familyName ("fatra", "2002");
		familyName ("Fetra","2190");
		 	

		$str= "Welcome.For my home";
		
		var_dump(explode(" ",$str))."1"."<br>";	
		
		$arr = array('Welcome','For','my','home');
		echo implode("-",$arr)."2";	 
		echo "<br>";
		$ftr = "Welcome!";
		echo $ftr . "<br>";
		echo "<br>";
		echo trim($str,"Wel!")."3";
		echo "","<br>";
		echo strtolower("welCOME.")."4";
		echo "<br>";
		echo substr("Welcome.for my home",10)."<br>"."5";



 ?>			
