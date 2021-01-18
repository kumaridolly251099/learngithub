<html>
<head>
	<title>my avtar</title>
</head>
<body>
	<center><table border="background: 4px">
    <tr>
	<form method="post">
		<tr><td colspan="2px"> Username = <input name="username"/></td></tr>
		<tr><td colspan="2px"> Password = <input name="password" type="password" /></td></tr>
		<tr><td colspan="2px"><button name="ok" style="float: right ">sumit</button></td><tr>
	</form>
    </tr>
</table>
</center>
</body>
</html>
<?php

if(isset($_POST['OK'])){

  $name = $_POST['username'];
    echo $name;
  $pass = $_POST['password'];
  echo $pass;
}

?>
