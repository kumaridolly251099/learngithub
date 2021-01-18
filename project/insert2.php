<?php
$conn=mysqli_connect("localhost","root","","testdata");
?>

<html>
<head>
	<title>my php1</title>
</head>
<body>
	<form method="post">
		<input name ="name"/>
		<input name ="father_name"/>
		<input name ="class"/>
		<input name ="gender"/>
		<input name ="mobileno"/><br>
		<button  name="ok"> sumit</button>
	</form>
</body>
</html>
<?php
if (isset($_POST['ok'])){

	$n1 = $_POST['name'];


	$n2 = $_POST['father_name'];

    

	$n3 = $_POST['class'];

	 

	$n4 = $_POST['gender'];

	

	$n5 = $_POST['mobileno']; 


	$insert = "insert into studentdetails2 (name,father_name,class,gender,mobileno) values('$n1','$n2','$n3','$n4','$n5')";
	$run = mysqli_query($conn,$insert);
	if ($run) {
		echo "done";
	} else {
		echo "not done";
	}
	

	 

}

?>