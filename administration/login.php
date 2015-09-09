<?php
ob_start();
 include 'header.php';?>
<script type="text/javascript">
	document.getElementById("nav").style.display = "none";
</script>
<h1>Admin Login</h1><hr /><br />
<?php
    session_start();

    if(!isset($_SESSION['user_id']))
    {
	if(isset($_POST['submit']))
	{
	$db = mysqli_connect('Localhost','root','','wishcart');

	$username = 	mysqli_real_escape_string($db,trim($_POST['username']));
	$password = 	mysqli_real_escape_string($db,trim($_POST['password']));
	
	
	if(!empty($username) && !empty($password))
	{	
		$query = "SELECT id,username FROM user WHERE username ='$username' AND password = SHA('$password')";
		$data = mysqli_query($db,$query);
		
		if(mysqli_num_rows($data) == 1)
		{
			$row = mysqli_fetch_array($data);
			$_SESSION['id'] = $row['id'];
			$_SESSION['username'] = $row['username'];
			header('Location: admin.php');
		}
		else
		{
			echo '<p>The Username and Password you entered is incorrect</p>';
		}
	}
	else
	{
		echo '<p>You must enter username and password to log in</p>';
	}
	}//end of if(isset($_POST['submit']))	
	}//end of if(!isset($_SESSION['user_id']))
 	else
    {   echo 'wow';
    	header('Location: admin.php');    	
    }
	
?>
<form method = "post" action ="<?php echo $_SERVER['PHP_SELF']?>">
<label for = "username" >Username : </label>
<input id = "username" name ="username" type ="text" /><br /><br />
<label for ="password">Password : </label>
<input id ="password" name ="password" type ="password" 
style  = "width: 180px;"/><br /><br />
<label>&nbsp;</label>
<input class = "button" name = "submit" type = "submit" value ="login"/>
<br /><br />
</form>
</div>
</body>
</html>
<?php ob_flush(); ?>	