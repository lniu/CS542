<?php 
include_once 'conn.php';
session_start();

$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$zhanghao=$_POST["zhanghao"];$mima=$_POST["mima"];$xingming=$_POST["xingming"];$xingbie=$_POST["xingbie"];$diqu=$_POST["diqu"];$Email=$_POST["Email"];$zhaopian=$_POST["zhaopian"];
	$sql="select id from yonghuzhuce where zhanghao='".$zhanghao."'";
	$query=mysql_query($sql);
	$rowscount=mysql_num_rows($query);
	if($rowscount>0)
	{
		echo "<script>javascript:alert('Account Already Exit');history.back();</script>";
	}
	else
	{
		$sql="insert into yonghuzhuce(zhanghao,mima,xingming,xingbie,diqu,Email,zhaopian) values('$zhanghao','$mima','$xingming','$xingbie','$diqu','$Email','$zhaopian') ";
		mysql_query($sql);
		
		echo "<script>javascript:alert('Success');location.href='index.php';</script>";
	}
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
	if(document.form1.zhanghao.value==""){alert("Account");document.form1.zhanghao.focus();return false;}
	if(document.form1.mima.value==""){alert("Password");document.form1.mima.focus();return false;}
	if(document.form1.mima.value!=document.form1.mima2.value){alert("Retry");document.form1.mima.focus();return false;}
	if(document.form1.xingming.value==""){alert("Name");document.form1.xingming.focus();return false;}
	if(document.form1.Email.value==""){alert("Email");document.form1.Email.focus();return false;}
	if(document.form1.zhaopian.value==""){alert("Photo");document.form1.zhaopian.focus();return false;}
	var strEmail = document.getElementById("Email").value;  
  var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
  var email_Flag = reg.test(strEmail);
  if(email_Flag){
  
  }
  else{
   alert("Wrong Format of email!");
   return false;
  }

}
	
</script>
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
                          <td width="18%" height="20" align="right" valign="bottom"><span class="STYLE2"><strong>Member Register</strong></span></td>
                          <td width="87%">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="793" height="188" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="16" background="qtimages/1_02_02_01_02_01.jpg">&nbsp;</td>
                          <td width="755" height="792" valign="top"><table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#ADCEEF" style="border-collapse:collapse">
                            <form name="form1" method="post" action="">
                              <tr>
                                <td>Account£º</td>
                                <td><input name='zhanghao' type='text' id='zhanghao' value='' />
                                  &nbsp;*</td>
                              </tr>
                              <tr>
                                <td>Password£º</td>
                                <td><input name='mima' type='password' id='mima' value='' />
                                  &nbsp;* Confirm£º
                                  <input name='mima2' type='password' id='mima2' value='' /></td>
                              </tr>
                              <tr>
                                <td>Name£º</td>
                                <td><input name='xingming' type='text' id='xingming' value='' />
                                  &nbsp;*</td>
                              </tr>
                              <tr>
                                <td>Sex£º</td>
                                <td><select name='xingbie' id='xingbie'>
                                    <option value="M">M</option>
                                    <option value="F">F</option>
                                </select></td>
                              </tr>
                              <tr>
                                <td>Area£º</td>
                                <td><select name='diqu' id='diqu'>
                                    <option value="WEST">WEST</option>
                                    <option value="EAST">EAST</option>
                                    <option value="NORTH">NORTH</option>
                                    <option value="SOUTH">SOUTH</option>
                                </select></td>
                              </tr>
                              <tr>
                                <td>Email£º</td>
                                <td><input name='Email' type='text' id='Email' value='' />
                                  &nbsp;*</td>
                              </tr>
                              <tr>
                                <td>Photo£º</td>
                                <td><input name='zhaopian' type='text' id='zhaopian' value='' size='50'  />
                                  &nbsp;* <a href="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)"></a></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><input type="hidden" name="addnew" value="1" />
                                    <input type="submit" name="Submit" value="Register" onClick="return check();" />
                                    <input type="reset" name="Submit2" value="Reset" /></td>
                              </tr>
                            </form>
                          </table>
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