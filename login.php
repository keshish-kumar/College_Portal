<html>
<body>
<?php
$UN=$_GET['UN'];
$PWD=$_GET['PWD'];
$con=mysqli_connect("localhost","root","","project");
if(mysqli_connect_errno())
{
echo "Failed to connect to MySQL:".
mysqli_connect_error();
}
$res=mysqli_query($con,"SELECT USER_NAME FROM login where USER_NAME='$UN' and PASSWORD='$PWD'");
if($row=mysqli_fetch_array($res))
{
//echo "Welcome".$row['USER_NAME'];
session_start();
$_SESSION['UN']=$UN;
$_SESSION['UN']=$row['USER_NAME'];
header('Location:http://localhost/project/uhome.php');
}
else
echo "invalid id/pwd";
?>
</body>
</html>


