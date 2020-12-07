<?php session_start();?>
<!DOCTYPE html>
<body>
<form method="post" enctype='multipart/form-data'>
  <input type="text" name="name" required><br>
  <input type="text" name="username" required><br>
  <input type="password" name="password" required><br>
  <select name="type" required>
    <option>admin</option>
    <option>trabajador de la salud</option>
  </select><br>	
  <input type="file" name="image"><br>
  <input type="submit" name="add" value="Save">
  <input type="reset" name="clear" value="Clear">
</form>
</body>
</html>
<?php	
  if (isset($_POST['add']))
  {
  include('dbcon.php');
	$name=$_POST['name'];
	$username=$_POST['username'];
	$type=$_POST['type'];
	$password=$_POST['password'];
	$password1=md5($password);
	$salt="a1Bz20ydqelm8m1wql";
	$pass=$salt.$password1;
	echo $pass;
	$query=mysqli_query($con,"select COUNT(*) as total from user where username='$username'")or die(mysqli_error());
		$row=mysqli_fetch_array($query);
		if ($row['total']==0)
		{
		  $pic = $_FILES["image"]["name"];
	
		    if ($pic=="")
		    {
		     $pic="default.gif";
		    }
		    else	{	
		$type = $_FILES["image"]["type"];
		$size = $_FILES["image"]["size"];
		$temp = $_FILES["image"]["tmp_name"];
		$error = $_FILES["image"]["error"];
		
			if ($error > 0){
				die("Error uploading file! Code $error.");
				
				}
			else{
				if($size > 100000000000) //conditions for the file
				{
				die("Format is not allowed or file size is too big!");
				
				}
			else
			      {
				move_uploaded_file($temp, "../dist/uploads/".$pic);
				
					
			 } }
			}

		mysqli_query($con,"INSERT INTO user(user_type,username,password,name,user_pic) VALUES('$type','$username','$pass','$name','$pic')")or die(mysqli_error($con));		
		echo "<script type='text/javascript'>alert('Successfully added new user!');</script>";
		  }
		else{
		echo "<script type='text/javascript'>alert('Username already exist!');</script>";
		}
  }
?>