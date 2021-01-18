<?php

$con=mysqli_connect("localhost","root","","testdata");


$update="update inventorymanagement2 set sealing_price='600',profit='500' where srno='1'";

$run=mysqli_query($con,$update);

if ($run) {
	echo "thank you" ;
} else {
    echo "sorry retry" ;
}


?>