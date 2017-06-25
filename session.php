<?php
session_start();

if (!$_SESSION['authenticated']) {
	header('Location: logon.php');
	exit;
}

?>