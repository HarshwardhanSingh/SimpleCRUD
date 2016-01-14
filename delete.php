<?php
include 'db_connect.php';

$id = $_GET['id'];

$query = "DELETE FROM users WHERE user_id = '$id'";

if(mysqli_query($link,$query))
{
	echo "Record Deleted";
}
else
{
	echo "Record not Deleted";
}

mysqli_close();




?>

