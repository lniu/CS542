<?php 
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$zhanghao=$_POST["zhanghao"];$mima=$_POST["mima"];$xingming=$_POST["xingming"];$xingbie=$_POST["xingbie"];$diqu=$_POST["diqu"];$Email=$_POST["Email"];$zhaopian=$_POST["zhaopian"];
	$sql="insert into yonghuzhuce(zhanghao,mima,xingming,xingbie,diqu,Email,zhaopian) values('$zhanghao','$mima','$xingming','$xingbie','$diqu','$Email','$zhaopian') ";
	mysql_query($sql);
	echo "<script>javascript:alert('Success!');location.href='yonghuzhuce_add.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Member Register</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>
<p>Insert Member�� Date�� <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.zhanghao.value==""){alert("Account");document.form1.zhanghao.focus();return false;}if(document.form1.mima.value==""){alert("Password");document.form1.mima.focus();return false;}if(document.form1.xingming.value==""){alert("Name");document.form1.xingming.focus();return false;}if(document.form1.Email.value==""){alert("Email");document.form1.Email.focus();return false;}if(document.form1.zhaopian.value==""){alert("Photo");document.form1.zhaopian.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>Account��</td><td><input name='zhanghao' type='text' id='zhanghao' value='' />&nbsp;*</td></tr><tr><td>Password��</td><td><input name='mima' type='text' id='mima' value='' />&nbsp;*</td></tr><tr><td>Name��</td><td><input name='xingming' type='text' id='xingming' value='' />&nbsp;*</td></tr><tr><td>Sex��</td><td><select name='xingbie' id='xingbie'><option value="M">M</option><option value="F">F</option></select></td></tr><tr><td>Area��</td><td><select name='diqu' id='diqu'></select></td></tr><tr><td>Email��</td><td><input name='Email' type='text' id='Email' value='' />&nbsp;*</td></tr><tr><td>Photo��</td><td><input name='zhaopian' type='text' id='zhaopian' value='' size='50'  />&nbsp;*</td></tr>

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="Insert" onclick="return check();" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>

