<html>
<head>
	<title> my php </title>
</head>
<body>
    <center>
        <center><table border="background: 2px">

	<form method="post">
		<input name="n1"/><br>
		<input name="n2"/><br>
		<select name="operator" id="">
			<option>add</option>
			<option>subtract</option>
			<option>multiply</option>
			<option>divide</option>
			<option>remainder</option>
		</select>
		<button name="ok"> submit</button>
	</form>
</center>
</body>
</html>
<?php

if(isset($_POST['ok'])){

	$n1 = $_POST['n1'];

	$n2 = $_POST['n2'];

	$operator = $_POST['operator'];

    if($operator=='add'){

    	$m = $n1+$n2;

    	echo $m;
    }

    if($operator=='subtract'){

    	$m = $n1-$n2;

    	echo $m;
    }

    if($operator=='multiply'){

    	$m = $n1*$n2;

    	echo $m;
    } 

    if($operator=='divide'){

    	$m = $n1/$n2;

    	echo $m;

    if($operator=='remainder'){

    	$m = $n1%$n2;

         if ( $n2 <= 0) {
    		echo $m;
    	} else {
    		echo " insuffcient information ";
               }

   }

}

}



  ?>