<?php

$link = mysqli_connect("localhost", "root", "root", "crud");

if(mysqli_connect_errno())
{
	echo "Error Connecting databses";
	// return false;
}
else
{
	return True;
}

?>