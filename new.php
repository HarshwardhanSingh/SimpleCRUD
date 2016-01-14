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
	<form method="post" action="add.php" class="form-vertical">
		<div class="form-group">
			<h3>Add new entry</h3>
		</div>
		<hr/>
		<div class="form-group">
			<input type="text" name="fname" id="fname" placeholder="First Name" class="form-control">
		</div>
		<div class="form-group">
			<input type="text" name="lname" id="lname" placeholder="Last Name" class="form-control">
		</div>
		<div class="form-actions">
			<input type="submit" value="Save" class="btn btn-primary">
		</div>
	</form>
</div>

</body>
</html>