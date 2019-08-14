<?php
include('conn.php');

$username=$_POST['name'];
$password=$_POST['password'];
$number=$_POST['number'];
$query="INSERT INTO `user`(`name`,`number`,`password`) VALUES ('$username','$number','$password')";

$result=mysqli_query($con,$query);
header('Location:../main.html');

?>