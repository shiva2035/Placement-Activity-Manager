<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<?php
	include("conn.php");
	$jid= $_GET['jid'];
	$x1 = "select * from $jid;";
	$x2 = mysql_query($x1);
	$count = mysql_num_rows($x2);
	echo "<div class=\"container\"><br>";
	echo "<p class=\"success\"><center><b>Detailed Statistics of Job: $jid</b></center></p>";
	echo "<table class=\"table table-bordered table-hover>\"";
	echo "<tr><td><b>Total Number of Applied Students: </b></td><td>$count</td></tr>";
	echo "<tr><td><b>Total Number of Selected Students: </b></td><td>$count</td></tr>";
	echo "</table></div>";
?>
