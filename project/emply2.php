<?php


$con=mysqli_connect("localhost","root","","testdata");


?>

<html>
<head>
	<title>emplydetail</title>
</head>
<body>
	<form method="post">
		<input name="name_emply"/><br>
		<input name="amount_per_day"/><br>
		<input name="no_working_day"/>
		<button name ="ok">sumit</button>
	</form>
</body>
</html>


<?php
 
 if(isset($_POST['ok'])){

 	$emply=$_POST['name_emply'];

 	$amut=$_POST['amount_per_day'];

 	$work=$_POST['no_working_day'];

 	$total = $amut*$work;

 	echo $insert = "insert into employdetail2 (name_emply,amount_per_day,no_working_day,total) values('$emply','$amut','$work','$total')";

 	$run=mysqli_query($con,$insert);

 	if ($run) {
 		echo "thank you";
 	} else {
 		echo  "failed";
 	}
 	
 }


?>
