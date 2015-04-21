<?php
session_start();
if($_SESSION["username"]=="")
{
	echo "<script>javascript:alert('Login First Please！');location.href='index.php';</script>";
	exit;
}
include_once 'conn.php';
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$zhanghao=$_POST["zhanghao"];$zhaopian=$_POST["zhaopian"];$xingming=$_POST["xingming"];$liuyan=$_POST["liuyan"];
	$sql="insert into liuyanban(zhanghao,zhaopian,xingming,liuyan) values('$zhanghao','$zhaopian','$xingming','$liuyan') ";
	mysql_query($sql);
	echo "<script>javascript:alert('Success!');location.href='lyblist.php';</script>";
}
?>
<html>
<head>
<title>Meal Service</title><LINK href="qtimages/style.css" type=text/css rel=stylesheet>
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
	function check()
{
	if(document.form1.zhanghao.value==""){alert("Account Number");document.form1.zhanghao.focus();return false;}if(document.form1.xingming.value==""){alert("Name");document.form1.xingming.focus();return false;}if(document.form1.liuyan.value==""){alert("Content");document.form1.liuyan.focus();return false;}
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
                          <td width="13%" height="20" align="right" valign="bottom"><span class="STYLE2"><strong>Message Board</strong></span></td>
                          <td width="74%">&nbsp;</td>
                          <td width="13%"><strong><a href="lyblist.php"><span class="STYLE2"></span></a></strong></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="793" height="188" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="16" background="qtimages/1_02_02_01_02_01.jpg">&nbsp;</td>
                          <td width="755" height="792" valign="top"><table width="96%" border="1" align="left" cellpadding="3" cellspacing="1" bordercolor="#B8D8E8" style="border-collapse:collapse">
                            <form name="form1" method="post" action="">
                              <tr>
                                <td>Account：</td>
                                <td><input name='zhanghao' type='text' id='zhanghao' value='<?php echo $_SESSION["username"];?>' />
                                  &nbsp;*</td>
                              </tr>
                              
                              <tr>
                                <td>Name：</td>
                                <td><input name='xingming' type='text' id='xingming' value='<?php echo $_SESSION["xm"];?>' />
                                  &nbsp;*</td>
                              </tr>
                              <tr>
                                <td>Comment：</td>
                                <td><textarea name='liuyan' cols='50' rows='8' id='liuyan'></textarea>
                                  &nbsp;*</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><input type="hidden" name="addnew" value="1" />
                                    <input type="submit" name="Submit" value="ADD" onClick="return check();" />
                                    <input type="reset" name="Submit2" value="RST" /></td>
                              </tr>
                            </form>
                          </table>
                          <p align="center">&nbsp;</p>
                            <p align="center">&nbsp;</p></td><td width="22" background="qtimages/1_02_02_01_02_03.jpg">&nbsp;</td>
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