<html>
<body>
	<?php
	session_start();
	$con=mysqli_connect("localhost","root","","project");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL:". 
		mysqli_connect_error();
	}
	$res=mysqli_query($con,"SELECT NAME,FATHER_NAME,MOTHER_NAME,EMAIL_ID,CONTACT_NO,AADHAR_NO,QUALIFICATION,COURSE,GENDER,CATEGORY,D_O_B,ADDRESS,FATHER_INCOME,FATHER_OCCUPATION,STATE_OF_DOMICILE,MOTHER_TOUNGE,NATIONALITY,RELIGION FROM registration");
	echo "<table border='1' align='center'>
	<tr>
	<th>NAME</th>
	<th>FATHER_NAME</th>
	<th>MOTHER_NAME</th>
	<th>EMAIL_ID</th>
	<th>CONTACT_NO</th>
	<th>AADHAR_NO</th>
	<th>QUALIFICATION</th>
	<th>COURSE</th>
	<th>GENDER</th>
	<th>CATEGORY</th>
	<th>D_O_B</th>
	<th>ADDRESS</th>
	<th>FAMILY_INCOME</th>
	<th>FATHER_OCCUPATION</th>
	<th>STATE_OF_DOMICILE</th>
	<th>MOTHER_TOUNGE</th>
	<th>NATIONALITY</th>
	<th>RELIGION</th>
	<th></th>
	</tr>";
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>" . $row['NAME'] ."</td>";
		echo "<td>" . $row['FATHER_NAME'] ."</td>";
		echo "<td>" . $row['MOTHER_NAME'] ."</td>";
		echo "<td>" . $row['EMAIL_ID'] ."</td>";
	        echo "<td>" . $row['CONTACT_NO'] ."</td>";
		echo "<td>" . $row['AADHAR_NO'] ."</td>";
		echo "<td>" . $row['QUALIFICATION'] ."</td>";
		echo "<td>" . $row['COURSE'] ."</td>";
		echo "<td>" . $row['GENDER'] ."</td>";
		echo "<td>" . $row['CATEGORY'] ."</td>";
		echo "<td>" . $row['D_O_B'] ."</td>";
		echo "<td>" . $row['ADDRESS'] ."</td>";
		echo "<td>" . $row['FATHER_INCOME'] ."</td>";
		echo "<td>" . $row['FATHER_OCCUPATION'] ."</td>";
		echo "<td>" . $row['STATE_OF_DOMICILE'] ."</td>";
		echo "<td>" . $row['MOTHER_TOUNGE'] ."</td>";
		echo "<td>" . $row['NATIONALITY'] ."</td>";
		echo "<td>" . $row['RELIGION'] ."</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($con);
	?>
</body>
</html>
