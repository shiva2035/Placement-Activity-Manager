<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<style>
#menus
{
	list-style:none;
	color:green;
}
#menus a
{
	font-weight:bold;
	align:center;
}
#menus a:hover
{
	border-style:double;
	list-style:none;
	color:green;
	background-color:white;
}
#updates
{
	width:300;
	height:460;
	border-left:1px solid black;
	
	background-color:#f8f8f8;
	overflow:auto;
}
#leg
{
	color:white;
	background-color:maroon;
	//width:300;
	//border:1;
	//border-style:solid;
}
</style>
<div id="updates"><legend id="leg"><center><b>Latest Updates</b></center></legend>
<!--<marquee direction="up" onmouseover="stop()"onmouseout="start()" title="Latest Updates and Hilights">-->
<?
	include("conn.php");
	$q1="select * from notice order by cid desc";
	$q2=mysql_query($q1)or die(mysql_error());
	echo "<div id=\"menus\"><ul>";
	while($row=mysql_fetch_array($q2))
	{
		$date = date("d",strtotime($row['date']))."/".date("m",strtotime($row['date']))."/".date("y",strtotime($row['date']));
		echo "<li><font size=2><a href=\"viewCircular.php?circular=".$row['cid']."\">".$row['title']."</a></font><br><font size=1.5>".$date.",".$row['time']."</li>";
		//if(!isset($_SESSION['user'])){require_once('head.php');}
	}
	echo "</ul></div>";
?>
</marquee></div>
