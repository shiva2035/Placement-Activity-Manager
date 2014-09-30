<style>
#div
{
	width:100%;
	height:100%;
	background-color:orange;
	border:2px;
	overflow:scroll;
} 
</style>
<?
	session_start();
	require_once('test.php');
	$uname=$_SESSION['user'];
	$filename = $_GET['id'];
	$vtype=$_GET['vtype'];	
	if(!(($uname=="company") || ($uname=="admin")))
	{
		if($filename != $uname)
		{
			header("Location:index.php?page=home");
		}
	}
	
	?>
	<?if(!($vtype=="student"))
	{?>
	<div id="form">
	<form action="" method =post>
	<input type="button" value="Short List"/><input type="button" value="Reject"/>
	</form>
	</div>
	<?
	}
	$img= "resume-cv/images/$filename.png"; 
	echo "<div id=div><img src=$img></div>";
?>
	<br>
<?if(!($vtype=="student"))
{?>
<style>
#bottom2
{
	margin-bottom:-150;
	text-align:center;
	vertical-align:middle;
	text-align:center;
	color:white;
	background-color:blue;
	//width:100%;
	height:50;
	margin-left:-100;
	margin-right:-100;
	font-size:12pt;
}
</style>
<?}?>
