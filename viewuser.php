<?php 
include_once("adminheader.php");
	include_once("config.php");
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


<div id="container">
<div background="">
<br>

<div id="error_msg"></div>
<form action="" method="post" >
<center>
 <div class="container-fluid p-0" style="margin-bottom: 90px;">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
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

<h2>Customer Details</h2>
<br>

<br>
	<table border="2" cellspacing="6" class="displaycontent"  width="1100" height="120" style="border:4px solid lightblue;" align="center">
	<tr>
	    
			<th bgcolor=transparent><font color=white size=2>ID</font></th>
			<th bgcolor=transparent><font color=white size=2>Customer Name</font></th>
			<th bgcolor=transparent><font color=white size=2>Mail</font></th>
			<th bgcolor=transparent><font color=white size=2>DOB</font></th>
			<th bgcolor=transparent><font color=white size=2>Address</font></th>
			<th bgcolor=transparent><font color=white size=2>Acc Number</font></th>
			<th bgcolor=transparent><font color=white size=2>Branch</font></th>
			<th bgcolor=transparent><font color=white size=2>Password</font></th>
			<th bgcolor=transparent><font color=white size=2>Mobile</font></th>
			<th bgcolor=transparent><font color=white size=2>Balance</font></th>
<th bgcolor=transparent><font color=white size=2>Update</font></th>		
<th bgcolor=transparent><font color=white size=2>Delete</font></th>
			  
	</tr>
	
	<?php
	
	$query = "select * from user";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       
		<td bgcolor=transparent><font color=white size=2><?php echo $row['id']; ?></font></td>
		<td bgcolor=transparent><font color=white size=2><?php echo $row['name']; ?></font></td>
		<td bgcolor=transparent><font color=white size=2><?php echo $row['mail']; ?></font></td>
		<td bgcolor=transparent><font color=white size=2><?php echo $row['dob']; ?></font></td>
		<td bgcolor=transparent><font color=white size=2><?php echo $row['address']; ?></font></td>
		<td bgcolor=transparent><font color=white size=2><?php echo $row['acno']; ?></font></td>
		<td bgcolor=transparent><font color=white size=2><?php echo $row['branch']; ?></font></td>
		<td bgcolor=transparent><font color=white size=2><?php echo $row['pwd']; ?></font></td>
		<td bgcolor=transparent><font color=white size=2><?php echo $row['mobile']; ?></font></td>
		<td bgcolor=transparent><font color=white size=2><?php echo $row['balance']; ?></font></td>
		<td bgcolor=transparent><font color=white size=2><a href="update.php?select=<?php echo $row['id'];?>">Update</a></font></td>
		<td bgcolor=transparent><font color=white size=2><a href="?delete=<?php echo $row['id'];?>">Delete</a></font></td>

		
	</tr>
	<?php }  ?>
	
	</table>


</center>
</form>
</div>
 </div>
                    </div>
                </div>
            </div>
			 </div>
  

<?php 

if(isset($_GET['delete']))
	{
	
	$query = "delete from user where id='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:viewuser.php");
	exit;
	}
?>

<?php 
include_once("footer1.php");
?>