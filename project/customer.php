<?php

$con = mysqli_connect("localhost","root","","testdata");

?>

<html>
<head>
	<title>customer details </title>
</head>
<body>
	<form method="post">
		<input name="name_of_customer"/><br>
		<input name="phone_no"/><br>
		<input name="address"/><br>
		<input name="no_of_item"/><br>
		<input name="amount_of_item"/>
		<button name="ok">sumit</button>
	</form>
</body>
</html>

<?php

if(isset($_POST['ok'])){

	$data = date("d/m/Y");
	$name = $_POST['name_of_customer'];
	$phone = $_POST['phone_no'];
	$adr  =  $_POST['address'];
	$item = $_POST['no_of_item'];
	$amut = $_POST['amount_of_item'];
	
    $query = " update "
    $run = mysqli_query($con,$query);

    if ($run) {
    	echo "thank you";
    } else {
    	echo "error";
    }
    

}
?>