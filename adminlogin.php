
  <style>
body  {
  background-image: url("abcd.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
 <?php

include('header.php');
include('style.php');


 if(isset($_POST['login']))
 {
	if($_POST['uid']=="admin" && $_POST['password']=="admin")
	 {
		
	 header("location:adminhome.php");

	 }
	 else
	 {
	 	 	echo '<script> alert("Login Failed");</script>';
	 }
 }
?>


	<form action="" align="left" name="login_form" id="login_form"  method="post">
	<div class="imgcontainer">
    </div>

 <div class="container">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



  <h1 style="color:orange;">Admin Login</h1>
  <table class="displaycontent" align="left" width="400" height="120">
  	<tr>
    <td><label style="color:white;" for="uname"><p>Username</p></label></td>
  <td> <input type="text" placeholder="Enter Username" name="uid" required class="textbox"></td>
		</tr>

	<tr>
	<td>
    <label style="color:white;" for="psw"><p>Password</p></label></td>
   <td> <input type="password" placeholder="Enter Password" name="password" required class="textbox"></td>
		</tr>
		  </table>
        <br>

 
<style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>

<button  type="submit" name="login" class="button" value="Login">Login</button>

  </div>

  
  </div>


	</form>


<br>
<br>
<br>
<br>
<br>

</div>

 <?php

include('footer1.php');

?>