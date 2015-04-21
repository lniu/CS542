<?php
session_start(); 
$id=$_GET["id"];
include_once 'conn.php';

$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$fandianmingcheng=$_POST["fandianmingcheng"];$dizhi=$_POST["dizhi"];$menmianzhaopian=$_POST["menmianzhaopian"];$canyinleixing=$_POST["canyinleixing"];$tesecaipin=$_POST["tesecaipin"];$lianxidianhua=$_POST["lianxidianhua"];$jianjie=$_POST["jianjie"];
	$sql="update fandianxinxi set fandianmingcheng='$fandianmingcheng',dizhi='$dizhi',menmianzhaopian='$menmianzhaopian',canyinleixing='$canyinleixing',tesecaipin='$tesecaipin',lianxidianhua='$lianxidianhua',jianjie='$jianjie' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('Success!');location.href='fandianxinxi_list.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Modified Restaurant Info</title>
<link rel="stylesheet" href="kindeditor-4.1.10/themes/default/default.css" />
	<link rel="stylesheet" href="kindeditor-4.1.10/plugins/code/prettify.css" />
	<script charset="utf-8" src="kindeditor-4.1.10/kindeditor.js"></script>
	<script charset="utf-8" src="kindeditor-4.1.10/lang/zh_CN.js"></script>
	<script charset="utf-8" src="kindeditor-4.1.10/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="jianjie"]', {
				cssPath : 'kindeditor-4.1.10/plugins/code/prettify.css',
				uploadJson : 'kindeditor-4.1.10/php/upload_json.php',
				fileManagerJson : 'kindeditor-4.1.10/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>

<link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/Calendar.js"></script>
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
<p>Modified Restaurant Info： Date： <?php echo $ndate; ?></p>
<?php
$sql="select * from fandianxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
$editor->Value=mysql_result($query,$i,jianjie);
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <tr><td>Restuarant Name：</td><td><input name='fandianmingcheng' type='text' id='fandianmingcheng' size='50' value='<?php echo mysql_result($query,$i,fandianmingcheng);?>' /></td></tr><tr><td>Area：</td><td><input name='dizhi' type='text' id='dizhi' size='50' value='<?php echo mysql_result($query,$i,dizhi);?>' /></td></tr><tr><td>Photo：</td><td><input name='menmianzhaopian' type='text' id='menmianzhaopian' size='50'  value='<?php echo mysql_result($query,$i,menmianzhaopian);?>' /> &nbsp;<a href="javaScript:OpenScript('upfile.php?Result=menmianzhaopian',460,180)"></a></td></tr><tr><td>Style：</td><td><select name='canyinleixing' id='canyinleixing' style='border:solid 1px #000000; color:#666666'>
	  <option value="Chinese">Chinese</option>
	  <option value="Thai">Thai</option>
	  <option value="MidEast">MidEast</option>
	  <option value="American">American</option>
	  <option value="Mexico">Mexico</option>
	  <option value="Vietnamese">Vietnamese</option>
	  <option value="Japanese&Seafood">Japanese&Seafood</option>
      </select></td></tr><script language="javascript">document.form1.canyinleixing.value='<?php echo mysql_result($query,$i,canyinleixing);?>';</script><tr><td>Dish：</td><td><input name='tesecaipin' type='text' id='tesecaipin' size='50' value='<?php echo mysql_result($query,$i,tesecaipin);?>' /></td></tr><tr><td>Phone：</td><td><input name='lianxidianhua' type='text' id='lianxidianhua' value='<?php echo mysql_result($query,$i,lianxidianhua);?>' /></td></tr><tr><td>Comment：</td><td><textarea name="jianjie" style="width:700px;height:200px;visibility:hidden;"><?php echo mysql_result($query,$i,jianjie);?></textarea></td></tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="Modified" style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="Reset" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
</body>
</html>

