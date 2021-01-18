<?php
$conn = mysqli_connect("localhost","root","","testdata");

$insert = "insert into userdetails (name,mobile,gender,father) values('Rehan','7091959527','male','XYZ')";
$run = mysqli_query($conn,$insert);
if($run){
	echo "Its Success";
}
else{
	echo "its not success";
}


?>