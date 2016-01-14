<?php

include 'db_connect.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
if(!isset($fname) or !isset($lname))
{
	http_redirect('http://localhost/crud/new.php');
}
else
{

if(mysqli_query($link,"INSERT INTO users (fname,lname) VALUES ('$fname', '$lname')"))
{
	echo "Record Saved";
}
else
{
	echo "Record not Saved";
}

}
mysqli_close();




?>

