<?
	require_once('check_Access.php');
	if(array_key_exists("submit", $_POST))
	{
		echo "In c_post";
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
		echo $job_id;
		if(!isset($_FILES["file"]))
		{
			$link="-";
		}
		else
		{
			$link = $_FILES["file"]["name"];
			move_uploaded_file($_FILES["file"]["tmp_name"],"c_prof/".$_FILES["file"]["name"]) or die("File Error: ".$_FILES["file"]["error"]);
			echo "<center><br><br><b><u>Flie ".$_FILES["file"]["name"]."<b> is stored in Notices <br/>";
		}
		$x="insert into `placementportal`.`jobs` values('$job_id','$title','$comp','$desc','$eligibility','$req_skills','$salary','$other','$link');";
		$y=mysql_query($x);
		if(!$y)	echo "Error.".mysql_error();
		else echo "Successfully Posted a new job on the bill board.";
		
	}
	else
	{
		header("location:index.php?page=c_post_job");
	}
	include("template.php");
?>
