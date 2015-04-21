<?php 
session_start();
include_once 'conn.php';
$id=$_GET["id"];
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{

	$caipinbianhao=$_POST["caipinbianhao"];$caipinmingcheng=$_POST["caipinmingcheng"];$leibie=$_POST["leibie"];$jiage=$_POST["jiage"];$zhaopian=$_POST["zhaopian"];$beizhu=$_POST["beizhu"];$fandianmingcheng=$_POST["fandianmingcheng"];
	$sql="update caipinxinxi set caipinbianhao='$caipinbianhao',caipinmingcheng='$caipinmingcheng',leibie='$leibie',jiage='$jiage',zhaopian='$zhaopian',beizhu='$beizhu',fandianmingcheng='$fandianmingcheng' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('Success!');location.href='caipinxinxi_list.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Modified Dish Information</title><link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/Calendar.js"></script>
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
<p>Modified Dish Information： Date： <?php echo $ndate; ?></p>
<?php
$sql="select * from caipinxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 

      <tr><td>Dish ID：</td><td><input name='caipinbianhao' type='text' id='caipinbianhao' value='<?php echo mysql_result($query,$i,caipinbianhao);?>' /></td></tr><tr><td>Dish Name：</td><td><input name='caipinmingcheng' type='text' id='caipinmingcheng' size='50' value='<?php echo mysql_result($query,$i,caipinmingcheng);?>' /></td></tr><tr><td>Type：</td><td><select name='leibie' id='leibie' style='border:solid 1px #000000; color:#666666'>
        
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
      </select></td></tr><script language="javascript">document.form1.leibie.value='<?php echo mysql_result($query,$i,leibie);?>';</script><tr><td>Price：</td><td><input name='jiage' type='text' id='jiage' value='<?php echo mysql_result($query,$i,jiage);?>' /></td></tr><tr><td>Photo：</td><td><input name='zhaopian' type='text' id='zhaopian' size='50'  value='<?php echo mysql_result($query,$i,zhaopian);?>' /> &nbsp;<a href="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)"></a></td></tr><tr><td>Comment：</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu'><?php echo mysql_result($query,$i,beizhu);?></textarea></td></tr><tr><td>Restaurant Name：</td><td><select name='fandianmingcheng' id='fandianmingcheng'><?php getoption("fandianxinxi","fandianmingcheng")?></select></select></td></tr><script language="javascript">document.form1.fandianmingcheng.value='<?php echo mysql_result($query,$i,fandianmingcheng);?>';</script>
   
   
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="Search" style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="Reset" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

