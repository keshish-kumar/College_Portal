<html>
<body bgcolor="yellow" >
	<?php
	session_start();
	$con=mysqli_connect("localhost","root","","project");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL:". 
		mysqli_connect_error();
	}
	$res=mysqli_query($con,"SELECT NAME,DEPARTMENT,DESIGNATION,CONTACT_NO FROM faculty");
	echo "<table border='1' align='center' bgcolor='orange'>
	<tr>
	<th>NAME</th>
	<th>DPARTMENT</th>
	<th>DESIGNATION</th>
	<th>CONTACT_NO</th>
	</tr>";
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>" . $row['NAME'] ."</td>";
		echo "<td>" . $row['DEPARTMENT'] ."</td>";
		echo "<td>" . $row['DESIGNATION'] ."</td>";
		echo "<td>" . $row['CONTACT_NO'] ."</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($con);
	?>
</body>
</html>
