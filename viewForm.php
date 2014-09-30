<!DOCTYPE html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<?php
	mysql_connect("localhost","root","password");
	mysql_select_db("results");
?>
<br><br>
<div class="container"><table align=center>
<legend>Input Form</legend>
<form action="" method="post">
<tr><td>Enter Search Key:</td><td><input type="text" name="key"></td></tr>
<tr><td>Select Form:</td><td><select name="form"><option value="null">Select Any Form</option>
<?php
	$x1 = "select * from all_forms";
	$x2 = mysql_query($x1);
	while($row=mysql_fetch_array($x2))
	{
		echo "<option value=\"".$row['form_id']."\">".$row['title']."</option>";
	}
?></select></td></tr>
<tr><td><input type="reset" value="Reset" class="btn btn-warning"></td><td><input type="submit" name="submit" value="Get Results" class="btn btn-info"></td></tr>
</form>
</table><hr>
<?php
	if(array_key_exists("submit",$_POST))
	{
		$form = $_POST['form'];
		$key = $_POST['key'];
		$sql = "select * from $form where id='$key';";
		$result = mysql_query($sql) or die(mysql_error());
		// Print the column names as the headers of a table
		echo "<table class=\"table-bordered\"><tr>";
		for($i = 0; $i < mysql_num_fields($result); $i++) {
		    $field_info = mysql_fetch_field($result, $i);
		    echo "<th>{$field_info->name}</th>";
		}
		// Print the data
		while($row = mysql_fetch_row($result)) {
		    echo "<tr>";
		    foreach($row as $_column) {
			echo "<td>{$_column}</td>";
		    }
		    echo "</tr>";
		}
		echo "</table>";
	}
?>
</div>
