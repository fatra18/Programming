<form action="" method="post">
Choose Birth date:
<input type="date" name="d"><br>
<input type="submit" name="s" value="Calculate"><br>
</form>
<?php
if (isset($_POST['s']))
{
		$dateofBirth =$_POST['d'];
		$today = date("m-d-Y");
		$diff = date_diff(date_create($dateofBirth),date_create($today));
		echo 'you are '.$diff ->format('%y')."year old";

}
?>
