
<?php

$con = mysqli_connect("localhost","root","","testdata");


?>
<html>
<head>
	<title>my form</title>
</head>
<body>
	<form method="post">
		<input name="name"/><br>
		<input name="address"/><br>
		<input name="date_of_birth"/><br>
		<input name="gender"/><br>
		<input name="pin_code"/>
		<button name="ok">sumit</button>
	</form>
</body>
</html>

<?php  

if (isset($_POST['ok'])){

	$name = $_POST['name'];
	$addr = $_POST['address'];
	$birth = $_POST['date_of_birth'];
	$gen  = $_POST['gender'];
	$pin  = $_POST['pin_code'];

	 echo $insert ="insert into form (name,address,date_of_birth,gender,pin_code) values('$name','$addr','$birth','$gen','$pin')";

	$run =mysqli_query($con,$insert);

	if ($run) {
		echo "thank you";
	} else {
		echo "try again";
	}
	
}

?>
<table border="background: 2px">
    <tr>
		<td colspan="2"> Name</td>
		<td colspan="2"> Address</td>
		<td colspan="2"> Date of birth</td>
		<td colspan="2"> Gender</td>
		<td colspan="2"> Pin code</td>
	</tr>
<?php


$select = "select * from form";

$run = mysqli_query($con,$select);


while($rr=mysqli_fetch_array($run))
{
	$name=$rr['name'];
	$address=$rr['address'];
	$date_of_birth=$rr['date_of_birth'];
	$gender=$rr['gender'];
	$pin_code=$rr['pin_code'];


	?>

<tr>
	<td colspan="2"><?php echo $name;?></td>
	 <td colspan="2"><?php echo $address;?></td>
	 <td colspan="2"><?php echo $date_of_birth;?></td>
	 <td colspan="2"><?php echo $gender;?></td>
     <td colspan="2"><?php echo $pin_code;?></td>
 </tr>
 <?php

}

?>
</table>