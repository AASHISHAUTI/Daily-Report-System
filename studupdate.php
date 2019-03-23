<?php


$conn = mysqli_connect('127.0.0.1','root','root','managedata');
if(!$conn)
{
	die('Connection failed!'.mysqli_error($conn));
}
$name = $_POST['name'];
$date = $_POST['dt'];
$message = $_POST['message'];

$mysql = "INSERT INTO studup(name,dt,message) VALUES('$name','$date','$message')";

if(mysqli_query($conn,$mysql))
{
	echo "Successfully Stored";
}
else
{
	echo mysqli_error($conn);
}
echo '<a href="choose.php"><h2 align = "center">Back</h2></a>';
?>






		
 
       