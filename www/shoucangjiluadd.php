<?php
session_start();
 if($_SESSION["username"]=="")
 {
	echo "<script>javascript:alert('Login First！');location.href='index.php';</script>";
	exit;
 }
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$IDhao=$_POST["IDhao"];$leibie=$_POST["leibie"];$mingcheng=$_POST["mingcheng"];$shoucangren=$_POST["shoucangren"];
	//ischongfu("select id from shoucangjilu where shoucangren='".$shoucangren."'");
	$sql="insert into shoucangjilu(IDhao,leibie,mingcheng,shoucangren) values('$IDhao','$leibie','$mingcheng','$shoucangren') ";
	mysql_query($sql);
	echo "<script>javascript:alert('Success');location.href='shoucangjiluadd.php';</script>";
}
?>
<html>
<head>
<title>Record</title><script language="javascript" src="qtimages/qkjs.js"></script><script language="javascript" src="js/Calendar.js"></script>
<LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
.STYLE2 {color: #1A7F55}
.STYLE7 {color: #993300; font-weight: bold; }
-->
</style>
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
<script language="javascript">
	function check()
{
	if(document.form1.IDhao.value==""){alert("ID Please");document.form1.IDhao.focus();return false;}if(document.form1.leibie.value==""){alert("Type");document.form1.leibie.focus();return false;}if(document.form1.shoucangren.value==""){alert("From");document.form1.shoucangren.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="1114" height="1403" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
	<tr>
		<td><?php include_once 'qttop.php';?></td>
	</tr>
	<tr>
		<td><table id="__01" width="1114" height="848" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top">

<?php include_once 'qtleft.php';?></td>
            <td valign="top"><table id="__01" width="793" height="848" border="0" cellpadding="0" cellspacing="0">
              
              <tr>
                <td colspan="2" valign="top"><table id="__01" width="793" height="245" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="793" height="46" background="qtimages/1_02_02_01_01.jpg"><table width="100%" height="20" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="13%" height="20" align="right" valign="bottom"><span class="STYLE2"><strong>Record</strong></span></td>
                          <td width="87%">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="793" height="188" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="16" background="qtimages/1_02_02_01_02_01.jpg">&nbsp;</td>
                          <td width="755" height="792" valign="top">
						  
						  
						  
						  
						  

<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>ID：</td><td><input name='IDhao' type='text' id='IDhao' value='<?php echo $_GET["id"]?>' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><tr><td>Type：</td><td><input name='leibie' type='text' id='leibie' value='<?php echo $_GET["lb"]?>' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><tr><td>Name：</td><td><input name='mingcheng' type='text' id='mingcheng' value='<?php echo $_GET["mc"]?>' size='50' style='border:solid 1px #000000; color:#666666'  /></td></tr><tr><td>From：</td><td><input name='shoucangren' type='text' id='shoucangren' value='<?php echo $_SESSION['username'];?>' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="Confirm" onClick="return check();"  style='border:solid 1px #000000; color:#666666' />
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
			echo "<script>javascript:alert('!');history.back();</script>";
			exit;
		}
		
	}
?>
					
					
					
					

							</td><td width="22" background="qtimages/1_02_02_01_02_03.jpg">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="qtimages/1_02_02_01_03.jpg" width="793" height="11" alt=""></td>
                  </tr>
                </table></td>
              </tr>
              
            </table></td>
          </tr>
        </table></td>
	</tr>
	<tr>
		<td><?php include_once 'qtdown.php';?></td>
	</tr>
</table>
</body>
</html>
