 <html>
<head>
<title>

</title>
<style>
</style>
</head>
<body>


<form action="index.php" method="POST">
<input type="number" name="totalharga">
<br>
<button>Hitung Harga</button>
</form>

<?php  


$bilangan1 = $_POST["totalharga"];
if ($bilangan1 <50000) {
	$diskon = 0;
}			
		
if ($bilangan1 >=50000) {
	$diskon = 20;
}		
 
if ($bilangan1 >300000) {
	$diskon = 25;
}

if ($bilangan1 >1000000) {
	$diskon = 30;
}

$totalharga = $bilangan1 * $diskon /100;
$hargadiskon = $bilangan1 - $totalharga;

?>
<h1> Total Harga = <?php echo 'Rp.'.$bilangan1?></h1>
<h1> Diskon = <?php echo $diskon. '%' ?></h1>
<h1> Total Diskon = <?php echo 'Rp.'.$totalharga?></h1>
<h1> Total Harga = <?php echo 'Rp.'.$hargadiskon?></h1>
</body> 
</html>
