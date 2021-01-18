<table border="background: 2px">
    <tr>
		<td colspan="2"> Name</td>
		<td colspan="2"> Father name</td>
		<td colspan="2"> Date of birth</td>
		<td colspan="2"> Gender</td>
		<td colspan="2"> state</td>
		<td colspan="2"> Date</td>
	</tr>
<?php

$con = mysqli_connect("localhost","root","","testdata");

   $id=$_GET['id'];

$select = "select * from new";

$run = mysqli_query($con,$select);


while($rr = mysqli_fetch_array($run))
{
	
    $name=$rr['name'];
	$father_name=$rr['father_name'];
	$date_of_birth=$rr['date_of_birth'];
	$gender=$rr['gender'];
	$state=$rr['state'];
	$date=$rr['date'];
	$srno = $rr['srno'];


?>

	<tr>
	<td colspan="2"><?php echo $name;?></td>
	 <td colspan="2"><?php echo $father_name;?></td>
	 <td colspan="2"><?php echo $date_of_birth;?></td>
	 <td colspan="2"><?php echo $gender;?></td>
     <td colspan="2"><?php echo $state;?></td>
     <td colspan="2"><?php echo $date;?></td>
	</tr>
	<?php
}

?>
</table>