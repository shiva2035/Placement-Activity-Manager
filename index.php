<?php
	session_start();
	require_once('head.php');
	//require_once('test.php');
	if($_GET['page']==""){header("location:index.php?page=home");}
	else $page=$_GET['page'];
	if(!isset($page))echo $page;
	if($page==null||$page==''){
	}
?>
<style>
#home
{
	border:4px;
	border-style:groove;
	border-color:skyblue;
	width:200;
	height:200;
	color:black;
}
#home1
{
	border:4px;
	//float:left;
	border-style:groove;
	border-color:skyblue;
	width:300;
	height:200;
	color:black;
}
#iframe
{
	background-color:white;
	width:100%;
	-webkit-min-height:800;
	height:460;
	min-height:540;
	border-left-style:groove;
	border-right-style:solid;
	border:0.2px;
}
</style>
<?
	$page= "$page.php";
	echo "<div style={min-height:600;}><iframe src=\"$page\" id=\"iframe\"></iframe></div>";
?>
<style>
#bottom2
{
	margin-bottom:-150;
	text-align:center;
	vertical-align:middle;
	text-align:center;
	color:white;
	height:50;
	margin-left:-100;
	margin-right:-100;
	font-size:12pt;
	background-color:#69BCE6;	
}
</style>

<div id="bottom2" valign=middle>STUDENTS[2008]@Rajiv Gandhi University of Knowledge Technologies-BASAR<br/>Dept.of Computer Science and Engineering-2k8, (Best View in Firefox 3.4 or Above)</div>
