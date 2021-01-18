 <?php

$con = mysqli_connect("localhost","root","","testdata");
$id = $_GET['id'];

$query ="delete from new where srno='$id'";

$run = mysqli_query($con,$query);

if ($run) {
	echo "<script>alert('Its Success Thank You..!!'),window.open('task.php','_self')</script>";

} else {
  	echo "<script>alert('Its not Success sorry..!!'),window.open('task.php','_self')</script>";
}


?>