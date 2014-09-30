<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<?
include('conn.php');
	$jobID= $_GET['jobid'];
	if(array_key_exists('submit',$_POST))
	{
		$uid = $_POST['uid'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$phone = $_POST['phno'];
		$ssc = $_POST['ssc'];
		$puc = $_POST['puc'];
		$engg = $_POST['engg'];
		$dist = $_POST['dist'];
		$mdl = $_POST['mdl'];
		$vill = $_POST['vill'];
		$stats = $_POST['status'];
		$x = "insert into `placementportal`.`$jobID` values('$uid','$fname','$lname','$email','$phone','$ssc','$puc','$engg','$dist','$mdl','$vill','$stats')";
		$y = mysql_query($x) or die("Bye!".mysql_error());
		if($y) echo "<br><br><font color=green><center><b>Your Application Successfully Sent to Placement Oyfficer</b></center></font>";
		

	}
	else
	{
		echo "</br>";
		session_start();
		$x= mysql_num_rows(mysql_query("select * from `placementportal`.`$jobID`"));
		if($x>=1)
		echo "<font color=red><center><b>You've Already Applied for this Job</b></font>";
		else
		{
			$user=$_SESSION['user'];
			$x1= "select * from `placementportal`.`studetails` where uname=\"$user\"";
			$x2=mysql_query($x1);
			while($row=mysql_fetch_array($x2))
			{
			$fname = $row['first'];
			$lname=$row['last'];
			$stuid = $row['uname'];
			$email= $row['email'];
			$phno= $row['phone'];
			$dist=$row['a3'];
			$mdl=$row['a2'];
			$vill=$row['a1'];
			$ssc= $row['ssc'];
			$puc=$row['puc'];
			$engg=$row['engg'];		
			echo "<fieldset style={margin-left:150;margin-right:150;border:1px solid red;}><legend align=center>Application Form</legend>";
			echo "<table align=center>";
			echo "<form action=\"\" method=post style={margin-left:200;}>";		
			echo "<tr><td>Full Name: </td><td><input type=text value=\"$fname\" name=fname readonly=true> <input type=text value=\"$lname\" name=lname readonly=true></td></tr>";
			echo "<tr><td>University ID: </td><td><input type=text name=uid value=\"$stuid\" readonly=true></td></tr>";
			echo "<tr><td>e-Mail ID: </td><td><input type=text name=email value=\"$email\" readonly=true></td></tr>";
			echo "<tr><td>Phone No: </td><td><input type=text name=phno value=\"$phno\" readonly=true></td></tr>";
			echo "<tr><td>SSC Percentage: </td><td><input type=text name=ssc value=\"$ssc\" readonly=true></td></tr>";
			echo "<tr><td>PUC CGPA: </td><td><input type=text name=puc value=\"$puc\" readonly=true></td></tr>";
			echo "<tr><td>Engg CGPA: </td><td><input type=text name=engg value=\"$engg\" readonly=true></td></tr>";
			echo "<tr><td>Dist: </td><td><input type=text name=dist value=\"$dist\" readonly=true></td></tr>";
			echo "<tr><td>Mandal: </td><td><input type=text name=mdl value=\"$mdl\" readonly=true></td></tr>";
			echo "<tr><td>Village: </td><td><input type=text name=vill value=\"$vill\" readonly=true></td></tr>";
			echo "<tr><td>Are you Eligible?: </td><td><select name=\"status\"><option value=eligible>YES</option><option value=not-eligible>NO</option></select></td></tr>";
			echo "<tr><td></td><td><input type=submit name=submit value=\"Submit My Application\" class=\"btn btn-success\"></td>";
			echo "</form>";		
			echo "</table>";
			echo "</fieldset><br><br>";
			}
		}
	}
?>
