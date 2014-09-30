<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<script type=text/javascript>
function loadFile()
{
	document.getElementById('file').innerHTML="<input type=\"file\" name=\"file\">";
}
</script>
<?
session_start();
if(!($_SESSION['user']=="admin"))
{
	include("spot.php");
}
else
{
	//include("header.php");
	include("conn.php");
	$sq= "select * from notice where cid=\"".$_GET['cid']."\"";
	$sq1=mysql_query($sq);
	while($srow=mysql_fetch_array($sq1))
	{
	?>
		<br><br>
		<center>
		<div class="container">
		<fieldset><legend><b>Update Circular</b></legend>
		<form action="" method="post" name="file" enctype="multipart/form-data" id="form">
		<table>
		<tr><td>Circular ID:</td><td><input type="text" name="cid" readonly=true value="<? echo $srow['cid'];?>"></td></tr>
		<tr><td>Title of Circular:</td><td><input type="text" name="title" value="<? echo $srow['title'];?>"></td></tr>
		<tr><td>Message:</td><td><input type=text name=msg value="<? echo $srow['message'];?>" style="{width:auto;}"></textarea></td></tr>
		<tr><td>Link to be Displayed:</td><td><input type="text" name="hlink" value="<? echo $srow['hlink'];?>"></td></tr>
		<tr><td>Add Attachment:</td><td id=file><input type="text" readonly="true" value="<? echo $srow['link'];?>"><input type="button" onclick="loadFile()" value="Attach File"></td></tr>
		<tr><td>Type of Circular:</td><td>
		<select name="type">
		<option value="RGUKT-Basar">Select Type of Circular</option>
		<option value="Administration">Administration Notice</option>
		<option value="Examination">Examination Notice</option>
		<option value="Academic Section">Academic Related Notice</option>
		<option value="Placement Office">Placement & Career Development Cell</option>
		<option value="Other">Other Notice</option>
		</select>
		</td></tr>
		<tr><td></td><td><input type="submit" name="update" value="Update Circular" class="btn btn-info"></td></tr>
		</table>
		</form>
		</fieldset>
		</div>
	<?
	}
	if(array_key_exists('update',$_POST))
	{
		$title=$_POST['title'];
		$msg= $_POST['msg'];
		$hlink = $_POST['hlink'];
		$type=$_POST['type'];
		$cid=$_GET['cid'];
		$q1="update notice set title='$title',message='$msg',hlink= '$hlink', type='$type' where cid ='$cid'";
		$rr=mysql_query($q1)or die(mysql_error());
		if($rr) header("location:viewCircular.php?circular=$cid");
	}
}
//include("template.php");
?>
