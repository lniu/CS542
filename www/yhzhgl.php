<?php
include_once 'conn.php';
session_start();
if($_SESSION['cx']!="Super Admin")
{
	echo "<script>javascript:alert('Sorry, No Super Admin');history.back();</script>";
	exit;
}




	 
	$addnew=$_POST["addnew"];
	if($addnew=="1")
	{
	$username=$_POST['username'];
	$pwd=$_POST['pwd1'];
	$cx=$_POST['cx'];
	
	$sql="select * from allusers where username='$username' and pwd='$pwd'";
		
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
			{
					
					echo "<script language='javascript'>alert('Exsited User£¡');history.back();</script>";
			}
			else
			{
				//date_default_timezone_set("PRC");
				
				$ndate =date("Y-m-d H:i:s");

					$sql="insert into allusers(username,pwd,cx) values('$username','$pwd','$cx')";
					mysql_query($sql); 
					echo "<script language='javascript'>alert('Success£¡');location.href='yhzhgl.php';</script>";
			}
	 }
	 
	 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>
<p>Insert New Admin£º</p>
<script language="javascript">
	function check()
	{
		if(document.form1.username.value=="")
		{
			alert("Admin Name");
			document.form1.username.focus();
			return false;
		}
		if(document.form1.pwd1.value=="")
		{
			alert("Password");
			document.form1.pwd1.focus();
			return false;
		}
		if(document.form1.pwd2.value=="")
		{
			alert("Confirm Password");
			document.form1.pwd2.focus();
			return false;
		}
		if(document.form1.pwd1.value!=document.form1.pwd2.value)
		{
			alert("Retry");
			document.form1.pwd1.value="";
			document.form1.pwd2.value="";
			document.form1.pwd1.focus();
			return false;
		}
	}
</script>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    <tr>
      <td>Admin Name£º</td>
      <td><input name="username" type="text" id="username" />
      *
      <input name="addnew" type="hidden" id="addnew" value="1" /></td>
    </tr>
    <tr>
      <td>Password£º</td>
      <td><input name="pwd1" type="password" id="pwd1" />
      *</td>
    </tr>
    <tr>
      <td>Confrim Password£º</td>
      <td><input name="pwd2" type="password" id="pwd2" />
      *</td>
    </tr>
    
    <tr>
      <td>Authority:</td>
      <td><input name="cx" type="radio" value="Normal Admin" checked="checked" />
      Normal Admin
        <input type="radio" name="cx" value="Super Admin" />
      Super Admin</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit" onClick="return check();" class="hsgbutton" />
      <input type="reset" name="Submit2" value="Reset" class="hsgbutton" /></td>
    </tr>
  </table>
</form>
<p>Existed Admin£º</p>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td bgcolor="A4B6D7">No</td>
    <td bgcolor="A4B6D7">Name</td>
    <td bgcolor="A4B6D7">Password</td>
    <td bgcolor="A4B6D7">Authority</td>
    <td bgcolor="A4B6D7">Date</td>
    <td bgcolor="A4B6D7">Operation</td>
  </tr>
  <?php
	  $sql="select * from allusers order by id desc";
	  $query=mysql_query($sql);
	  $rowscount=mysql_num_rows($query);
	 for($i=0;$i<$rowscount;$i++)
	 {
  ?>
  <tr>
    <td><?php
		echo $i+1;
	?></td>
    <td><?php
		echo mysql_result($query,$i,"username");
	?></td>
    <td><?php
		echo mysql_result($query,$i,"pwd");
	?></td>
    <td><?php
		echo mysql_result($query,$i,"cx");
	?></td>
    <td><?php
		echo mysql_result($query,$i,"addtime");
	?></td>
    <td><a href="del.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>&tablename=allusers" onClick="return confirm('Delete£¿')">Delete</a> </td>
  </tr>
  <?php
  	}
  ?>
</table>
<p>&nbsp; </p>
</body>
</html>
