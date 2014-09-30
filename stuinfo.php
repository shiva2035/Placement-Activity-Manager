<?php
	session_start();
	//require_once('test.php');
	$uname=$_SESSION['user'];
	//include('head.php');
	include("conn.php");
	$rr=scandir("profile-face");
	foreach($rr as $value)
	{
		if($value=="$uname".".jpg")
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
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<?php
		}
	}
	$uname=$_SESSION['user'];
	$q1="select * from studetails where uname=\"$uname\";";
	$q2=mysql_query($q1);
	while($row=mysql_fetch_array($q2))
	{
	?>
<fieldset style="{margin-left:75;margin-right:75;}"><legend><b><?php echo $_SESSION['user']; ?> 's Details</b></legend>
<center>
<table class="table table-bordered"  style="{border:1px;border-style:solid;border-color:black;}">
<tr><td>Student Full Name:</td><td><b><p style={text-transform:uppercase;color:green;}><?php echo $row['first']."  ";?> <?php echo $row['last'];?><br><font size=2>S/o:<?php echo $row['father'];?></font></b></td><td><img src="profile-face/<?php echo $_SESSION['user']; ?>.jpg" id="img"></td></tr>
<tr><td>University ID:</td><td><b><p style={text-transform:uppercase}><?php echo $row['uname'];?></b></td></tr>
<tr><td>Department:</td><td>-Computer Science and Engineering-</td></tr>
<tr><td>Date of Birth:</td><td><b><p style={text-transform:uppercase}><?php echo $row['dob'];?></b></td></tr>
<tr><td>Student Resume:</td><td><a href="viewPDF.php?id=<?php echo $row['uname'];?>&vtype=student"><?php echo $row['uname'];?></a></td></tr>
</table>
</fieldset>

<fieldset style="{margin-left:75;margin-right:75;}"><legend><b>Academic Details</b></legend>
<table class="table table-bordered"  style="{border:1px;border-style:solid;border-color:black;}">
<tr><th>SSC Percentage</th><th>PUC CGPA</th><th>E1 CGPA</th></tr>
<tr><th><?php echo $row['ssc'];?></th><th><?php echo $row['puc'];?></th><th><?php echo $row['engg'];?></th></tr>
</table>
</fieldset>

<fieldset style="{margin-left:75;margin-right:75;}"><legend><b>Communication Details</b></legend>
<table class="table table-bordered" style="{border:1px;border-style:solid;border-color:black;}">
<tr><td>Permanent Address:</td><td><?php echo $row['a1'].",".$row['a2'].",".$row['a3'];?></td></tr>
<tr><td>Present Address:</td><td>RGUKT-Basar, Mudhole, Adilabad,PIN:504107<?php //echo $row['present_addr'];?></td></tr>
<tr><td>e-Mail ID:</td><td><?php echo $row['email'];?></td></tr>
<tr><td>Phone Number:</td><td><?php echo $row['phone'];?></td></tr>
<tr><td>Class Room:</td><td><?php echo $row['class'];?></td></tr>
<td>Hostel Room:</td><td><?php echo $row['hostel'];?></td>
</table>
</fieldset>
<br><br>
</center>
	<?php
	}
	?>
