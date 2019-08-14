<?php
include('conn.php');

$name=$_POST['vcnum'];
$date=$_POST['date'];
$number=$_POST['number'];

$query="INSERT INTO `book`(`regno`, `date`, `number`) VALUES ('$name','$date','$number')";

$result=mysqli_query($con,$query);
header('Location:../main.html');


?>
