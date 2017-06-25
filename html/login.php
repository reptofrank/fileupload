<?php
session_start();

require_once('../user.php');
//create a user.php file and save login credentials there before requiring user.php here

if (isset($_POST['submit'])) {
	if (isset($_POST['user']) && isset($_POST['pass'])) {
		if (($_POST['user'] === USER) && ($_POST['pass'] === PASSWORD)) {
			$_SESSION['authenticated'] = true;
			header('Location: index.php');
			exit;
		}else {
			echo 'Username and/or Password incorrect';
		}
	}else {
		echo 'Enter Username and Password';
	}
}

header('Location: logon.php');




?>