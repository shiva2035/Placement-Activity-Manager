<link href="bootstrap.min.css" rel="stylesheet" media="screen"><link href="bootstrap.min.css" rel="stylesheet" media="screen">
<?
	session_start();
	include("conn.php");
	$x1= "select * from jobs";
	$x2=mysql_query($x1);
	$uname= $_SESSION['user'];
	$sl = 0;
	$count = mysql_num_rows(mysql_query("select * from jobs;"));	
	if($count>0)
	{
	echo "<br/><center><b>All Jobs Applied by $uname</b></center><div style=\"{margin-left:50;margin-right:50;}\"><table border=1 align=center class=\"table table-bordered table-hover\">";
	echo "<tr><th>Sl.No</th><th width=150>Job ID</th><th width=500>Job Title</th><th width=200>Company Name</th><th width=200>Stauts</th></tr>";
	while($row=mysql_fetch_array($x2))
	{
		$jobid= $row['job_id'];
		$x4 = mysql_query("select * from $jobid where stu_id=\"$uname\";");
		$count1 = mysql_num_rows(mysql_query("select * from $jobid where stu_id=\"$uname\";"));
		if($count1>0)
		{
			while($row1 = mysql_fetch_array($x4))
			{
				$sl+=1;
			?>
				<tr><td align=center><? echo $sl;?></td><td align=center><? echo $row['job_id'];?></td><td><a href="viewJob.php?jobID=<? echo $row['job_id'];?>"><?echo $row['job_title'];?></a></td><td><?echo $row['company_name'];?></td><td><?echo $row1['stats'];?></td></tr>
			<?
			}
		}	
	}
	echo "</table></div>";			
	}
?>
