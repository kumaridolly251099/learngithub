<?php

$n1 = $_GET['username'];

echo " ";

 $n2 = $_GET['password'];

$operator = $_GET['operator'];


if($operator=='multiply'){
 $m = $n1*$n2;
echo "Total :".$n1." * ".$n2." = ".$m;
}
if($operator=='add'){
	$m = $n1+$n2;
	echo "total :".$n1." + ".$n2." = ".$m;
}
if($operator=='subtract'){
	$m = $n1-$n2;
	echo "total :".$n1." - ".$n2." = ".$m;
}
if($operator=='divide')

?>