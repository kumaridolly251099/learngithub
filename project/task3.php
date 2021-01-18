<?php

$con = mysqli_connect("localhost","root","","testdata");


$id=$_GET['id'];

$select ="select * from task where srno='$id'";

$run = mysqli_query($con,$select);

while($rr = mysqli_fetch_array($run))
{
	$name=$rr['name'];
	$father_name=$rr['father_name'];
	$date_of_birth=$rr['date_of_birth'];
	$gender=$rr['gender'];
	$state=$rr['state'];
  }

?>


<center>

<table border="background: 4px">

<form method="post">

    <tr>
		<td colspan="2"> <input name="name" value="<?php echo $name; ?>" /></td>
	</tr>
	<tr>
		<td colspan="2"><input name= "father_name" value="<?php echo $father_name; ?>"/></td>
	</tr>
	<tr>
		<td colspan="2"><input name="date_of_birth" value="<?php echo $date_of_birth; ?>" /></td>
	</tr>
	<tr>
		<td colspan="2"> <input name="gender" value="<?php echo $gender; ?>"/></td>
	</tr>
	<tr>
		<td colspan="2"> <input name="state"value="<?php echo $state; ?>"/></td>
	</tr>
	<tr>
		<td ccolspan="2"><button name="ok">sumit</button> </td>
	</tr>
   </form>
</table>
</center>

<?php

if(isset($_POST['ok'])){

	$name=$_POST['name'];
	$father_name=$_POST['father_name'];
	$date_of_birth=$_POST['date_of_birth'];
	$gender=$_POST['gender'];
	$state=$_POST['state'];

     
     $update = "update task set name='$name',father_name='$father_name',gender='$gender',state='$state' where srno='$id'";


      $run = mysqli_query($con,$update); 

     if ($run) {
    	echo "<script>alert('Its Success Thank You..!!')</script>";
    } else {
    	echo "<script>alert('Oops Its not Success Sorry..!!')</script>";
    }
 }

?>
