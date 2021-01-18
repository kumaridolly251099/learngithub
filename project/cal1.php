<?php

if(isset($_POST['ok'])){

	$n1 = $_POST['n1'];

	$n2 = $_POST['n2'];

	$id = $_GET['id'];


	$operator = $_POST['operator'];

    if($operator=='add'){

    	$m = $n1+$n2;

    	echo $m;
    }
}
?>