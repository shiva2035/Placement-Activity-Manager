<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<?php
	require_once('check_Access.php');
	include("head.php");	
	$job_id=$_GET['job_id'];
?>
<br><center><h4 style="{margin-left:50;margin-right:50;background-color:maroon;color:white;border:1px solid black;}">Statistics of All Placement Activities</h4></center><hr>

<div style="{margin-left:50;margin-right:50;height:400;}">
<table align=center class="table table-bordered table-hover">
<tr style="{background-color:maroon;color:white;}"><th width=100>Sl.No</th><th width="100">Stud_ID</th><th width="300">Candidate Name</th><th>Profile</th><th>Status</th></tr>
<?
$sl=0;
include("conn.php");
$x = "select * from `$job_id`;";
$y = mysql_query($x);
while($row=mysql_fetch_array($y))
{
	$sl=$sl+1;
	echo "<tr id=\"tr\"><td>$sl</td><td>".$row['stu_id']."</td><td>".$row['fname']." ".$row['lname']."</td><td><a href=\"c_viewResume.php?id=".$row['stu_id']."\">View Profile</a></td><td>".$row['stats']."</td></tr>";
}
$total = mysql_num_rows($y);
echo "<table align=center width=680 class=\"table table-bordered\"><tr><td style={background-color:maroon;color:white;text-align:right;}><b>Total No. of Applications Received: $total</b></td></tr></table>";
?>
</table>
</div>
</div>
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

<div id="bottom2" valign=middle>STUDENTS[2008]@Rajiv Gandhi University of Knowledge Technologies-BASAR<br/>Dept.of Computer Science and Engineering-2k8, (Best View in Firefox 3.4 or Above)</div>

