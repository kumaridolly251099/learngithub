<table border="background: 2px">
    <tr>
		<td colspan="2"> Name</td>
		<td colspan="2"> Include tax</td>
		<td colspan="2"> Profit</td>
		<td colspan="2"> Transport charge</td>
	</tr>
<?php

$con = mysqli_connect("localhost","root","","testdata");


$select = "select * from inventorymanagement2";

$run = mysqli_query($con,$select);


while($rr = mysqli_fetch_array($run))
{
	
  $name_product=$rr["name_product"];
  $include_tax=$rr["include_tax"];
  $profit=$rr["profit"];
  $transport_charge=$rr["transport_charge"];


?>

	<tr>
		<td colspan="2"> <?php echo $name_product; ?></td>
		<td colspan="2"> <?php echo $include_tax;?></td>
		<td colspan="2"> <?php echo $profit;?></td>
		<td colspan="2"> <?php echo $transport_charge;?></td>
	</tr>
	<?php
}

?>
</table>