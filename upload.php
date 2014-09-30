<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<style>
#form
{
	align:center;
	color:green;
	//background-color:brown;
	margin-top:50px;
	margin-left:250px;
	margin-right:400px;
}

</style>
<center>
<?php
if(!array_key_exists("disp",$_POST))
{
?>
<br><br><fieldset><legend><b><font color="green">Upload Your Resume Here </b></legend>
<p> Please Download <a href="run.sh">this</a> file and convert your resume to png format before uploading</p>
<form action="" method="post" name="file" enctype="multipart/form-data" id="form">
<input type="file" name="file">
<input type="submit" value="Upload-Here" name="upload" class="btn btn-info">
<input type="hidden"name="disp"value="true">
</form></center>
</html>
</fieldset>
<?php
}
if(array_key_exists("upload",$_POST))
{
			if(file_exists("uploads/".$_FILES["file"]["name"]))
				{
					echo "<br><br><br>File already exist</br>";
				}
			else
				{
					move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/".$_FILES["file"]["name"]) or die("File Error: ".$_FILES["file"]["error"]);
					echo "<center><br><br><b><u>Flie ".$_FILES["file"]["name"]."<b> is stored in uploads <br/>";
				}
echo "<br/><b>File Name :  ".$_FILES["file"]["error"];

echo "<br/><b>File Name :  ".$_FILES["file"]["name"];
echo "<br/><b>File Type:  ".$_FILES["file"]["type"];
echo "<br/><b>File size :  ".($_FILES["file"]["size"])/1024 ."Kbs</center>";
}
?>

