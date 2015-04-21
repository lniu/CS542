<?php
session_start();
include_once 'conn.php';
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
                          <td width="18%" height="20" align="right" valign="bottom"><span class="STYLE2"><strong>Message Board</strong></span></td>
                          <td width="74%">&nbsp;</td>
                          <td width="13%"><strong><a href="lyb.php"><span class="STYLE2">Reply</span></a></strong></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="793" height="188" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="16" background="qtimages/1_02_02_01_02_01.jpg">&nbsp;</td>
                          <td width="755" height="792" valign="top"><table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#ADCEEF" style="border-collapse:collapse">
                            <?php
					$sql="select * from liuyanban where 1=1";
					$sql=$sql." order by id desc";
  					$query=mysql_query($sql);
	 				 $rowscount=mysql_num_rows($query);
					 if($rowscount==0)
  {}
  else
  {
  $pagelarge=5;//每页行数；
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

	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
					 ?>
                            <tr>
                              <td width="11" rowspan="3" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                              <td width="85" rowspan="3" align="center" valign="middle"><img width='70'height='70' src=<?php echo mysql_result($query,$i,"zhaopian");?> border=0> </td>
                              <td height="20" colspan="2" align="left" valign="middle">&nbsp; &nbsp; Date:<?php echo mysql_result($query,$i,"addtime");?> &nbsp;</td>
                              <td width="12" rowspan="3" valign="top" style="width: 10px"><!--DWLayoutEmptyCell-->&nbsp;</td>
                            </tr>
                            <tr>
                              <td height="78" align="left" valign="top">&nbsp;<?php echo mysql_result($query,$i,"liuyan");?></td>
                              <td align="left" valign="top"><p>Reply：</p>
                                  <p><?php echo mysql_result($query,$i,"huifu");?></p></td>
                            </tr>
                            <tr>
                              <td colspan="2" align="left" valign="middle" style="height: 25px">&nbsp; &nbsp;Account：<?php echo mysql_result($query,$i,"zhanghao");?> &nbsp; &nbsp;Name：<?php echo mysql_result($query,$i,"xingming");?>&nbsp;&nbsp;</td>
                            </tr>
                            <?php
						  }
  	}
  ?>
                          </table>
                            <p align="center"><a href="lyblist.php?pagecurrent=1">1 </a>, <a href="lyblist.php?pagecurrent=<?php echo $pagecurrent-1;?>">Pre</a> , <a href="lyblist.php?pagecurrent=<?php echo $pagecurrent+1;?>">Next</a> , <a href="lyblist.php?pagecurrent=<?php echo $pagecount;?>">Last</a>, Current <?php echo $pagecurrent;?> pages, Total <?php echo $pagecount;?> pages 
         
                              
 
                            </p>
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