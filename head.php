<title>::RGUKT-BASAR::Placement Portal</title>
<link rel="icon" href="images/rgu.png" type="image/x-icon" />
<link rel="stylesheet" href="style2.css" type="text/css">
<style type = 'text/css'>
body
{
	margin:50 100 100;
	border:1px;
	background-color:#F8F8F8;
}
#header
{
	align:center;
	margin-top:15;
	//margin-top:-5;
	text-align:right;
	vertical-align:middle;
	background-color:darkred;
	color:white;
	width:100%;
	height:40;
}
#header1
{
	//align:center;
	margin-top:-95;
	font-size:16pt;
	font-style:bolder;
	font-family:Georgia;
	text-align:center;
	vertical-align:bottom;
	background-image:url("images/head.jpg");
	color:brown;
	width:100%;
	height:120;
	//border-radius:15;
	//-moz-border-radius:15;
}
#search
{
	float:right;
	margin-top:-70;
}
#search_input
{
	background-color:#f8f8f8;
	background-image:url('images/mini_google.png');
	background-repeat:no-repeat;
	background-position:top right;
}
#search_button
{
	background-color:brown;
	color:white;
	text-shadow:1px 1px green;
	border-style:none;
	width:75px;
	height:23px;
}
#head_div
{
	background-color:#69BCE6;
	color:white;
	margin-top:-50;
	height:100;
	//-moz-border-radius:25;
}
</style>
<div id="head_div">
<center><font size=6 color=white>Placement and Career Development Programme</font><br><font size=3 color=white>(Dept.of Computer Science and Engineering, RGUKT-Basar)</font></center>
</div>
<div id="header">
	<ul id="menu">
	<li><a href="index.php?page=home" id="hlink">Home</a></li>
	<?php if(isset($_SESSION['user'])){
	$utype=$_SESSION['utype'];
	switch($utype)
	{
		case "student":
		{?>	
		<li><a href="index.php?page=searchJobs" id="hlink">Job Box</a></li>					
		<li><a href="index.php?page=viewApplied" id="hlink">Jobs History</a></li>
		<li><a href="index.php?page=viewForm" id="hlink">View Results</a></li>		
		<li><a href="index.php?page=spot" id="hlink">Archives</a></li>
		<li><a href="index.php?page=stuinfo"><?echo $_SESSION['user'];?></a>
		<ul>
			<li><a href="index.php?page=upload" id="hlink">Upload/Update Resume</a></li>
			<li><a href="index.php?page=update_profile" id="hlink">Update Profile</a></li>			
			<li><a href="logout.php" id="hlink">Logout</a></li>			
		</ul>
		</li>

		<?
		break;
		}
		case "admin":
		{?>
			<li><a href="index.php?page=c_post_job" id="hlink">Post Job</a></li>
			<li><a href="index.php?page=viewJobsbyMe" id="hlink">Previously Posted Jobs</a></li>
			<li><a href="index.php?page=c_viewStats" id="hlink">View Statistics</a></li>
			<li><a href="" id="hlink">Notice Board</a>
			<ul>
			<li><a href="index.php?page=notice" id="hlink">Compose a New Circular</a></li>
			<li><a href="index.php?page=adm_spot" id="hlink">Edit Circular</a></li>
			<li><a href="index.php?page=admin_addExcelFile" id="hlink">Upload ExcelFile</a></li>
			</ul>
			</li>
			<li><a href="logout.php" id="hlink">Logout</a></li>			
		<?
		break;
		}
		case "company":
		{?>
			<li><a href="index.php?page=stuinfo" id="hlink">Company Profile</a></li>
			<li><a href="index.php?page=c_post_job" id="hlink">Post Job</a></li>
			<li><a href="index.php?page=viewJobsbyMe" id="hlink">Previously Posted Jobs</a></li>
			<li><a href="index.php?page=spot" id="hlink">Archives</a></li>
		<?
		break;
		}
	}
}
	else{?>
	<li><a href="index.php?page=spot" id="hlink">Bill Board</a></li>
	<li><a href="index.php?page=login">Login</a></li>
	<?}?>	
	</ul>
</div>
