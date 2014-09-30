<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<?
	session_start();
	$cid = $_GET['circular'];
	include("conn.php");
	$q1="select * from notice where cid=\"$cid\"";
	$q2=mysql_query($q1)or die(mysql_error());
	echo "<br>";
	while($row=mysql_fetch_array($q2))
	{
		?>
		<center><img src="images/nb.png" style="{background-image:url(images/nb.png);background-position:center center;background-repeat:no-repeat;}"></center>		<br>
		<div class="container">
		<table align=center width=800 class="table table-bordered table-hover">
		<tr class="success"><td><? echo $row['title'];?></td></tr>
		<tr><td><? echo $row['message'];?></td></tr>
		<tr><td><font color=orange><b>Download Attachment: </b></font><a href="notices/<? echo $row['link'];?>"><? echo $row['link'];?></a></td></tr>
		<tr><td><font color=orange><b>Circular Posted On: </b></font><? echo $row['date'];?>, <? $x=$row['time'];$tm= $x[0].$x[1].":".$x[2].$x[3].":".$x[4].$x[5]; echo $tm;?></a></td></tr>
		<tr><td align=right>Sd/-<br><? echo $row['type']?> Incharge,<br>RGUKT-Basar.</td></tr>
		</table>
		</div>
		<br>
		<center><a href="spot.php">Back to All Circulars</a></center>
		<?
	}
	
?>
