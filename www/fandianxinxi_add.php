<?php
session_start();
include_once 'conn.php';

$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$fandianmingcheng=$_POST["fandianmingcheng"];$dizhi=$_POST["dizhi"];$menmianzhaopian=$_POST["menmianzhaopian"];$canyinleixing=$_POST["canyinleixing"];$tesecaipin=$_POST["tesecaipin"];$lianxidianhua=$_POST["lianxidianhua"];$jianjie=$_POST["jianjie"];
	//ischongfu("select id from fandianxinxi where fandianmingcheng='".$fandianmingcheng."'");
	$sql="insert into fandianxinxi(fandianmingcheng,dizhi,menmianzhaopian,canyinleixing,tesecaipin,lianxidianhua,jianjie) values('$fandianmingcheng','$dizhi','$menmianzhaopian','$canyinleixing','$tesecaipin','$lianxidianhua','$jianjie') ";
	mysql_query($sql);
	echo "<script>javascript:alert('Success!');location.href='fandianxinxi_add.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Restuarant Info</title>
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
<script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
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
<p>Insert Restuarant£º Date£º <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.fandianmingcheng.value==""){alert("Please Insert Restuarant Name");document.form1.fandianmingcheng.focus();return false;}if(document.form1.dizhi.value==""){alert("Address");document.form1.dizhi.focus();return false;}if(document.form1.lianxidianhua.value==""){alert("Phone");document.form1.lianxidianhua.focus();return false;}
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
	<tr><td>Restuarant Name£º</td><td><input name='fandianmingcheng' type='text' id='fandianmingcheng' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;*</td></tr><tr><td>Area£º</td><td><input name='dizhi' type='text' id='dizhi' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;*</td></tr><tr><td>Photo£º</td><td><input name='menmianzhaopian' type='text' id='menmianzhaopian' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=menmianzhaopian',460,180)"></a></td></tr><tr><td>Style£º</td><td><select name='canyinleixing' id='canyinleixing' style='border:solid 1px #000000; color:#666666'>
	  <option value="Chinese">Chinese</option>
	  <option value="Thai">Thai</option>
	  <option value="MidEast">MidEast</option>
	  <option value="American">American</option>
	  <option value="Mexico">Mexico</option>
	  <option value="Vietnamese">Vietnamese</option>
	</select></td></tr><tr><td>Dish£º</td><td><input name='tesecaipin' type='text' id='tesecaipin' value='' size='50' style='border:solid 1px #000000; color:#666666'  /></td></tr><tr><td>Phone£º</td><td><input name='lianxidianhua' type='text' id='lianxidianhua' value='' style='border:solid 1px #000000; color:#666666' />&nbsp; *</td></tr><tr><td>Comment£º</td><td><textarea name="jianjie" style="width:670px;height:200px;visibility:hidden;"></textarea></td></tr>

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
			echo "<script>javascript:alert('Wrong!');history.back();</script>";
			exit;
		}
		
	}
?>
</body>
</html>

