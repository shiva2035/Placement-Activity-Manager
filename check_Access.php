<?
session_start();
$utype=$_SESSION['utype'];
if($utype == "student")
{
	header("Location: unauth.php");
}
?>
