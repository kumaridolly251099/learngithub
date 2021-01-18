!-- Button to open the modal login form -->
<button onclick="document.getElementById('id01').style.display='block'">Login</button>

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" method="get ">
    <div class="imgcontainer">
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button  name= "login" type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button  name="login" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
<?php
if(isset($_GET['login'])){

   $user1 = $_GET['uname'];

   echo "$user1";

   $user2 = $_GET['12345'];

   echo "$user2";

   $pass1 = $_GET['psw'];

   echo "$pass1";

   $pass2 = $_GET['0000'];

   echo "$pass2";

     if ($user1==$user2 AND $pass1==$pass2) {

     echo "<script>alert('thank you')</script>";

   } else {

     echo "<script>alert('sorry you')</script>";
   }
   
}
?>
