<?php

$con = mysqli_connect("localhost","root","","testdata");

?>

<html>
<head>
	<title>school detail</title>
</head>
<body>
	<form method="post">
		<input name="name"/><br>
		<input name="father_name"/><br>
		<input name="gender"/><br>
		<input name="date_of_birth"/><br>
		<input name="address"/><br>
		<input name="total_fee"/><br>
		<input name="deposit"/><br>
		<input name="due_amount"/><br>
		<button name="ok">sumit</button>
	</form>
</body>
</html>

<?php  
if (isset($_POST['ok'])){

	$date=date("d/m/Y");
    $name=$_POST['name'];
    $father=$_POST['father_name'];
    $gen = $_POST['gender'];
    $birth=$_POST['date_of_birth'];
    $addr = $_POST['address'];
    $total = $_POST['total_fee'];
    $depo = $_POST['deposit'];
    $due = $_POST['due_amount'];


    $insert="insert into schooldetails (date,name,father_name,gender,date_of_birth,address,total_fee,deposit,due_amount) values('$date','$name','$father','$gen','$birth','$addr','$total','$depo','$due')";
    $run=mysqli_query($con,$insert);
    if ($run) {
       echo "done";
    } else {
    	echo "not done";
    }
    
}

?>