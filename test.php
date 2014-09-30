<?php
//session_start();
$uname=$_SESSION['user'];
if(isset($_SESSION['user']))
{
		//require_once('expire.php');
}
if(!$_SESSION['user'] || !$_SESSION['pass'])
{
	require_once('logout.php');
	session_destroy();
	header('location:unauth.php');
}
?>
