<?php
session_start();
include_once 'conn.php';

?>
<html>
<head>
<title>Restaurant Info</title><script language="javascript" src="js/Calendar.js"></script>
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
                          <td width="22%" height="20" align="right" valign="bottom"><span class="STYLE2"><strong>Restaurant Information</strong></span></td>
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
  Search: Restaurant Name：<input name="fandianmingcheng" type="text" id="fandianmingcheng" style='border:solid 1px #000000; color:#666666' size="10" /> Style：
  <select name='canyinleixing' id='canyinleixing' style='border:solid 1px #000000; color:#666666'>
    <option value="">All</option>
	  <option value="Chinese">Chinese</option>
	  <option value="Thai">Thai</option>
	  <option value="MidEast">MidEast</option>
	  <option value="American">American</option>
	  <option value="Mexico">Mexico</option>
	  <option value="Vietnamese">Vietnamese</option>
  </select> 
  Dish：
  <input name="tesecaipin" type="text" id="tesecaipin" style='border:solid 1px #000000; color:#666666' size="10" />
  <input type="submit" name="Submit" value="Search" style='border:solid 1px #000000; color:#666666' />&nbsp;
</form>
<table width="98%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">No</td>
    <td bgcolor='#CCFFFF'>Restaurant Name</td><td bgcolor='#CCFFFF'>Area</td><td bgcolor='#CCFFFF'>Photo</td><td bgcolor='#CCFFFF'>Style</td><td bgcolor='#CCFFFF'>Dish</td><td bgcolor='#CCFFFF'>Phone</td><td width="30" align="center" bgcolor="#CCFFFF">Operation</td>
  </tr>
  <?php 
    $sql="select * from fandianxinxi where 1=1";
  
if ($_POST["fandianmingcheng"]!=""){$nreqfandianmingcheng=$_POST["fandianmingcheng"];$sql=$sql." and fandianmingcheng like '%$nreqfandianmingcheng%'";}
if ($_POST["canyinleixing"]!=""){$nreqcanyinleixing=$_POST["canyinleixing"];$sql=$sql." and canyinleixing like '%$nreqcanyinleixing%'";}
if ($_POST["tesecaipin"]!=""){$nreqtesecaipin=$_POST["tesecaipin"];$sql=$sql." and tesecaipin like '%$nreqtesecaipin%'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//；
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
    <td width="25"><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,fandianmingcheng);?></td><td><?php echo mysql_result($query,$i,dizhi);?></td><td width='80'><a href="<?php echo mysql_result($query,$i,menmianzhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,menmianzhaopian) ?>' width='80' height='88' border='0'></a></td><td><?php echo mysql_result($query,$i,canyinleixing);?></td><td><?php echo mysql_result($query,$i,tesecaipin);?></td><td><?php echo mysql_result($query,$i,lianxidianhua);?></td><td width="30" align="center"><a href="fandianxinxidetail.php?id=<?php echo mysql_result($query,$i,"id");?>">Detail</a></td>
  </tr>
  	<?php
	}
}
?>
</table>

<p align="center"><a href="fandianxinxilist.php?pagecurrent=1">1 </a>, <a href="fandianxinxilist.php?pagecurrent=<?php echo $pagecurrent-1;?>">Pre</a> ,<a href="fandianxinxilist.php?pagecurrent=<?php echo $pagecurrent+1;?>">Next</a>, <a href="fandianxinxilist.php?pagecurrent=<?php echo $pagecount;?>">Last</a>, Current <?php echo $pagecurrent;?> page, Total <?php echo $pagecount;?> pages </p>


					
					
					
					

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
