<?php 
	include_once("config.php");
	include_once("adminheader.php");
	include_once("style.php");
?>	

<style>
h2 {
  color: white;
  font-family: verdana;
  font-size: 240%;

}
p  {
  color: white;
  font-family: Georgia, serif;
  font-size: 100%;
   font-weight: bold;
}
</style>

  <!-- Carousel Start -->
  
                       <div class="container">




<form action="" method="post" enctype="multipart/form-data" name="addroom">
<center>

 <style>
body  {
  background-image: url("cc.jpg");
   background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<br>
<br>
<br>
<br>
<br>

<center><font  color="white" size="5">Add New Customers</font></center>

Customer Name<br />
 <input name="name" type="text" class="ed" required />
 <br />
 Customer Mail<br />
 <input name="mail" type="email" class="ed" required />
 <br />
  Date of Birth<br />
 <input name="dob" type="date" class="ed" id="DAT" required />
  <br />
   Address<br />
 <input name="address" type="text" class="ed" id="DAT" required />
<br>
 Account Number<br />
 <input name="acno" type="text" class="ed" id="DES" required />
<br>
Branch<br />
 <input type="text" name="branch" class="ed" required><br />
 Password<br />
 <input type="text" name="pwd" class="ed" required><br />
  Mobile<br />
 <input type="text" name="mob" class="ed" required><br />
 <br>
  <input type="submit" name="submit" value="Add" id="button1" />

 </center>
 </form>

</div>
</div>
</div>
</div>
</div>

<?php

 if(isset($_POST['submit']))
	 {
	 	         		
	$query = "INSERT INTO `user`"; 
	$query .= " VALUES (null, '".$_POST['name']."', '".$_POST['mail']."', '".$_POST['dob']."', '".$_POST['address']."','".$_POST['acno']."','".$_POST['branch']."' , '".$_POST['pwd']."' , '";
	$query .=  $_POST['mob']."','1000')";
          
	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("ADDED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:viewuser.php");
//	exit;
 
 }




?>

