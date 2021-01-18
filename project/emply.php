<?php

$con=mysqli_connect("localhost","root","","testdata");


?>
<html>
<head>
	<title>employee deatail</title>
</head>
<body>

	<form method="post">
		<input name="date"/>
		<input name="employ_name"/>
		<input name="mobileno"/>
		<input name="gender"/>
		<input name="salary"><br>
		<button name="ok"> sumit</button>
	</form>
</body>
</html>
<?php
if(isset($_POST['ok'])){

	$n1 = $_POST['date'];
	$n2 = $_POST['employ_name'];
	$n3 = $_POST['mobileno'];
	$n4 = $_POST['gender'];
	$n5 = $_POST['salary'];

	$insert="insert into employdetail(date,employ_name,mobileno,gender,selary) values('n1','n2','n3','n4','n5')";

	$run  =  mysqli_query($con,$insert);

	if ($run) {
		echo  "done";
	} else {
	   echo "sorry";
	}
	
}

?>