<html>
<body bgcolor="sky blue">
	<?php
	session_start();
	$con=mysqli_connect("localhost","root","","project");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL:". 
		mysqli_connect_error();
	}
	$res=mysqli_query($con,"SELECT NAME,BRANCH,BATCH,ORGANIZATION FROM alumni");
	echo "<table border='1' align='center' bgcolor='fade'>
	<tr>
	<th>NAME</th>
	<th>BRANCH</th>
	<th>BATCH</th>
	<th>ORGANIZATION</th>
	</tr>";
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>" . $row['NAME'] ."</td>";
		echo "<td>" . $row['BRANCH'] ."</td>";
		echo "<td>" . $row['BATCH'] ."</td>";
		echo "<td>" . $row['ORGANIZATION'] ."</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($con);
	?>
</body>
</html>
