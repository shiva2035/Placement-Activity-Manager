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
</style>
<?
	include("conn.php");
	$q1="select * from notice order by cid desc ";
	$q2=mysql_query($q1)or die(mysql_error());
	echo "<div class=\"container\"><br>";
	echo "<center><p class=\"success\"><b>All Notices Archives</b></p>";
	$sl =0;
	echo "<table class=\"table table-bordered table-hover\">";
	echo "<tr class=\"warning\"><th>Sl.No</th><th>Circular</th><th>Date of Post</th></tr>";
	while($row=mysql_fetch_array($q2))
	{
		$sl = $sl+1;
		echo "<tr class=\"info\"><td>$sl</td><td><a href=\"viewCircular.php?circular=".$row['cid']."\">".$row['title']."</a></td><td>".$row['time']."</td>";
	}
	echo "</table>";
	echo "</div>";
?>
