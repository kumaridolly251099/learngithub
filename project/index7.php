<html>
<head>
	<title> my php </title>
</head>
<body>
	<center><table style= "background:white;border: 3px solid black;">
		<tr>
			<td colspan="4px"><h1> STUDENT DATA </h1></td>
		</tr>
	</table>
	   <form method="post">
		<button><h3> srno</h2></button>
		<button ><h3>name<h3></button>
		<button ><h3>class<h3></button>
		<button><h3>due</h3></button>
	</form>    
	
	 <form method="post">
		<input name="n1"/>
		<input name="n2"/>
		<input name="n3"/>
		<input name="n4"/>
	</form>
	<td>
		<tr>
	<form method="post">
		<input name="n11"/>
		<input name="n12"/>
		<input name="n13"/>
		<input name="n14"/>
	</form>
    </tr>
    </td> 
    <td>
		<tr>
	<form method="post">
		<input name="n21"/>
		<input name="n22"/>
		<input name="n23"/>
		<input name="n24"/>
	</form>
    </tr>
    </td>
    <td>
		<tr>
	<form method="post">
		<input name="n31"/>
		<input name="n32"/>
		<input name="n33"/>
		<input name="n34"/>
	</form>
    </tr>
    </td>

    <td>
		<tr>
	<form method="post">
		<input name="n41"/>
		<input name="n42"/>
		<input name="n43"/>
		<input name="n44"/><br>
		 <button name="ok"><font style="float: right;">total</font>
            </button>
		<select name="operator" id="">
			<option>add</option>
			<input name="result"/>
		</select>
	</form>
    </tr>
    </td> 
	</center>	
</body>
</html>

<?php
if(isset($_POST['ok'])){
	$n1=$_POST['n1'];
	echo $n1;
	$n2=$_POST['n2'];
	echo $n2;
	$n3=$_POST['n3'];
	echo $n3;
	$n4=$_POST['n4'];
	echo $n4;
}

?>
