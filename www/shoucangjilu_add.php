<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$IDhao=$_POST["IDhao"];$leibie=$_POST["leibie"];$mingcheng=$_POST["mingcheng"];$shoucangren=$_POST["shoucangren"];
	//ischongfu("select id from shoucangjilu where shoucangren='".$shoucangren."'");
	$sql="insert into shoucangjilu(IDhao,leibie,mingcheng,shoucangren) values('$IDhao','$leibie','$mingcheng','$shoucangren') ";
	mysql_query($sql);
	echo "<script>javascript:alert('Success!');location.href='shoucangjilu_add.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>
<script language="javascript">
	
	
	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
</script>
<body>
<p>Inser Favorite： Date： <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.IDhao.value==""){alert("Insert ID");document.form1.IDhao.focus();return false;}if(document.form1.leibie.value==""){alert("Type");document.form1.leibie.focus();return false;}if(document.form1.shoucangren.value==""){alert("From");document.form1.shoucangren.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
 <?php
//islbdq $sql="select * from melieibaoduqubiaoiguo where id=".$_GET["id"];
//islbdq $query=mysql_query($sql);
//islbdq $rowscount=mysql_num_rows($query);
//islbdq if($rowscount>0)
//islbdq {
//islbdq 	lelelelelele
//islbdq }
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>ID：</td><td><input name='IDhao' type='text' id='IDhao' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><tr><td>Type：</td><td><input name='leibie' type='text' id='leibie' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><tr><td>Name：</td><td><input name='mingcheng' type='text' id='mingcheng' value='' size='50' style='border:solid 1px #000000; color:#666666'  /></td></tr><tr><td>From：</td><td><input name='shoucangren' type='text' id='shoucangren' value='<?php echo $_SESSION['username'];?>' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="Insert" onclick="return check();"  style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="Reset" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<?php
	function ischongfu($sql)
	{
		$query=mysql_query($sql);
 		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			echo "<script>javascript:alert('');history.back();</script>";
			exit;
		}
		
	}
?>
</body>
</html>

