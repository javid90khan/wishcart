<?php include 'header.php';?>
<script type="text/javascript">
	document.getElementById("nav").style.display = "none"
</script>
<h1>Register Bookmark App</h1><hr /><br />
<?php 
if(isset($_POST['submit']))
{
	$db = mysqli_connect('Localhost', 'root', '', 'wishcart');

	$username = mysqli_real_escape_string($db, 	trim($_POST['username']));
	$password1 = mysqli_real_escape_string($db, 	trim($_POST['password1']));
	$password2 = mysqli_real_escape_string($db, 	trim($_POST['password2']));
	
	if(!empty($username) && !empty($password1) &&!empty($password2))
	{
		if($password1 == $password2)
		{
		$query = "INSERT INTO user(username, password)VALUES('$username',SHA('$password1'))";
			if(mysqli_query($db, $query))
			{
				echo 'You have been successfully registered to bookmark app <a href = "admin.php">Login here!</a>';
			}
		}
		else
		{
			echo  '<center>password is not matching</center><br />';
		}
	}
	else 
	{
		echo '<center><b>Please enter all the information.</b></center><br />';
	}
}

?>
<form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
<label for = "username">Username : </label>
<input type = "text" name = "username" /><br /><br />
<label for = "password1">Password : </label>
<input type = "password" name = "password1"/><br /><br />
<label for = "password2">Password(again) : </label>
<input type = "password" name = "password2"/><br /><br />
<label>&nbsp;</label>
<input type = "submit" name = "submit" value = "submit"/>
</form>
	

	