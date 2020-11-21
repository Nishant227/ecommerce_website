<html>
<body >
	<center>
		<style>
.button {
  background-color: #707070; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: underline;
  display: inline-block;
  font-size: 16px;
  border-radius: 12px;
  cursor: -webkit-grab; cursor: grab;
}

</style>
	<button  class ="button" onclick="document.location='http://localhost/php/ecommerce_webpage/home.php'">HOME</button><br>
</body>
</html>
<?php
$name=$_POST["name"];
$email=$_POST["email"];
$cont=$_POST["cont"];
$skills=$_POST["skills"];
$job=$_POST["job"];
$year=$_POST["year"];
$cname=$_POST["cname"];


$servername="localhost";
$username="root";
$password="";
$database="test";

$conn = mysqli_connect("localhost","root","","test");
//echo "sql connected";

$sql="INSERT INTO estorecarrer(name,email,cont,skills,job,year,cname)VALUES('$name','$email','$cont','$skills','$job','$year','$cname')";
mysqli_query($conn,$sql);

mysqli_close($conn); 
?>
</center>