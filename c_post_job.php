<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<script type=text/javascript>
function loadFile()
{
	document.getElementById('file').innerHTML="<input type=\"file\" name=\"file\">";
}
</script>
<?
	include_once('check_Access.php');
	//session_start();
	if(array_key_exists("submit", $_POST))
	{
		//echo "In c_post";
		$title=$_POST['job_title'];
		$desc= $_POST['job_desc'];
		$eligibility= $_POST['eligibility'];
		$req_skills= $_POST['req_skills'];
		$salary= $_POST['salary'];
		$other= $_POST['other'];
		$comp=$_POST['company'];
		$con= mysql_connect("localhost","root","password");
		mysql_select_db("placementportal")or die("DB Not Connected");;
		$sel1=mysql_query("select * from jobs;");
		$bid="B2K14";
		$n=mysql_num_rows($sel1);
		$job_id= $bid."".$n;
		$ldate=$_POST['ldate'];
		$pdate = date("Y-m-d");
		if(!isset($_FILES["file"]))
		{
			$link="-";
		}
		else
		{
			$link = $_FILES["file"]["name"];
			move_uploaded_file($_FILES["file"]["tmp_name"],"c_prof/".$_FILES["file"]["name"]) or die("File Error: ".$_FILES["file"]["error"]);
			echo "<center><br><br><b><u>Flie ".$_FILES["file"]["name"]."<b> is stored in CompanyProfiles <br/>";
		}
		$x="insert into `placementportal`.`jobs` values('$job_id','$title','$comp','$desc','$eligibility','$req_skills','$salary','$other','$link','$pdate','$ldate');";
		$y=mysql_query($x);
		if(!$y)	echo "Error.".mysql_error();
		$c1= "create table $job_id(stu_id varchar(8) primary key, fname varchar(20), lname varchar(20), email varchar(50), phone varchar(10), ssc float(10), puc float(10), engg float(10), dist varchar(20), mdl varchar(20), village varchar(30), stats varchar(15))";
		$c2= mysql_query($c1);
		if(!$c2) echo "Error.:". mysql_error();
		else
		{
			echo "<br><br><br><b><font color=green><center>Successfully Posted a new job on the bill board.</center></b></font>";
		}
	}
	else
	{
	?>
	<br/>
	<div class="container">
	<fieldset style="{margin-left:200;margin-right:200;}">
	<legend style="color:brown;"><b>Fill the Job Notification Form(JNF)</b></legend>
	<form action="" method="post" name="file" enctype="multipart/form-data" id="form">
	<table align=center>
	<tr><td><b>Job Title:</b></td><td><input type="text" name="job_title"> <b>Company: </b><input type="text" name="company"></td></tr>
	<tr><td><b>Job Description:</b></td><td><textarea rows=5 cols=63 name=job_desc class="input-xxlarge" rows=8></textarea></td></tr>
	<tr><td>Company Profile:</td><td id=file><input type="button" class="btn btn-info" onclick="loadFile()" value="Attach File"><p ></p></td></tr>	
	<tr><td><b>Eligibility Criteria:</b></td><td><input type=text name=eligibility></td></tr>
	<tr><td><b>Required Skills:</b></td><td><input type=text name=req_skills></td></tr>
	<tr><td><b>Salary Offered:</b></td><td><input type=text name=salary >(LPA)</td></tr>
	<tr><td><b>Last Date to Apply:</b></td><td><input type=text name=ldate >(Enter as: YYYY-MM-DD)</td></tr>
	<tr><td><b>Any Other Information:</b></td><td><textarea rows=5 cols=63 name=other class="input-xxlarge" rows=8></textarea></td></tr>	
	<tr><td></td><td><input type="submit" value="Post Job" class="btn btn-success" name=submit></td></tr>
	</table>
	</form>
	</fieldset>
	</div>
	<?
	}
?>
