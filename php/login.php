<?php
require_once('conn.php');// connection to local host
SESSION_START();
$username = $_POST["name"];
$password = $_POST["pass"];
if($username =='admin@admin.com' && $password=='admin')
{
	header('location: ../admin.php');
}
else{
 $query = "select * from user where name = '$username' and password = '$password'";
 $result = mysqli_query($con, $query);
 $check = mysqli_fetch_array($result);
if(isset($check)){
 	    $_SESSION['name'] = $_POST['name'];
		
		 header('location: ../main.html');
		
	}
        else 
        {
            header('Location:../login.html');
		
	}
}