<script type=text/javascript>
function loadFile()
{
	document.getElementById('file').innerHTML="<input type=\"file\" name=\"file\">";
}
</script>

<?
session_start();
if(!($_SESSION['uname']=="admin"))
{
	include("spot.php");
}
else
{
include("header.php");
?>
<br><br>
<center>
<fieldset style="{margin-left:200;margin-right:200;background-color:#f8f8f8;}"><legend><b>Compose Circular</b></legend>
<form action="" method="post" name="file" enctype="multipart/form-data" id="form">
<table>
<tr><td>Title of Circular:</td><td><input type="text" name="title"></td></tr>
<tr><td>Message:</td><td><textarea rows=10 cols=60 name=msg></textarea></td></tr>
<tr><td>Link to be Displayed:</td><td><input type="text" name="hlink"></td></tr>
<tr><td>Add Attachment:</td><td id=file><input type="button" onclick="loadFile()" value="Attach File"><p ></p></td></tr>
<tr><td>Type of Circular:</td><td>
<select name="type">
<option value="Null">Select Type of Circular</option>
<option value="Administration">Administration Notice</option>
<option value="Examination">Examination Notice</option>
<option value="Academic Section">Academic Related Notice</option>
<option value="Placement Office">Placement & Career Development Cell</option>
<option value="Other Notice">Other Notice</option>
</select>
</td></tr>
<tr><td></td><td><input type="submit" name="submit"></td></tr>
</table>
</form>
</fieldset>
<?
if(array_key_exists('submit',$_POST))
{
	if(!isset($_FILES["file"]))
	{
		$link="-";
	}
	else
	{
		$link = $_FILES["file"]["name"];
		move_uploaded_file($_FILES["file"]["tmp_name"],"notices/".$_FILES["file"]["name"]) or die("File Error: ".$_FILES["file"]["error"]);
		echo "<center><br><br><b><u>Flie ".$_FILES["file"]["name"]."<b> is stored in Notices <br/>";		
	}
	include("conn.php");

	$todayh = getdate();
	$d = $todayh['mday'];
	$m = $todayh['mon'];
	$y = $todayh['year'];
	$date= "$y-$m-$d"; 

	$time=mysql_query("select CURTIME()");
	$tm=mysql_result($time,0,0);
	$tmt=$tm[0].$tm[1].$tm[3].$tm[4].$tm[6].$tm[7];

	$dates=date('h:i A', strtotime($tmt));

	$title=$_POST['title'];
	$msg= $_POST['msg'];
	$hlink = $_POST['hlink'];
	mysql_connect("localhost","root","password");
	mysql_select_db("notices");
	$x=mysql_num_rows(mysql_query("select cid from notice"));
	$tid = "BSR".$y.$m.$d.$x;

	$type=$_POST['type'];
	$q1="insert into notice values('$tid','$title','$msg','$hlink','$link','$date','$dates','$type')";
	$rr=mysql_query($q1)or die(mysql_error());
	if($rr) header("location:viewCircular.php?circular=$tid");
}
}
//include("template.php");
?>
