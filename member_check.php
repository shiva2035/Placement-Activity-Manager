<?php
	include("conn.php");
	switch($type)
	{
		case "student":
				$q1="select  *  from studetails where uname = \"$uname\"; ";
				$q2=mysql_query($q1);
				while($row=mysql_fetch_array($q2))
				{
					if($uname !=$row["uname"] && $pass !=$row["pass1"])
					{
						header("Location:unauth.php");
						echo "You don't have previleges to view this page";				
					}
					if($uname==NULL || $pass==NULL || ($uname==NULL && $pass==NULL))
					{
						header("Location:login.php");
						echo "Enter correct details";
					}
					if($uname=='' || $pass =='' || ($uname=='' && $pass==''))
					{	
						header("Location:login.php");
						echo "Enter correct details";
					}
					else if(($uname ==$row["uname"] && $pass ==$row["pass1"]) && $type==$row["type"])
					{
							$_SESSION['user']="$uname";
							$_SESSION['pass']="$pass";
							$_SESSION['utype']=$row['type'];
							echo "<b>Wel Come Mr.".$_SESSION['user'];	
							header("location:home.php");
					}			
				}
				break;
		case "admin":
				$q1="select  *  from admin_users where uname = \"$uname\"; ";
				$q2=mysql_query($q1);
				while($row=mysql_fetch_array($q2))
				{
					if($uname !=$row["uname"] && $pass !=$row["pass1"])
					{
						header("Location:unauth.php");
						echo "You don't have previleges to view this page";				
					}
					if($uname==NULL || $pass==NULL || ($uname==NULL && $pass==NULL))
					{
						header("Location:login.php");
						echo "Enter correct details";
					}
					if($uname=='' || $pass =='' || ($uname=='' && $pass==''))
					{	
						header("Location:login.php");
						echo "Enter correct details";
					}
					else if(($uname ==$row["uname"] && $pass ==$row["pass1"]) && $type==$row["type"])
					{
							$_SESSION['user']="$uname";
							$_SESSION['pass']="$pass";
							$_SESSION['utype']=$row['type'];
							echo "<b>Wel Come Mr.".$_SESSION['user'];	
							header("location:home.php");
					}			
				}		
				break;
		case "company":
				$q1="select  *  from company where uname = \"$uname\"; ";
				$q2=mysql_query($q1);
				while($row=mysql_fetch_array($q2))
				{
					if($uname !=$row["uname"] && $pass !=$row["pass1"])
					{
						header("Location:unauth.php");
						echo "You don't have previleges to view this page";				
					}
					if($uname==NULL || $pass==NULL || ($uname==NULL && $pass==NULL))
					{
						header("Location:login.php");
						echo "Enter correct details";
					}
					if($uname=='' || $pass =='' || ($uname=='' && $pass==''))
					{	
						header("Location:login.php");
						echo "Enter correct details";
					}
					else if(($uname ==$row["uname"] && $pass ==$row["pass1"]) && $type==$row["type"])
					{
							$_SESSION['user']="$uname";
							$_SESSION['pass']="$pass";
							$_SESSION['utype']=$row['type'];
							echo "<b>Wel Come Mr.".$_SESSION['user'];	
							header('Location: '.$_SERVER['PHP_SELF']);
					}			
				}		
				break;
	}
?>
