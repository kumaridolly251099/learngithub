<?php

 $n1 = $_GET['name'];

echo " $n1 <br> ";

$n2 = $_GET['username'];

echo " $n2 <br> ";

 $n3 = $_GET['password'];

echo " $n3 <br> ";

 $n4 = $_GET['pin'];

echo " $n4 <br> ";

if ($n1==$n3){
	echo " valid <br> ";
}
else{
	echo " not valid <br> ";
	
}

?>