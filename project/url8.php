<html>
     <head>
	
	     <title> my url php </title>
	
     </head>
<body>
	<form methos = "get">
		<input name="n1"/><br>
		<input name="n2"/><br>
		<input name="n3"/><br>
		<input name="n4"/><br>
		<button name="ok"> submit
		</button>
	</form>
</body>
</html>
<?php
if(isset($_GET['ok'])){

 $n1 = $_GET['n1'];

echo " $n1 <br> ";

$n2 = $_GET['n2'];

echo " $n2 <br> ";

 $n3 = $_GET['n3'];

echo " $n3 <br> ";

 $n4 = $_GET['n4'];

echo " $n4 <br> ";

if ($n1==$n3){
	echo " valid <br> ";
}
else{
	echo " not valid <br> ";
	
}
}

?>