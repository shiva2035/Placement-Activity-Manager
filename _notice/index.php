<?
session_start();
if(!isset($_SESSION['uname']))
{
?>
<body bgcolor=#f8f8f8 style="{align:center;margin-left:400;margin-right:400;}">
<title>Welcome</title>
<br></br><br></br><br></br><br></br>
<fieldset>
<legend style={color:blue;}><b>Administration Login Form</b></legend>	
	<form align=center action="" method=post>
	<table align=center>
	<tr><td><b>UserName:</td><td><input type=text name=uname style="{background-color:#f8f8f8;border:0.1;border-style:solid;border-color:gray;}"></td></tr>
	<tr><td><b>Password:</td><td><input type=password name=password style="{background-color:#f8f8f8;border:0.1;border-style:solid;border-color:gray;}"></td></tr>
	<tr><td></td><td><input type="reset" value="Reset" style="{background-color:maroon;color:white;border:0.2;-moz-border-radius:45;border-style:double;}"><input type="submit" name="login" style="{background-color:green;color:white;border:0.2;-moz-border-radius:45;border-style:double;}"></td></tr>
	</table>
	</form>
<?
}
else
{
	//header("location:notice.php");
	include("header.php");
	?>
	<div style="{float:right;}"><? include("updates.php");?>
	</div>
	<?
}
if(array_key_exists("login",$_POST))
{
	$uname=$_POST['uname'];
	$passwd=$_POST['password'];
	if($uname=="admin" && $passwd=="admin")
	{
		$_SESSION['uname']=$uname;
	}
}
?>
