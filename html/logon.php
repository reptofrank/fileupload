<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Obinna's files - Login</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Upload to Obinna</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            
        </ul>
    </div>
</nav>
<div class="container" style="padding-top: 150px;">
	<div class="row">
		<div class="col-xs-4 col-xs-offset-4">
			<form class="form-group" method="POST" action="login.php">
				<div class="input-group">
					<label for="username">Username</label>
					<input type="text" name="user" class="form-control" id="username" required>
				</div>
				<div class="input-group">
					<label for="password">Password</label>
					<input type="password" name="pass" class="form-control" id="password" required>
				</div>
				<input type="submit" name="submit" class="btn btn-black" value="Login">
			</form>
		</div>
	</div>
</div>
</body>
</html>