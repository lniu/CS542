<?php
session_start();
include_once 'conn.php';
$lb=$_GET["lb"];
if($lb=="")
{
	$lb=$_POST["lb"];
}
$biaoti=$_POST["biaoti"];
?>
<html>
<head>
<title>Meal Service</title><LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
.STYLE2 {color: #1A7F55}
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
                          <td width="13%" height="20" align="right" valign="bottom"><span class="STYLE2"><strong><?php echo $lb;?></strong></span></td>
                          <td width="87%">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="793" height="188" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="16" background="qtimages/1_02_02_01_02_01.jpg">&nbsp;</td>
                          <td width="755" height="792" valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" class="newsline">
                            <?php 
    $sql="select * from xinwentongzhi where 1=1";
  
if ($biaoti!=""){$sql=$sql." and biaoti like '%$biaoti%'";}
if($lb!=""){$sql=$sql." and leibie='$lb'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=20;//每页行数；
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
                            <tr height="25">
                              <td width="2%" align="left" class="newsline"><img src="qtimages/1.jpg"></td>
                              <td width="70%" class="newsline"><a href="gg_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><?php echo mysql_result($query,$i,"biaoti");?></a></td>
                           
                              <td width="17%" class="newsline"><?php echo mysql_result($query,$i,"addtime");?></td>
                            </tr>
                            <?php
						}
					  }
					  ?>
                          </table>
                            <p align="center"><a href="news.php?pagecurrent=1&lb=<?php echo $lb;?>">1 </a>, <a href="news.php?pagecurrent=<?php echo $pagecurrent-1;?>&lb=<?php echo $lb;?>">Pre</a> ,<a href="news.php?pagecurrent=<?php echo $pagecurrent+1;?>&lb=<?php echo $lb;?>">Next</a>, <a href="news.php?pagecurrent=<?php echo $pagecount;?>&lb=<?php echo $lb;?>">Last</a>, Current <?php echo $pagecurrent;?> page, Total <?php echo $pagecount;?> page 
  
  
                            </p></td>
                          <td width="22" background="qtimages/1_02_02_01_02_03.jpg">&nbsp;</td>
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