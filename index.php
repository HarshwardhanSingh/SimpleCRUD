<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<a href="#" class="navbar-brand">CRUD</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="index.php">Show</a></li>
			<li><a href="new.php">Add new</a></li>
		</ul>
	</div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<table class="table">
			<tr>
			<td><label>First Name</label></td>
			<td><label>Last Name</label></td>
			</tr>
			<?php
				include('db_connect.php');
				$entries = mysqli_query($link,"SELECT * FROM users");

				mysqli_close();
				foreach ($entries as $entry) {
					echo "<tr>";
					echo "<td>";
					echo $entry['fname'];
					echo "</td>";
					echo "<td>";
					echo $entry['lname'];
					echo "</td>";
					echo "</tr>";
				}
			?>
			</table>
		</div>
	</div>
</div>

</body>
</html>