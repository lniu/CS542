<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$caipinbianhao=$_POST["caipinbianhao"];$caipinmingcheng=$_POST["caipinmingcheng"];$leibie=$_POST["leibie"];$jiage=$_POST["jiage"];$zhaopian=$_POST["zhaopian"];$beizhu=$_POST["beizhu"];$fandianmingcheng=$_POST["fandianmingcheng"];
	ischongfu("select id from caipinxinxi where caipinbianhao='".$caipinbianhao."'");
	$sql="insert into caipinxinxi(caipinbianhao,caipinmingcheng,leibie,jiage,zhaopian,beizhu,fandianmingcheng) values('$caipinbianhao','$caipinmingcheng','$leibie','$jiage','$zhaopian','$beizhu','$fandianmingcheng') ";
	mysql_query($sql);
	echo "<script>javascript:alert('Success!');location.href='caipinxinxi_add.php';</script>";
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
<p>Insert Dish Information： Date： <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.caipinbianhao.value==""){alert("Please Insert Dish ID");document.form1.caipinbianhao.focus();return false;}if(document.form1.caipinmingcheng.value==""){alert("Please Insert Dish Name");document.form1.caipinmingcheng.focus();return false;}if((/^(\+|-)?(0|[1-9]\d*)(\.\d*[1-9])?$/.test(document.form1.jiage.value))){}else{alert("Price");document.form1.jiage.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>

<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>DISH ID：</td><td><input name='caipinbianhao' type='text' id='caipinbianhao' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><tr><td>Dish Name：</td><td><input name='caipinmingcheng' type='text' id='caipinmingcheng' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;*</td></tr><tr><td>Type：</td><td><select name='leibie' id='leibie' style='border:solid 1px #000000; color:#666666'>
    <option value="Appitizers">Appitizers</option>
	<option value="Steaks">Steaks</option>
	<option value="Salad">Salad</option>
	<option value="Curry">Curry</option>
	<option value="Soups">Soups</option>
	<option value="Rice">Rice</option>
	<option value="Tofu">Tofu</option>
	<option value="Pork">Pork</option>
	<option value="Beef">Beef</option>
	<option value="Shrimp">Shrimp</option>
	<option value="Sandwiches">Sandwiches</option>
	<option value="Desserts">Desserts</option>
	<option value="Ribs">Ribs</option>
	<option value="Pasta">Pasta</option>
	<option value="Pizza">Pizza</option>
	<option value="Fish">Fish</option>
	<option value="Burgers">Burgers</option>
	<option value="Specialties">Specialties</option>
	<option value="Noodels&Fried Rice">Noodels&Fried Rice</option>
    </select></td></tr><tr><td>Price：</td><td><input name='jiage' type='text' id='jiage' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;</td></tr><tr><td>Photo：</td><td><input name='zhaopian' type='text' id='zhaopian' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)"></a></td></tr><tr><td>Comment：</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu' style='border:solid 1px #000000; color:#666666'></textarea></td></tr><tr><td>Resturant Name：</td><td><select name='fandianmingcheng' id='fandianmingcheng'><?php getoption("fandianxinxi","fandianmingcheng")?></select></td></tr>

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
			echo "<script>javascript:alert('Sorry, the Dish Name has already existed');history.back();</script>";
			exit;
		}
		
	}
?>
</body>
</html>

