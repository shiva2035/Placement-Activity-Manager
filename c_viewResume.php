<?php
	session_start();
	//require_once('test.php');
	//$uname=$_SESSION['user'];
	include('head.php');
	echo "<br>";
	include("conn.php");
	$id=$_GET['id'];
	$rr=scandir("profile-face");
	foreach($rr as $value)
	{
		if($value=="$id".".jpg")
		{
	?>
<style>
#img
{
	width:80;
	height:80;
	border:1.5px;
	border-style:solid;
}
#img:hover
{
	//width:320;
	//height:240;
}
</style>
<?php
		}
	}
	mysql_select_db("placementportal");
	$uname=$id;
	$q1="select * from studetails where uname=\"$id\";";
	$q2=mysql_query($q1);
	while($row=mysql_fetch_array($q2))
	{
	?>
<style>
#const1
{
	color:white;
	background-color:maroon;
	text-align:left;
	width:200;
}
#const2
{
	color:green;
	background-color:#f8f8f8;
	text-align:left;
	width:600
}
#const2:hover
{
	background-color:skyblue;
}
#tab
{
	margin:50 0 50;
	width:1000;
	//border:3px;
	//border-style:groove;
	//border-radius:25;
	//-moz-border-radius:5;
	//background-color:white;
	color:black;
	font-weight:bold;
}
</style>
<!--<fieldset><legend align=center style="{width:100%;text-align:center;background-color:skyblue;}"><b><?php echo $_SESSION['user']; ?> 's Details</b></legend>-->
<center>
<table id="tab" style="{border:0.8;border-style:groove;border-color:skyblue;margin:0 -20 0}">
<tr><td id="const1">Student Full Name:</td><td style="{width:500;background-color:;color:;}"><b><p style={text-transform:uppercase}><?php echo $row['first']."  ";?> <?php echo $row['last'];?><br><font size=2>S/o:<?php echo $row['father'];?></font></b></td><td><img src="profile-face/<?php echo $id; ?>.jpg" id="img"></td></tr>
<tr><td id="const1">University ID:</td><td id="const2"><b><p style={text-transform:uppercase}><?php echo $row['uname'];?></b></td></tr>
<tr><td id="const1">Academic Records:</td><td id="const2"><fieldset><legend>Student Academic Records:</legend>
<table style="{border:0.2;border-style:groove;border-color:green;}">
<tr style="{background-color:white;font-size:15;color:orange;}"><th>SSC Percentage</th><th>PUC CGPA</th><th>E1 CGPA</th><th>E2 CGPA</th><th>E3 CGPA</th><th>E4 CGPA</th></tr>
<tr style="{background-color:#c8c8c8;font-size:15;color:black;}"><th>82.00%</th><th>8.45</th><th>8.33</th><th>-</th><th>-</th><th>-</th></tr>
</table>
</fieldset>
</td></tr>
<tr>
<td id="const1">Communication</td>
<td>
<fieldset><legend>Address for Communication</legend>
<table>
<tr><td id= "const1">Permanent Address:</td><td id="const2"><p>Village: <?php echo $row['a1'];?>, Mandal:<?php echo $row['a2'];?>,Dist:<?php echo $row['a3'];?> .</p></td></tr>
<tr><td id="const1">e-Mail ID:</td><td id="const2"><?php echo $row['email'];?></td></tr>
<tr><td id="const1">Phone Number:</td><td id="const2"><?php echo $row['phone'];?></td></tr>
<tr><td id="const1">Class Room:</td><td id="const2"><?php echo $row['class'];?></td></tr>
<td id="const1">Hostel Room:</td><td id="const2"><?php echo $row['hostel'];?></td>
</table>
</fieldset>
</td>
</tr>
<!--<tr><td id="const1">Father Name:</td><td id="const2"><b><p style={text-transform:uppercase}><?php echo $row['father'];?></b></td></tr>
<tr><td id="const1">Mother Name:</td><td id="const2"><b><p style={text-transform:uppercase}><?php echo $row['mother'];?></b></td></tr>-->
<tr><td id="const1">Department:</td><td id="const2"><?php echo $row['dept'];?></td></tr>
<tr><td id="const1">Date of Birth:</td><td id="const2"><?php echo $row['dob'];?></td></tr>


<tr><td id="const1">Student Resume:</td><td id="const2"><a href="viewPDF.php?id=<? echo $row['uname'];?>&vtype=company"><? echo $row['uname'];?></a></td></tr>
</table></fieldset>

</center>
	<?php
	}
	?>
	<br>
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
