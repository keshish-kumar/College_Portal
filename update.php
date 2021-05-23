<?php
session_start();
$UN=$_SESSION['UN'];
$con=mysqli_connect("localhost","root","","project");
if(mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL:".
                mysqli_connect_error();
	}
$UN=$_GET['UN'];
$EID=$_GET['EID'];
$sql="update login set USER_NAME='$UN',EMAIL_ID='$EID'
where USER_NAME='$UN'";
if(mysqli_query($con,$sql)==false)
{
die('Error:'.mysqli_error($con));
}

echo"<center>Successfully Updated";
echo"<br><br><a href='uhome.php'>My Home</a>";
mysqli_close($con);
?>
