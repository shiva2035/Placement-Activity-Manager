<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<?
	include("conn.php");
	$q1="select * from notice order by cid desc";
	$q2=mysql_query($q1)or die(mysql_error());
	echo "<div class=\"container\"><br>";
	echo "<center><p class=\"success\"><b>All Notices Archives</b></p>";
	$sl =0;
	echo "<table class=\"table table-bordered\">";
	echo "<tr class=\"success\"><th>Sl.No</th><th>Circular</th><th>Time</th><th>Date of Post</th><th>Edit</th></tr>";
	while($row=mysql_fetch_array($q2))
	{
		$sl = $sl+1;
		$date = date("d",strtotime($row['date']))."/".date("m",strtotime($row['date']))."/".date("y",strtotime($row['date']));
		echo "<tr class=\"info\"><td>$sl</td><td><a href=\"viewCircular.php?circular=".$row['cid']."\">".$row['title']."</a></td><td>".$row['time']."</td><td>$date</td><td><a href=\"updateCircular.php?cid=".$row['cid']."\"><img src=\"images/edit.png\"></a></td></tr>";
	}
	echo "</table>";
	echo "</div>";
?>
