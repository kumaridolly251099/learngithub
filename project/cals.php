<html>
<head>
    <title> my calculater </title>
</head>
<body>
    <center>
        <table border="background: 4px">

         <form method="post">
        <tr>
       <td> Number = <input name="n1"/></td><br>
       <td> Number = <input name="n2"/></td> <br>
       <tr> <td><select name="operator" id="">
            <option>add</option>
            <option>subtract</option>
            <option>multiply</option>
            <option>divide</option>
        </td>
        </tr>
        
      <td><center><button name="ok" style="float: right;">submit</button></center></td>
         
    </tr>
    </form>
</center>
</table>
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

    	} else {

    		echo " sorry ";

               }

   }


  ?>