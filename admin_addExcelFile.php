<!DOCTYPE html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<?php 
	mysql_connect("localhost","root","password");
	$x = mysql_select_db("results");
	include 'Excel/reader.php';
	function uploadFile($fieldName, $fileType, $folderName, $name = "")
	{
		$flg = 0;
		$MaxID = "";
		$ext = "";
		$uploadfile = "";
		if (isset($fieldName) AND $fieldName['name'] != '')
		{
			$flg = 1;
			$allowed_filetypes = $fileType;
			$max_filesize = 1048576;
			$filename = $fieldName['name'];
			if ($name == "")
				$MaxID = time() . time() . rand(1, 100);
			else
				$MaxID = $name;
			$ext = substr($filename, strpos($filename, '.'), strlen($filename) - 1);
			if($ext==".xlsx")
				$ext=".xls";
			if (!in_array($ext, $allowed_filetypes))
				echo "<h1>The file you attempted to upload is not allowed...</h1>";
			else if (filesize($fieldName['tmp_name']) > $max_filesize)
				echo "<h1>The file you attempted to upload is too large...</h1>";
			else 
			{
				$uploadfile = $folderName . "/" . $MaxID . $ext;
				if (move_uploaded_file($fieldName['tmp_name'], $uploadfile) == FALSE)
				{
					echo "<h1>Error in Uploading File...</h1>";
					$MaxID = "";
				}
				else
					$MaxID = $MaxID . $ext;
			}
		}
		return $MaxID;
	}
	if(isset($_POST['submit']))
	{
		if($_FILES['excelFile']['name']!="")
		{
			$fileName=uploadFile($_FILES['excelFile'],array(".xls",".xlsx"),"excel_file");
			$data = new Spreadsheet_Excel_Reader();
			$data->read('excel_file/'.$fileName);
			$count =0;
			$flds=array();
			foreach($data->sheets[0]['cells'][1] as $cell)
			{
				array_push($flds,$cell);
			}
			print_r($flds);
			$stmt = "";
			for($i=0;$i<count($flds);$i++)
			{
				if($i<count($flds)-1)
				{
					$stmt = $stmt ."`$flds[$i]` varchar(30),";
				}
				else
				{
					$stmt = $stmt. "`$flds[$i]` varchar(20)";
				}
			}
			$table="B2K14".date("dmY");
			$q1 = "create table $table($stmt)";
			$q2 = mysql_query($q1);
			$title = $_POST['title'];
			echo $title;
			if($q2)echo "SUCCESS";
			else{ echo "FAILURE"; echo mysql_error();}
			$qq1 = "insert into all_forms values('$table','$title');";
			$qq2 = mysql_query($qq1);
			for($i=1;$i<=$data->sheets[0]['numRows'];$i++)
			{
				$qry = array();
				foreach($data->sheets[0]['cells'][$i] as $row)
				{
					array_push($qry,$row);
				}
				print_r($qry);
				echo "<br><hr>";
				$stmt ="";
				for($j=0;$j<count($qry);$j++)
				{
					if($j<count($qry)-1)
					{
						$stmt = $stmt ."'$qry[$j]',";
					}
					else
					{
						$stmt = $stmt. "'$qry[$j]'";
					}
				}
				$query="INSERT INTO `temp`.`$table` VALUES($stmt);";
				$res = mysql_query($query);
				if(!$res)
					echo mysql_error();
				else
					$count++;
			}
			if($count)
			{
				echo "<div class=\"control-group\"><center><label><font size=6 color=green>Successfully Inserted. Number of Inserted Records:$count</font></label></center></div>";
				unlink("excel_file/".$fileName);
			}
		}
	}
	else if(isset($_POST['delete']))
	{
		mysql_query("DELETE FROM StudentData");
	}	
	else
	{
	?>
	<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Import Excel File To MySql Database Using php">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/bootstrap-custom.css">

	</head>
	<body>   
	<!--Navigation--> 
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container"> 
				<a class="brand" href="#"><marquee>Bulk Records Upload Excel to MySQL<font size=4 color=red>(Please Do not REFRESH the page while Excel file is being uploaded)</font></marquee></a>
			</div>
		</div>
	</div>	
	<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
			<div class="container" id="form-login" align=center>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="upload_excel" enctype="multipart/form-data">
						<legend align=center><b>Upload/Import Excel File <font size=2 color=red>(.xls only)</font></b></legend>
						<table align=center>
						<tr><td>Enter the Form Title:</td><td><input type="text" name="title"></td></tr>
						<tr><td>Browse Input file(.xls only)</td><td><input type="file" name="excelFile" class="input-large"></td></tr>
						</table>
							<button type="submit" id="submit" name="submit" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
				</form>
			</div>
			<div class="span3 hidden-phone"></div>
		</div>
	</div>
	</body>
</html>
<?php
}
?>
