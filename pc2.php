<html>
<body>
<?php
	$con=mysqli_connect("localhost","root","","project");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL:".mysqli_connect_error();
	}
	$N=$_GET['NAME'];
	$DP=$_GET['DEPARTMENT'];
	$DE=$_GET['DESIGNATION'];
	$CN=$_GET['CONTACT_NO'];
	$sql="INSERT INTO faculty (NAME,DEPARTMENT,DESIGNATION,CONTACT_NO)VALUES ('$N','$DP','$DE','$CN')";
	if(!mysqli_query($con,$sql))
	{
		die('Error:'.mysqli_error($con));
	}
	echo "1 record added";
	mysqli_close($con);
	header('Location: http://localhost:80/project/pc3.php');
?>
</body>
</html>

