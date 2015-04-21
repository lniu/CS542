<?php
session_start();
include_once 'conn.php';
?>
<html>
<head>
<title>Dish Info</title><script language="javascript" src="js/Calendar.js"></script>
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
                          <td width="13%" height="20" align="right" valign="bottom"><span class="STYLE2"><strong>Dish Info</strong></span></td>
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
  &nbsp;Search: Dish ID：<input name="caipinbianhao" type="text" id="caipinbianhao" style='border:solid 1px #000000; color:#666666' size="10" /> Dish Name：<input name="caipinmingcheng" type="text" id="caipinmingcheng" style='border:solid 1px #000000; color:#666666' size="10" />Type：
  <select name='leibie' id='leibie' style='border:solid 1px #000000; color:#666666'>
    <option value="">All</option>
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
  </select> 
  Price：
  <input name="jiage1" type="text" id="jiage1"  value='' style='border:solid 1px #000000; color:#666666;width:30px;' />-<input name="jiage2" type="text" id="jiage2"  value='' style='border:solid 1px #000000; color:#666666;width:30px;' />Resturant Name：<select name='fandianmingcheng' id='fandianmingcheng'><option value="">All</option><?php getoption("fandianxinxi","fandianmingcheng")?></select>
    <input type="submit" name="Submit" value="Search" style='border:solid 1px #000000; color:#666666' />&nbsp;<
</form>

                          <table width="98%" height="7%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                             <?php 
    $sql="select * from caipinxinxi where 1=1";

if ($_POST["caipinbianhao"]!=""){$nreqcaipinbianhao=$_POST["caipinbianhao"];$sql=$sql." and caipinbianhao like '%$nreqcaipinbianhao%'";}
if ($_POST["caipinmingcheng"]!=""){$nreqcaipinmingcheng=$_POST["caipinmingcheng"];$sql=$sql." and caipinmingcheng like '%$nreqcaipinmingcheng%'";}
if ($_POST["leibie"]!=""){$nreqleibie=$_POST["leibie"];$sql=$sql." and leibie like '%$nreqleibie%'";}
if ($_POST["jiage1"]!=""){$nreqjiage1=$_POST["jiage1"];$sql=$sql." and jiage >= $nreqjiage1";}
if ($_POST["jiage2"]!=""){$nreqjiage2=$_POST["jiage2"];$sql=$sql." and jiage <= $nreqjiage2";}
if ($_POST["jiage"]!=""){$nreqjiage=$_POST["jiage"];$sql=$sql." and jiage like '%$nreqjiage%'";}
if ($_POST["fandianmingcheng"]!=""){$nreqfandianmingcheng=$_POST["fandianmingcheng"];$sql=$sql." and fandianmingcheng like '%$nreqfandianmingcheng%'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=20;//；
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}
$k=0;
	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
$k=$k+1;
  ?>
                            <td height="165" align="center"><table width="150" height="160" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td height="123" align="center"><a href="caipinxinxidetail.php?id=<?php echo mysql_result($query,$i,id);?>"><img src="<?php echo mysql_result($query,$i,zhaopian);?>" width="133" height="135" border="0" /></a></td>
                                </tr>
                                <tr>
                                  <td height="25" align="center"><?php echo mysql_result($query,$i,caipinmingcheng);?></td>
                                </tr>
                            </table></td>
                             	<?php
								if ($k==4)
									{
										echo "</tr><tr>";
										$k=0;
									}
	}
}
?>
                          </tr>
                        </table>
						<p>
</p>

					
					
					

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
