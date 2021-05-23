<html>
<body>
    <center>
<?php
$con=mysqli_connect("localhost","root","","project");
if(mysqli_connect_errno())
{
echo "Failed to connect to MySQL:".mysqli_connect_error();
}
$US=$_GET['USER_NAME'];
$EID=$_GET['EMAIL_ID'];
$PWD=$_GET['PASSWORD'];
$sql="INSERT INTO login (USER_NAME,EMAIL_ID,PASSWORD)VALUES ('$US','$EID','$PWD')";
if(!mysqli_query($con,$sql))
{
die('Error:'.mysqli_error($con));
}
echo "1 record added";
mysqli_close($con);
?>
<h2><a href="loginform.php">LOG IN </h2>
        </center>
    </body>
</html>

