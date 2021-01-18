<?php

$con=mysqli_connect("localhost","root","","testdata");


?>


<html>
<head>
	<title> inventory management</title>
</head>
<body>
	<form method="post">
		<input name="name_product"/><br>
		<input name="no_of_product"/><br>
		<input name="price_of_product"/><br>
		<input name="include_tax"/><br>
		<input name="transport_charge"/><br>
		<input name="sealing_price"/><br>
		<input name="profit"/><br>
		<button name="ok">submit</button>
	</form>
</body>
</html>

<?php


if(isset($_POST['ok'])){

      $name = $_POST['name_product'];

      $no  =  $_POST['no_of_product'];

      $price = $_POST['price_of_product'];

      $tax  = $_POST['include_tax'];

      $transport  =  $_POST['transport_charge'];

      $sealing = $_POST['sealing_price'];

      $proft = $_POST['profit'];


     $date  = date("d/m/Y");


     echo $insert ="insert into inventorymanagement2 (name_product,no_of_product,cost_of_product,include_tax,transport_charge,sealing_price,profit,date) values('$name','$no','$price','$tax','$transport','$sealing','$proft','$date')";

      $run = mysqli_query($con,$insert);

      if ($run) {
      	echo "done";
      } else {
      	echo "not done";
      }
      

  }


?>
