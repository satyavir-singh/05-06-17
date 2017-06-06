<?php
session_start();
$username =  $_POST['username'];
$password =  $_POST['password'];

//$password =  md5($password);
$_SESSION['username'] = $username;

$con=mysqli_connect("localhost","root","root","db1");

if($con)
{
		mysqli_select_db($con,"db1");

		$query="SELECT * FROM login WHERE username ='$username' and password ='$password'";
		$result = mysqli_query($con,$query);

		

		$rows = mysqli_num_rows($result); 

		if ($rows == 1) {
			
			header('Location: dashboard.php');
		}

		else{
		 echo "In Valid!";

		}


	
}
else
echo "no";


?>


