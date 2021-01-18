

<table border="2px">
<?php

$con=mysqli_connect("localhost","root","","testdata");

$select = "select * from schooldetails";

$run = mysqli_query($con,$select);


while($rr = mysqli_fetch_array($run))
{
	$name = $rr['name'];
	$father_name = $rr['father_name'];
	$due_amount = $rr['due_amount'];
?>

	
	<tr>
		<td colspan="2">Name : <?php echo $name; ?></td>
	</tr>
	
	<tr>
		<td colspan="2">Father name : <?php echo $father_name; ?></td>
	</tr>
    
    
	<tr>
		<td colspan="2">Due amount : <?php echo $due_amount; ?></td>
	</tr>
   



<?php } ?>
</table>
