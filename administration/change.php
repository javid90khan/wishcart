<?php
ob_start();
 include 'header.php';?>
<?php

	if(isset($_POST['submit']))
	{
		$db=mysqli_connect("localhost","root","","wishcart");
		$cpass=mysqli_real_escape_string($db,trim($_POST['cpass']));
		$npass=mysqli_real_escape_string($db,trim($_POST['npass']));
		if($cpass!="" or $npass!=""){
		
 		$q="select SHA(password) from user where password=SHA('$cpass')";
 		$d=mysqli_query($db,$q);
 if(mysqli_num_rows($d)!=0)
 {
$q1="update user  set password=SHA('".$npass."') where password=SHA('$cpass') ;";
mysqli_query($db,$q1);
header('Location: admin.php');
}
	
	else
	{
	echo "Invalid Password";
	}
	
	}
}	

	
?>
<form method = "post" action ="<?php echo $_SERVER['PHP_SELF']?>">
<br /><br />
<label for ="password">current Password : </label>
<input id ="cpass" name ="cpass" type ="password" 
style  = "width: 180px;"/><br />
<label for ="password">new Password : </label>
<input id ="npass" name ="npass" type ="password" 
style  = "width: 180px;"/><br /><br />
<label>&nbsp;</label>
<input class = "button" name = "submit" type = "submit" value ="change"/>
<br /><br />
</form>
</div>
</body>
</html>
<?php ob_flush(); ?>	