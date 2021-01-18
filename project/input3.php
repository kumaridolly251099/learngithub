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


    $update ="update schooldetails set deposit='20000',due_amount='30000' where srno='2' AND address='mahagama'";


    $run=mysqli_query($con,$update);


    if ($run) {
       echo "done";
    } else {
    	echo "not done";
    }
    
}

?>