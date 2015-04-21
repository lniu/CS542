<?php
//
session_start();
include_once 'conn.php';
//if($_POST['submit']){
	
	$username=$_POST['username'];
	$pwd=$_POST['pwd1'];
	//$userpass=md5($userpass);

		if ($username!="" && $pwd!="")
		{
		$sql="select * from yonghuzhuce where zhanghao='$username' and mima='$pwd' and issh='Yes'";
		
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
			if($rowscount>0)
			{
					$_SESSION['username']=$username;
					$_SESSION['cx']="Member";
					$_SESSION['xm']=mysql_result($query,$i,xingming);
					$_SESSION['zp']=mysql_result($query,$i,zhaopian);
					//$row = mysql_fetch_row($query)
					//echo $_SESSION['cx'];
					echo "<script language='javascript'>alert('Success£¡');location='index.php';</script>";
			}
			else
			{
					echo "<script language='javascript'>alert('Wrong User or Pwd');history.back();</script>";
			}
		}
		else
		{
				echo "<script language='javascript'>alert('Need Whole Info£¡');history.back();</script>";
		}
	
	
//}
?>