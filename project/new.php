<?php

$con=mysqli_connect("localhost","root","","testdata");


?>
<html>
<head>
	<title>my table</title>
</head>
<body>
	<center><table border="background: 4px">

	      <form method="post">
	      	<tr>
		      <td width="100px;">Name : </td>
		      <td><input name="name"/></td><br>
	       </tr>
	       <tr>
		<td>Fathers name :</td> 
		<td><input name="father_name"/></td><br>
	       </tr>
	       <tr>
		<td>Date of birth:</td>
		<td><input name="date_of_birth"/></td><br>
	       </tr>
	       <tr>
		<td>Gender    :</td>
		<td> <input type="radio" name="gender" value="male"> Male <input type="radio" value="female" name="gender">Female </td><br>
		   </tr> 
		   <tr>
		<td>State       : </td>
		<td><select  name="state" id=""> 
			<option>jharkhand</option>
			<option>bihar</option>
			<option>delhi</option>
			<option>West Bengal</option>
			<option>Uttarakhand	</option>
			<option>Rajasthan</option>
			<option>Punjab</option>
			<option>Nagaland</option>
			<option>Madhya Pradesh</option>
			<option>Himachal Pradesh</option>
			<option>Gujarat</option>
			<option>Chhattisgar</option>
			<option>Maharashtra	</option>
			<option>Manipur</option>
        </select></td><br>
        </tr>
        
        <tr>
        	<td colspan="2"><center><button name="ok" style="float: right;">submit</button></center></td>
        		</tr>
        	
        </form>
    
  </table>
</center>
 </body>
 </html>


 <?php

 if(isset($_POST['ok'])){

 	$name = $_POST['name'];
 	$father = $_POST['father_name'];
 	$birth = $_POST['date_of_birth'];
 	$gender = $_POST['gender'];
 	$state = $_POST['state'];
 	$date = date("d/m/Y");

      echo $insert ="insert into new (name,father_name,date_of_birth,gender,state,date)values('$name','$father','$birth','$gender','$state','$date')";


       $run = mysqli_query($con,$insert);

        if ($run) {
    	echo "<script>alert('Its Success Thank You..!!')</script>";
    } else {
    	echo "<script>alert('Oops Its not Success Sorry..!!')</script>";
    }

}

?>
<br>
<center><table border="background: 2px">
    <tr>
		<td colspan="2"> Name</td>
		<td colspan="2"> Father name</td>
		<td colspan="2"> Date of birth</td>
		<td colspan="2"> Gender</td>
		<td colspan="2"> state</td>
		<td colspan="2"> Date</td>
		<td colspan="2"> action</td>
	</tr>
<?php


$select = "select * from new";

$run = mysqli_query($con,$select);


while($rr=mysqli_fetch_array($run))
{
	$name=$rr['name'];
	$father_name=$rr['father_name'];
	$date_of_birth=$rr['date_of_birth'];
	$gender=$rr['gender'];
	$state=$rr['state'];
	$date=$rr['date'];
	$srno = $rr['srno'];


	?>

<tr>
	<td colspan="2"><?php echo $name;?></td>
	 <td colspan="2"><?php echo $father_name;?></td>
	 <td colspan="2"><?php echo $date_of_birth;?></td>
	 <td colspan="2"><?php echo $gender;?></td>
     <td colspan="2"><?php echo $state;?></td>
     <td colspan="2"><?php echo $date;?></td>
     <td colspan="2"><a href="new2.php?id=<?php echo $srno; ?>">delete /</a>
     <a href="new3.php?id=<?php echo $srno; ?>">update/</a>
     <a href="new4.php?id=<?php echo $srno; ?>">view</a></td>

 </tr>
 <?php
}
?>
</table>
</center>