<?php
$sr = $_GET['srno'];
$name = $_GET['name'];
$gender=$_GET['gender'];
$class =$_GET['class'];
$due   =$_GET['due'];


$sr2 = $_GET['srno2'];
$name2 =$_GET['name2'];
$gender2=$_GET['gender2'];
$class2 =$_GET['class2'];
$due2 =$_GET['due2'];

$sr3 = $_GET['srno3'];
$name3 = $_GET['name3'];
$gender3 =$_GET['gender3'];
$class3=$_GET['class3'];
$due3 = $_GET['due3'];

$sr4 = $_GET['srno4'];
$name4 = $_GET['name4'];
$gender4 = $_GET['gender4'];
$class4 = $_GET['class4'];
$due4 =$_GET['due4'];     


?>
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
			 <td> <?php echo $sr; ?></td>
			 <td><?php echo $name; ?></td>
			 <td><center><?php echo $gender; ?></center></td>
			 <td><?php echo $class; ?></td>
			 <td><center><?php echo $due; ?> </center></td>
			</td>
		</tr>
		<tr>
			<td colspan="1px">
			 <td><?php echo $sr2; ?></td>
			 <td><?php echo $name2; ?></td>
			 <td><center><?php echo $gender2; ?> </center></td>
			 <td><?php echo $class2 ; ?></td>
			 <td><center><?php echo $due2;?> </center></td>
			</td>
		</tr>
		<tr>
			<td colspan="1px">
			  <td><?php echo $sr3; ?></td>
			  <td><?php echo $name3; ?> </td>
			  <td><center><?php echo $gender3; ?></center></td>
			  <td><?php echo $class3; ?></td>
			  <td><center><?php echo $due3;?></center></td>
		    </td>
		</tr>
		<tr>
			<td colspan="1px">
			 <td> <?php echo $sr4; ?></td>
			 <td> <?php echo $name4; ?></td>
			 <td> <center><?php echo $gender4; ?></center> </td>
			 <td><?php echo $class4; ?> </td>
			  <td><center><?php echo $due4; ?></center></td>
			</td>
		</tr>
		<td colspan="1px">
                 <td colspan="4"><font style="float: right;">total</font></td>
                 <td><center><?php echo $due+$due2+$due3+$due4; ?></center></td>
		</td>
	  </td>
    </table>
</center>
</body>
</html>

