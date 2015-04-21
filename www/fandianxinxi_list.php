<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Resturant Info</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>Existed Restuarant：</p>
<form id="form1" name="form1" method="post" action="">
  Search: Restuarant Name：<input name="fandianmingcheng" type="text" id="fandianmingcheng" style='border:solid 1px #000000; color:#666666;width:80px' /> Style：
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
  <input name="tesecaipin" type="text" id="tesecaipin" style='border:solid 1px #000000; color:#666666;width:80px' />
  <input type="submit" name="Submit" value="Search" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">No</td>
    <td bgcolor='#CCFFFF'>Restuarant</td><td bgcolor='#CCFFFF'>Area</td><td bgcolor='#CCFFFF'>Photo</td><td bgcolor='#CCFFFF'>Style</td><td bgcolor='#CCFFFF'>Dish</td><td bgcolor='#CCFFFF'>Phone</td>
    <td width="120" align="center" bgcolor="#CCFFFF">Date</td>
    <td width="70" align="center" bgcolor="#CCFFFF">Operation</td>
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
  $pagelarge=10;//
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
//zoxngxetxoxngjxvi
  ?>
  <tr>
    <td width="25"><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,fandianmingcheng);?></td><td><?php echo mysql_result($query,$i,dizhi);?></td><td width='80'><a href="<?php echo mysql_result($query,$i,menmianzhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,menmianzhaopian) ?>' width='80' height='88' border='0'></a></td><td><?php echo mysql_result($query,$i,canyinleixing);?></td><td><?php echo mysql_result($query,$i,tesecaipin);?></td><td><?php echo mysql_result($query,$i,lianxidianhua);?></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="90" align="center"><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=fandianxinxi" onclick="return confirm('Delete？')">Delete</a> <a href="fandianxinxi_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">Modified</a> <a href="fandianxinxidetail.php?id=<?php echo mysql_result($query,$i,"id");?>" target="_blank">Detail</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<?php //yougongzitongji?>

<p align="center"><a href="fandianxinxi_list.php?pagecurrent=1">1 </a>, <a href="fandianxinxi_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">Pre</a> ,<a href="fandianxinxi_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">Next</a>, <a href="fandianxinxi_list.php?pagecurrent=<?php echo $pagecount;?>">Last</a>, Current <?php echo $pagecurrent;?> page,Total <?php echo $pagecount;?> pages </p>

<p>&nbsp; </p>

</body>
</html>

