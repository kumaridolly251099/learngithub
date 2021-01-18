<html>
<head>
	<title>my php</title>
</head>
<body>
	<form method="post">
		<input name="n1"/>
		<input name="n2"/>
		<button name="ok"> Submit
		</button>
	</form>
</body>
</html>
<?php
if(isset($_POST['ok'])){
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	if($n1==$n2){
      echo "its equal";
	}
	else{
      echo "its not equal";
	}
}
?>