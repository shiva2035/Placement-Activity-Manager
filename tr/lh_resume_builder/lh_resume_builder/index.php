<?
$personal = array();
$social_media = array();
$work_history = array();
$education = array();
$skills = array();
$awards = array();
$language = array();
$settings = array();

require_once('config.php');

if (isset($settings['style']) && $settings['style'] == "dark")
{
	$stylesheet = 'dark.css';
}
else if (isset($settings['style']) && $settings['style'] == "light")
{
	$stylesheet = 'light.css';
}
else if (isset($settings['style']) && $settings['style'] == "printable")
{
	$stylesheet = 'printable.css';
}
else
{
	$stylesheet = 'dark.css';
}

if (isset($settings['lang']) && file_exists("lang/" . $settings['lang']) . ".php")
{
	$langfile = "lang/" . $settings['lang'] . ".php";
}
else
{
	$langfile = "lang/en.php";
}
require_once($langfile);
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $lang['title']; ?></title>
	<link rel="stylesheet" type="text/css" href="css/<?php echo $stylesheet; ?>" />
	<link rel="stylesheet" href="css/printable.css" type="text/css" media="print" />
</head>
<body>
	<div id="content">
		<div id="header">
			<span class="header_name"><?php echo $lang['header']; ?></span><br />
			<span id="resume_subtitle" class="subtitle">
				<?php
				if (isset($settings['printable']) && $settings['printable'] == true)
				{
					echo '<a href="javascript:window.print()">' . $lang['print'] . '</a>';
				}
				else
				{
					if (isset($personal['phone_number']))
					{
						echo $personal['phone_number'];
					}
					if (isset($personal['phone_number']) && isset($personal['email_address']))
					{
						echo ' | ';
					}
					if (isset($personal['email_address']))
					{
						echo '<a href="mailto:'.$personal['email_address'].'">'.$personal['email_address'].'</a>';
					}
				}
				?>
			</span>
			<span id="print_subtitle">
				<?php
				if (isset($personal['phone_number']))
				{
					echo $personal['phone_number'];
				}
				if (isset($personal['phone_number']) && isset($personal['email_address']))
				{
					echo ' | ';
				}
				if (isset($personal['email_address']))
				{
					echo '<a href="mailto:'.$personal['email_address'].'">'.$personal['email_address'].'</a>';
				}
				?>
			</span>
		</div>
		<div id="left_col">
			<?php for($i=0; $i<count($work_history); $i++) { ?>
			<div class="item">
				<span class="large_title"><?php echo $work_history[$i][0]; ?></span><br />
				<span class="title"><?php echo $work_history[$i][1]; ?></span><br />
				<span class="subtitle"><?php echo $work_history[$i][2]; ?></span><br />
				<p><?php echo $work_history[$i][3]; ?></p>
			</div>
			<?php } ?>
			<div class="item">
				<span class="large_title"><?php echo $lang['contact']; ?></span><br />
				<?php echo $lang['contact_desc']; ?><br />
				
				<?php if (isset($personal['phone_number'])) { ?>
				<p><span class="title"><?php echo $lang['phone']; ?></span><br />
				<span class="subtitle"><?php echo($personal['phone_number']); ?></span></p>
				<?php } ?>
				
				<?php if (isset($personal['email_address'])) { ?>
				<p><span class="title"><?php echo $lang['email']; ?></span><br />
				<span class="subtitle"><a href="mailto:<?php echo($personal['email_address']); ?>"><?php echo($personal['email_address']); ?></a></span></p>
				<?php } ?>
				
				<?php if (isset($settings['social_media']) && $settings['social_media'] == true) { ?>
				<?php for($i=0; $i<count($social_media); $i++) { ?>
				<p><span class="title"><?php echo($social_media[$i][0]); ?><br />
				<span class="subtitle"><a href="<?php echo($social_media[$i][1]); ?>"><?php echo(substr($social_media[$i][1], strpos($social_media[$i][1], "://")+3)); ?></a></span></p>
				<?php } ?>
				<?php } ?>
			</div>
		</div>
		<div id="right_col">
			<?php if (isset($settings['education']) && $settings['education'] == true) { ?>
			<div class="item">
				<span class="large_title"><?php echo $lang['education']; ?></span><br />
				<?php for($i=0; $i<count($education); $i++) { ?>
				<p><span class="title"><?php echo $education[$i][0] ?></span><br />
				<?php echo $education[$i][1]; ?>
				<?php } ?>
			</div>
			<?php } ?>
			<?php if (isset($settings['skills']) && $settings['skills'] == true) { ?>
			<div class="item">
				<span class="large_title"><?php echo $lang['skills']; ?></span><br />
				<?php for($i=0; $i<count($skills); $i++) { ?>
				<p><span class="title"><?php echo $skills[$i][0] ?></span><br />
				<?php echo $skills[$i][1]; ?></p>
				<?php } ?>
			</div>
			<?php } ?>
			<?php if (isset($settings['awards']) && $settings['awards'] == true) { ?>
			<div class="item">
				<span class="large_title"><?php echo $lang['awards']; ?></span><br />
				<?php for($i=0; $i<count($awards); $i++) { ?>
				<p><span class="title"><?php echo $awards[$i][0]; ?></span><br />
				<?php echo $awards[$i][1]; ?></p>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
		<div id="footer">
			<p>&nbsp;</p>
		</div>
	</div>
</body>
</html>
