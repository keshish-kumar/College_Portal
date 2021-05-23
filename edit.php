<html>
<body>
<br><br>
<table align='center' border='2' width="300">
<form action='update.php'>
<?php
session_start();
$UN= $_SESSION['UN'];
$con=mysqli_connect("localhost","root","","project");
//check connection
if(mysqli_connect_errno())
  { 
	echo"Failed to connect to MySQL:".mysqli_connect_error();
  }
$res=mysqli_query($con,"SELECT USER_NAME,EMAIL_ID,PASSWORD FROM login where USER_NAME='$UN'");
$row=mysqli_fetch_array($res);

echo "<tr>";
echo "<th>USER_NAME</th>";
echo "<th><input type='text' value='".$row['USER_NAME']."' name='UN'></th>";
echo "</tr>";

echo "<tr>";
echo "<th>EMAIL_ID</th>";
echo "<th><input type='text' value='".$row['EMAIL_ID']."' name='EID'></th>";
echo "</tr>";

echo "<tr>";
echo "<th colspan='2'><input type='submit'>";

echo "</tr>";
 echo "</form>";
echo "</table>";

?>
<h3><a href="pp2.html">STUDENT REGISTRATION</a></h3>
</body>
</html>