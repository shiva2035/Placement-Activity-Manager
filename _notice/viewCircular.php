<?
	session_start();
	//require_once('head.php');
	$cid = $_GET['circular'];
	include("conn.php");
	include("header.php");
	$q1="select * from notice where cid=\"$cid\"";
	$q2=mysql_query($q1)or die(mysql_error());
	echo "<br>";
	while($row=mysql_fetch_array($q2))
	{
		?>
		<table align=center width=800 style="{border-left:2;border-style:solid;}">
		<tr style="{background-color:brown;color:white;}"><td><? echo $row['title'];?></td></tr>
		<tr style="{hover{background-color:gray;}}"><td><b><? echo $row['message'];?></b></td></tr>
		<tr style="{hover{background-color:gray;}}"><td><font color="orange"><b>Associated Link: </b><a href="<? echo $row['hlink'];?>"><? echo $row['hlink'];?></a></td></tr>
		<tr><td><font color=orange><b>Download Attachment: </b></font><a href="notices/<? echo $row['link'];?>"><? echo $row['link'];?></a></td></tr>
		<tr><td><font color=orange><b>Circular Posted On: </b></font><? echo $row['date'];?>, <? echo $row['time'];?></a></td></tr>
		<tr><td align=right>Sd/-<br><? echo $row['type']?> Incharge,<br>RGUKT-Basar.</td></tr>
		</table>
		<br>
		<center><a href="notice.php">Back to All Circulars</a></center>
		<?
	}
	//include("template.php");
?>
