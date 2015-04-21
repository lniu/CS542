<?php
//login information
session_start();
include_once 'conn.php';
//if($_POST['submit']){
	$login=$_POST["login"];
	$username=$_POST['username'];
	$pwd=$_POST['pwd'];
	$cx=$_POST['cx'];
	$yzm=$_POST['yzm'];
	//$userpass=md5($userpass);
	if($login=="1")
	{
		if($yzm==$_SESSION['regsession_code'])
		{
		
		}
		else
		{
			echo "<script language='javascript'>alert('Verification Code£¡');location.href='login.html';</script>";
		}
		if ($username!="" && $pwd!="")
		{
		if($cx=="Admin")
		{
			$sql="select * from allusers where username='$username' and pwd='$pwd'";
		}
		if($cx=="Member")
		{
			$sql="select * from putongyonghu where yonghuming='$username' and mima='$pwd' ";
		}
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
			if($rowscount>0)
			{
					$_SESSION['username']=$username;
					if($cx=="Admin")
		{
					$_SESSION['cx']=mysql_result($query,0,"cx");
					}
					else
					{
					$_SESSION['cx']=$cx;
					}
					//$row = mysql_fetch_row($query)
					//echo $_SESSION['cx'];
					echo "<script language='javascript'>alert('Success£¡');location='main.php';</script>";
			}
			else
			{
					echo "<script language='javascript'>alert('Wrong Pwd£¡');history.back();</script>";
			}
		}
		else
		{
				echo "<script language='javascript'>alert('Wrong£¡');history.back();</script>";
		}
	}
	
//}
?>