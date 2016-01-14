<?php
include 'db_connect.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$id = $_POST['id'];

$query = "UPDATE users SET fname = '$fname', lname = '$lname' WHERE user_id = '$id'";

if(mysqli_query($link,$query))
{
	echo "Record Saved";
}
else
{
	echo "Record not Saved";
}

mysqli_close();




?>

