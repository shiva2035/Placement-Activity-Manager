<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<?
	require_once('check_Access.php');
	//echo "Previously posted jobs";
?>
<br><center><h4 style="{margin-left:50;margin-right:50;background-color:maroon;color:white;border:1px solid black;}">View All Previously posted Jobs</h4></center>
<div style="{margin-left:50;margin-right:50;}"><table align=center class="table table-bordered table-hover">
<tr  style={background-color:maroon;color:white;}><th>Sl.No</th><th width="100">Job_ID</th><th width="350">Job Title</th><th width="350">Company</th><th>Remarks</th></tr>
<?
$sl=0;
include("conn.php");
$x = "select * from `jobs` order by job_id desc;";
$y = mysql_query($x);
while($row=mysql_fetch_array($y))
{
	$sl=$sl+1;
	echo "<tr><td>$sl</td><td>".$row['job_id']."</td><td>".$row['job_title']."</td><td>".$row['company_name']."</td><td><a href=\"c_viewApplied.php?job_id=".$row['job_id']."\" target=\"_blank\">View Applied</a></td></tr>";
}
?>
</table>
</div>
