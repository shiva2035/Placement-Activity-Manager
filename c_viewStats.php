
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<br><center><h4 style="{margin-left:50;margin-right:50;background-color:gray;color:white;border:1px solid black;}">Statistics of All Placement Activities</h4></center>
<?php
	include("conn.php");
	$x1 = "select * from jobs;";
	$x2 = mysql_query($x1);
	$count = mysql_num_rows($x2);
	echo "<div class=\"container\"><br>";
	echo "<p class=\"success\"><center><b>Detailed Statistics of All Placement Activities</b></center></p>";
	echo "<table class=\"table table-bordered table-hover>\"";
	echo "<tr><td><b>Total Number of Companies Came for Drive: </b></td><td>$count</td></tr>";
	echo "<tr><td><b>Total Number of Students Placed Till Date: </b></td><td></td></tr>";
	echo "</table></div>";	
	?>
<hr><center><h4 style="{margin-left:50;margin-right:50;background-color:gray;color:white;border:1px solid black;}">Statistics of All Placement Activities</h4></center>
<div style="{margin-left:50;margin-right:50;}">
<table align=center class="table table-bordered table-hover"><tr style={background-color:maroon;color:white;}><th align=center width=100;>Sl.No</th><th width=300>Job Title</th><th width=300>Company</th><th width=150>Total Applied</th><th width=150>Total Selected</th><th width=150>Remarks</th></tr>
<?php
include("conn.php");
$x1= "select * from `placementportal`.`jobs`";
$x2= mysql_query($x1);
$sl = 0;
while($row=mysql_fetch_array($x2))
{
	$sl = $sl+1;
	$jid=$row['job_id'];
	$jtitle=$row['job_title'];
	$cname=$row['company_name'];
	$applied= getApplied($jid);
	$selected= getSelected($jid);
	echo "<tr align=center><td>$sl</td><td>$jtitle</td><td>$cname</td><td>$applied</td><td>$selected</td><td><a href=\"c_viewDetailed.php?jid=$jid\">View Detailed</a></td></tr>";
}
function getApplied($job_id)
{
	$y1= mysql_num_rows(mysql_query("select * from $job_id"));
	return $y1;
}
function getSelected($job_id)
{
	$y1= mysql_num_rows(mysql_query("select * from $job_id where stats='selected'"));
	return $y1;
}
?>

