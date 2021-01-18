<?php

$con=mysqli_connect("localhost","root","","testdata");

$update = "update customerdetail set phone_no='123456789' where srno='1'";
$run = mysqli_query($con,$update);

if ($run) {
	echo "done";
} else {
	echo "sorry";
}


?>