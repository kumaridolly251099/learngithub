<html>
<head>
<title> my php </title>
</head>
<body>
<form method="post">
<input title name="user"/>
<input title password="password "/>
<button name="ok"> submit</button>
</form>
</body>
</html>
<?php
if(isset($_POST['ok'])){
	$nn = $_POST['user'];
	echo $nn;
}
?>