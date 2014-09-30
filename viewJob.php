<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<style>
#tit
{
	font-weight:bolder;
	background-color:maroon;
	color:white;	
	//width:200;
}
#name
{
	color:blue;
}
#app
{
	text-align:center;
	float:right;
	width:250;
	background-color:teal;
	color:white;
}
#app:hover
{
	width:250;
	//height:50;
	background-color:orange;
}
#jd
{
	margin-left:75;	margin-right:75;
	
}
</style>
<?
	include("conn.php");
	$x1= "select * from `placementportal`.`jobs` where job_id = '".$_GET['jobID']."'";
	$x2=mysql_query($x1);
	echo "</br>";
	while($row = mysql_fetch_array($x2))
	{
		$jobID = $row['job_id'];
		echo "<div class=\"container\" style=\"{margin-left:100;margin-right:100;width:80%;}\">";
		echo "<fieldse><legend class=\"success\"><b>".$row['job_title']."</b></legend><table class=\"table table-bordered\">";
		echo "<tr><td><b style={color:blue;}>Company Name:</b></td><td>".$row['company_name']."</td></tr>";
		echo "<tr><td><b style={color:blue;}>Company Profile:</b></td><td><a href=\"c_prof/".$row['link']."\">".$row['link']."</a></td></tr>";		
		echo "<tr><td><b style={color:blue;}>Job Description:</b></td><td>". $row['job_desc']."</td></tr>";
		echo "<tr><td><b style={color:blue;}>Eligibility Criteria:</b></td><td>". $row['eligibility']."</td></tr>";
		echo "<tr><td><b style={color:blue;}>Required Skills:</b></td><td>". $row['req_skills']."</td></tr>";
		echo "<tr><td><b style={color:blue;}>Offered Salary/CTC:</b></td><td>". $row['salary']."</td></tr>";
		echo "<tr><td><b style={color:blue;}>Other Information Provided:</b></td><td>". $row['other']."</td></tr>";
		echo "<tr><td><b style={color:blue;}>Application Link</b></td><td><p class=\"btn btn-info\"><a href=\"applyJob.php?jobid=$jobID\">Apply for This Job</a></p></td></tr>";
		echo "</fieldset><br>";
		echo "</div>";
	}
?>
