<!-- 
Loop : 
for(initialize;condition;incre or decre)
{
	True stmts;
}
-->
<?php
$start = 0;
$end = 0;
$mul = 0;
if(isset($_POST["calc"]))
{
	$start = $_POST["sno"];
	$end = $_POST["eno"];
	$mul = $_POST["mul"];
}
?>
<html>
<body>
<form action="#" method="POST">
<label>Enter Start No</label><input type="number" name="sno" value="<?php echo $start; ?>"><br>
<label>Enter End No</label><input type="number" name="eno" value="<?php echo $end; ?>"><br>
<label>Enter Mul No</label><input type="number" name="mul" value="<?php echo $mul; ?>"><br>
<input type="submit" name="calc" value="Calculate">
</form>
<?php
if(isset($_POST["calc"]))
{
	echo "Forward : <br>";
	for($no = $start;$no<=$end;$no++)
	{
		echo "<br>" .$no ." * " .$mul ." = " .($no*$mul);	
	}
	echo "<br><br>Reverse : <br>";
	for($no = $end;$no>=$start;$no--)
	{
		echo "<br>" .$no ." * " .$mul ." = " .($no*$mul);	
	}
}
?>
</body>
</html>