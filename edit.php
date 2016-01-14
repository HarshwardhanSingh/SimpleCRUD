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
			<a href="#" class="navbar-brand">CURD</a>
		</div>
	<ul class="nav navbar-nav navbar-right">
		<li><a href="show.php"></a></li>
		<li><a href="new.php"></a></li>
	</ul>
	</div>
</nav>
<div class="container">
	<?php
		include('db_connect.php');
		$id = $_GET['id'];
		$query = "SELECT * FROM users WHERE user_id = '$id'";
		$result = mysqli_query($link,$query);
		mysqli_close();

		$query = mysqli_fetch_assoc($result);



	?>
	<form method="post" action="update.php" class="form-vertical">
		<div class="form-group">
			<h3>Add new entry</h3>
		</div>
		<hr/>
		<div class="form-group">
			<input type="hidden" name="id" id="id" value="<?php echo $id ?>" >
			<input type="text" name="fname" id="fname" value= <?php echo $query['fname']; ?> placeholder="First Name" class="form-control">
		</div>
		<div class="form-group">
			<input type="text" name="lname" id="lname" value= <?php echo $query['lname']; ?> placeholder="Last Name" class="form-control">
		</div>
		<div class="form-actions">
			<input type="submit" value="Save" class="btn btn-primary">
		</div>
	</form>
</div>

</body>
</html>