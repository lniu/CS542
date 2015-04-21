<?php
//login information

include_once 'conn.php';
//if($_POST['submit']){
	$id=$_GET["id"];
	$yuan=$_GET["yuan"];
	$tablename=$_GET["tablename"];
	if($yuan=="Yes")
	{
	$sql="update $tablename set issh='No' where id=$id";
	}
	else
	{
	$sql="update $tablename set issh='Yes' where id=$id";
	}
	 	mysql_query($sql);
	

		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('Success£¡');location.href='$comewhere';</script>";
	
//}
?>