<html>
<body>
<?php
	$con=mysqli_connect("localhost","root","","project");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL:".mysqli_connect_error();
	}
	$N=$_GET['NAME'];
	$FN=$_GET['FATHER_NAME'];
	$MN=$_GET['MOTHER_NAME'];
	$EID=$_GET['EMAIL_ID'];
	$CNO=$_GET['CONTACT_NO'];
	$ANO=$_GET['AADHAR_NO'];
	$QF=$_GET['QUALIFICATION'];
	$CRSE=$_GET['COURSE'];
	$GN=$_GET['GENDER'];
	$CTG=$_GET['CATEGORY'];
	$DOB=$_GET['D_O_B'];
	$AD=$_GET['ADDRESS'];
	$FI=$_GET['FATHER_INCOME'];
	$FO=$_GET['FATHER_OCCUPATION'];
	$SOD=$_GET['STATE_OF_DOMICILE'];
	$MT=$_GET['MOTHER_TOUNGE'];
	$NT=$_GET['NATIONALITY'];
	$RG=$_GET['RELIGION'];

	$sql="INSERT INTO registration(NAME,FATHER_NAME,MOTHER_NAME,EMAIL_ID,CONTACT_NO,AADHAR_NO,QUALIFICATION,COURSE,GENDER,CATEGORY,D_O_B,ADDRESS,FATHER_INCOME,FATHER_OCCUPATION,STATE_OF_DOMICILE,MOTHER_TOUNGE,NATIONALITY,RELIGION)VALUES 
('$N','$FN','$MN','$EID','$CNO','$ANO','$QF','$CRSE','$GN','$CTG','$DOB','$AD','$FI','$FO','$SOD','$MT','$NT','$RG')";
	if(!mysqli_query($con,$sql))
	{
		die('Error:'.mysqli_error($con));
	}
	echo "1 record added";
	mysqli_close($con);
header('Location: http://localhost:80/project/pp4.php');
	
?>
</body>
</html>

