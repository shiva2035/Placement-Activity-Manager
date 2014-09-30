<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<?
	include("conn.php");
	$x1= "select * from jobs order by job_id desc";
	$x2=mysql_query($x1);
	echo "<br/><div style=\"{margin-left:50;margin-right:50;}\"><table border=1 align=center class=\"table table-bordered table-hover\">";
	$sl = 0;
	echo "<tr><th>Sl.No</th><th width=150>Job ID</th><th width=500>Job Title</th><th width=200>Posted On</th><th width=200>Last Date</th></tr>";
	while($row = mysql_fetch_array($x2))
	{
		$sl+=1;
	?>
		<tr id="jlink"><td align=center><? echo $sl;?></td><td align=center><? echo $row['job_id'];?></td><td><a href="viewJob.php?jobID=<? echo $row['job_id'];?>"><?echo $row['job_title'];?></a></td><td><?echo $row['posted_on'];?></td><td><? $today = date("Y-m-d");$ld=$row['last_date'];if($ld<$today) echo "<img src=\"images/expired.png\">"; else echo "$ld"; ?></td></tr>
	<?
	}
	echo "</table></div>";
?>
