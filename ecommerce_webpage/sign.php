<html>
<body background="image/html1.jpg">
	<center>
	<style >
		div{
			color :white;
		}
	</style>

<div>
<?php
$id=$_POST["id"];
$pass=$_POST["pass"];
if($id=="nishant" && $pass=="hawaliya" )
{
	echo "welcome to registration";
	header ("location:home.php");
}
else {
	echo "<br>";
	echo "Enter Valid ID or Password";
	echo "<a  href='login.php'> <br><br>click here";
}
?>
</div>
</center>
</body>
</html>