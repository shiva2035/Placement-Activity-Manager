<head>
<body style="margin-left:350px;margin-top:25px;" align=center>
<fieldset style="margin-right:1000px;">
<script type="text/javascript" src="jquery.js" > </script> 
<SCRIPT SRC="multientry.js" LANGUAGE="Javascript" TYPE="text/javascript"></SCRIPT>
<script type="text/javascript">
    function PrintElem(elem)
    {
        Popup($(elem).text());
    }
    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><title>my div</title>');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');
        mywindow.print();
        mywindow.close();
        return true;
    }

</script>
</head>
<style>
#td1
{
	font-weight:bold;
	font-size:10pt;
	width:450;
}
#td2
{
	font-weight:bold;
	font-size:10pt;
}
</style>
<?
//if((array_key_exists('submit',$_POST))&&(array_key_exists('check',$_POST)))
//{
	$name=$_POST['full_name'];
	$father=$_POST['father_name'];
	$dob=$_POST['dob'];
	$uid=$_POST['uid'];
	$gender=$_POST['gender'];
	$degree=$_POST['degree'];
	$dept=$_POST['dept'];
	$hobbies=$_POST['hobbies'];		
	$per_add=$_POST['per_add'];
	$pre_add=$_POST['pres_add'];
	$nation=$_POST['nation'];
	$lang=$_POST['languages'];
	$cell=$_POST['cell'];
	$email=$_POST['email'];
	$campus1="Rajiv Gandhi University of Knowledge Technologies";
	$campus2="International Institute of Information Technologies-Basar";
	$deg1=$_POST['deg1'];
	$deg2=$_POST['deg2'];
	$deg3=$_POST['deg3'];
	$deg4=$_POST['deg4'];
	$deg5=$_POST['deg5'];
	$deg6=$_POST['deg6'];
	$branch1=$_POST['branch1'];
	$branch2=$_POST['branch2'];
	$branch3=$_POST['branch3'];
	$branch4=$_POST['branch4'];
	$branch5=$_POST['branch5'];
	$branch6=$_POST['branch6'];
	$univ1=$_POST['univ1'];
	$univ2=$_POST['univ2'];
	$univ3=$_POST['univ3'];
	$univ4=$_POST['univ4'];
	$univ5=$_POST['univ5'];
	$univ6=$_POST['univ6'];
	$ypass1=$_POST['ypass1'];
	$ypass2=$_POST['ypass2'];
	$ypass3=$_POST['ypass3'];
	$ypass4=$_POST['ypass4'];		
	$ypass5=$_POST['ypass5'];
	$ypass6=$_POST['ypass6'];
	$percent1=$_POST['percent1'];
	$percent2=$_POST['percent2'];
	$percent3=$_POST['percent3'];
	$percent4=$_POST['percent4'];
	$percent5=$_POST['percent5'];
	$percent6=$_POST['percent6'];					
	$cobj=$_POST['cobj'];
//
	$p1title=$_POST['p1title'];
	$p2title=$_POST['p2title'];
	$p3title=$_POST['p3title'];
	$p4title=$_POST['p4title'];
	$p5title=$_POST['p5title'];
	$p1des=$_POST['p1des'];
	$p2des=$_POST['p2des'];
	$p3des=$_POST['p3des'];
	$p4des=$_POST['p4des'];
	$p5des=$_POST['p5des'];
	$ts1=$_POST['ts1'];
	$ts2=$_POST['ts2'];
	$ts3=$_POST['ts3'];
	$ts4=$_POST['ts4'];
	$ps1=$_POST['ps1'];
	$ps2=$_POST['ps2'];
	$ps3=$_POST['ps3'];
	$ps4=$_POST['ps4'];
	$cs1=$_POST['cs1'];
	$cs2=$_POST['cs2'];
	$os1=$_POST['os1'];
	$os2=$_POST['os2'];
	$os3=$_POST['os3'];
	$os4=$_POST['os4'];
	$os5=$_POST['os5'];
	$tool1=$_POST['tool1'];
	$tool2=$_POST['tool2'];
	$tool3=$_POST['tool3'];
	$tool4=$_POST['tool4'];
	$ai1=$_POST['ai1'];
	$ai2=$_POST['ai2'];
	$ai3=$_POST['ai3'];
	$ai4=$_POST['ai4'];
	$sa1=$_POST['sa1'];
	$sa2=$_POST['sa2'];
	$sa3=$_POST['sa3'];
	$sa4=$_POST['sa4'];
	$cont1=$_POST['cont1'];
	$cont2=$_POST['cont2'];
	$cont3=$_POST['cont3'];
	$cont4=$_POST['cont4'];
	$eaa1=$_POST['eaa1'];
	$eaa2=$_POST['eaa2'];
	$eaa3=$_POST['eaa3'];
	$eaa4=$_POST['eaa4'];
	$strength1=$_POST['strength1'];
	$strength2=$_POST['strength2'];
	$strength3=$_POST['strength3'];
	$strength4=$_POST['strength4'];
//	
//header("Content-type: application/vnd.ms-word");
//header("Content-Disposition: attachment;Filename=document_name.doc");
?>

	<table>
	<tr><td id="td1"><?echo $name;?></td><td id="td2"><? echo $uid;?></td></tr>
	<tr><td id="td1"><?echo $dept;?></td><td id="td2"><?echo $degree;?></td></tr>
	<tr><td id="td1"><?echo $campus1;?></td><td id="td2"><?echo $gender;?></td></tr>
	<tr><td id="td1"><?echo $campus2;?></td><td id="td2">DOB : <?echo $dob;?></td></tr>
	<tr><td id="td1">e-Mail : <?echo $email;?></td><td id="td2">Cell.No : <?echo $cell;?></td></tr>
	</table>
<hr>
<p style="{font-size:10pt;}"><b>Career Objective:</b></p>
<p style="{font-size:8pt;width:610;}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?echo $cobj;?></p>

	<table>
	<tr style="{border:5px;border-color:red;background-color:lightgray;font-size:10pt;}"><th>Examination</th><th style="{width:300;font-size:10pt;}">University/Board</th><th>Year of Pass</th><th style="{width:100;}">CGPA/%</th></tr>
	<tr style="{font-size:8pt;}"><td><?echo $deg1;?></td><td><?echo $univ1;?></td><td><?echo $ypass1;?></td><td><?echo $percent1;?></td></tr>
	<tr style="{font-size:8pt;}"><td><?echo $deg2;?></td><td><?echo $univ2;?></td><td><?echo $ypass2;?></td><td><?echo $percent2;?></td></tr>
	<tr style="{font-size:8pt;}"><td><?echo $deg3;?></td><td><?echo $univ3;?></td><td><?echo $ypass3;?></td><td><?echo $percent3;?></td></tr>
	<tr style="{font-size:8pt;}"><td><?echo $deg4;?></td><td><?echo $univ4;?></td><td><?echo $ypass4;?></td><td><?echo $percent4;?></td></tr>
	<tr style="{font-size:8pt;}"><td><?echo $deg5;?></td><td><?echo $univ5;?></td><td><?echo $ypass5;?></td><td><?echo $percent5;?></td></tr>
	<tr style="{font-size:8pt;}"><td><?echo $deg6;?></td><td><?echo $univ6;?></td><td><?echo $ypass6;?></td><td><?echo $percent6;?></td></tr>
</table>

<p id="ugp" style="{font-size:10pt;}"><b>Undergraduate Projects:</b></p>
<table style="{font-size:8pt;}">
	<tr style="{background-color:lightgray;}"><th style="{width:150;}">Project Title</th><th style="{align:center;width:450;a}">Project Description</th></tr>
	<?
	if(($p1title!=null)||($p1des!=null))
	{
		echo "<tr><td>$p1title</td><td>$p1des</td></tr>";
	}
	if(($p2title!=null)||($p2des!=null))
	{
		echo "<tr><td>$p2title</td><td>$p2des</td></tr>";
	}
	if(($p3title!=null)&&($p3des!=null))
	{
		echo "<tr><td>$p3title</td><td>$p3des</td></tr>";
	}
	if(($p4title!=null)&&($p4des!=null))
	{
		echo "<tr><td>$p4title</td><td>$p4des</td></tr>";
	}
	if(($p5title!=null)&&($p5des!=null))
	{
		echo "<tr><td>$p5title</td><td>$p5des</td></tr>";
	}
	?>
</table>
<p style="{font-size:10pt;}"><b>Skills and Interests:</b></p>
<table>
<?
	if(($ts1!=null)||($ts2!=null)||($ts3!=null)||($ts4!=null))
	{
		echo "<tr style=\"{font-size:8pt;}\"><td>Technical Skills :</td><td>$ts1, $ts2, $ts3,$ts4</td></tr>";
	}
	if(($ps1!=null)||($ps2!=null)||($ps3!=null)||($ps4!=null))
	{
		echo "<tr style=\"{font-size:8pt;}\"><td>Programming Skills :</td><td>$ps1, $ps2, $ps3,$ps4</td></tr>";
	}
	if(($cs1!=null)||($cs2!=null))
	{
		echo "<tr style=\"{font-size:8pt;}\"><td>Communicational Skills :</td><td>$cs1, $cs2, $cs3,$cs4</td></tr>";
	}
	if(($os1!=null)||($os2!=null)||($os3!=null)||($os4!=null))
	{
		echo "<tr style=\"{font-size:8pt;}\"><td>Operating Systems :</td><td>$os1, $os2, $os3,$os4</td></tr>";
	}			
?>
</table>
<p style="{font-size:10pt;}"><b>Achievements and Participations:</b></p>
<table>
<?
	if(($ts1!=null)||($ts2!=null)||($ts3!=null)||($ts4!=null))
	{
		echo "<tr style=\"{font-size:8pt;}\"><td>Technical Skills :</td><td>$ts1, $ts2, $ts3,$ts4</td></tr>";
	}
?>
</table>
<?














//}
//else
//{
//echo "Hi";
//}


?></fieldset>
