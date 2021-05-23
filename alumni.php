<html>
<body>
<?php
	$con=mysqli_connect("localhost","root","","project");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL:".mysqli_connect_error();
	}
	$N=$_GET['NAME'];
	$BR=$_GET['BRANCH'];
	$BA=$_GET['BATCH'];
	$O=$_GET['ORGANIZATION'];
	$sql="INSERT INTO alumni(NAME,BRANCH,BATCH,ORGANIZATION)VALUES ('$N','$BR','$BA','$O')";
	if(!mysqli_query($con,$sql))
	{
		die('Error:'.mysqli_error($con));
	}
	echo "1 record added";
	mysqli_close($con);
	header('Location: http://localhost:80/project/alumnishow.php');
	
?>
</body>
</html>

