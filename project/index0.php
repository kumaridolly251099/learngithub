
<html>
<head>
	<title> table </title>
</head>
<body>
	<center><table style= "background:white;border: 3px solid black;">
		<tr>
			<td colspan="4px"><h1> STUDENT DATA </h1></td>
		</tr>
	</table>
		<table style= "background:white;border: 3px solid black;">
		<td>
		<tr>
			<td colspan="1px">
			 <td>   Srno  </td> 
			 <td> NAME </td>  
		     <td> GENDER </td> 
		     <td> CLASS  </td>
		     <td> DUE FEE </td>
		</td>
		</tr>
		<tr>
			<td colspan="1px">
			 <td> <input name="n1"/></td>
			 <td><input name="n2"/></td>
			 <td><center><input name="n3"/></center></td>
			 <td><input name="n4"/></td>
			 <td><center><input name="n5"> </center></td>
			</td>
		</tr>
		<tr>
			<td colspan="1px">
			 <td><input name="m1"/></td>
			 <td><input name="m2"/></td>
			 <td><center><input name="m3"/></center></td>
			 <td><input name="m4"/></td>
			 <td><center><input name="m5"/> </center></td>
			</td>
		</tr>
		<tr>
			<td colspan="1px">
			  <td><input name="a1"/></td>
			  <td><input name="a2"/> </td>
			  <td><center><input name="a3"/></center></td>
			  <td><input name="a4"/></td>
			  <td><center><input name="a5"/></center></td>
		    </td>
		</tr>
		<tr>
			<td colspan="1px">
			 <td> <input name="b1"/></td>
			 <td> <input name="b2"/></td>
			 <td> <center><input name="b3"/></center> </td>
			 <td><input name="b4"/></td>
			  <td><center><input name="b5"/></center></td>
			</td>
		</tr>
		<td colspan="1px">
                 <td colspan="4"><font style="float: right;">total</font></td>
                 <td><center> <input name="d"/></center></td>
		</td>
	  </td>
    </table>
</center>
</body>
</html>

<?php



$n1 = $_POST['n1'];

$n2 = $_POST['n2'];

$n3=$_POST['n3'];

$n4 =$_POST['n4'];

$n5 =$_POST['n5'];



$m1 = $_POST['m1'];

$m2 =$_POST['m2'];

$m3=$_POST['m3'];

$m4 =$_POST['m4'];

$m5 =$_POST['m5'];




 
$a1 = $_POST['a1'];

$a2= $_POST['a2'];

$a3 =$_POST['a3'];

$a4=$_POST['a4'];

$due3 = $_POST['a5'];



$b1 = $_POST['b1'];

$b2 = $_POST['b2'];

$b3 = $_POST['b3'];

$b4 = $_POST['b4'];

$b5 =$_POST['b5'];  
 
$d = $_POST['n5+m5+a5+b5'];


} 

?>

