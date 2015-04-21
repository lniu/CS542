<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Dish Information</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>Existed Dishes：</p>
<form id="form1" name="form1" method="post" action="">
  Search: Dish ID：<input name="caipinbianhao" type="text" id="caipinbianhao" style='border:solid 1px #000000; color:#666666;width:80px' /> Dish Name：<input name="caipinmingcheng" type="text" id="caipinmingcheng" style='border:solid 1px #000000; color:#666666;width:80px' /> Type：
  <select name='leibie' id='leibie' style='border:solid 1px #000000; color:#666666'>
    <option value="">ALL</option>
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
  <input name="jiage1" type="text" id="jiage1"  value='' style='border:solid 1px #000000; color:#666666;width:30px' />-<input name="jiage2" type="text" id="jiage2"  value='' style='border:solid 1px #000000; color:#666666;width:30px' /> Restaurant Name：<select name='fandianmingcheng' id='fandianmingcheng' style='border:solid 1px #000000; color:#666666;'><option value="">All</option><?php getoption("fandianxinxi","fandianmingcheng")?></select></select>
  <input type="submit" name="Submit" value="Search" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">No</td>
    <td bgcolor='#CCFFFF'>Dish ID</td><td bgcolor='#CCFFFF'>Dish Name</td><td bgcolor='#CCFFFF'>Type</td><td bgcolor='#CCFFFF'>Price</td><td bgcolor='#CCFFFF'>Photo</td><td bgcolor='#CCFFFF'>Restaurant Name</td>
    <td width="120" align="center" bgcolor="#CCFFFF">Time</td>
    <td width="70" align="center" bgcolor="#CCFFFF">Option</td>
  </tr>
  <?php 
    $sql="select * from caipinxinxi where 1=1";
  
if ($_POST["caipinbianhao"]!=""){$nreqcaipinbianhao=$_POST["caipinbianhao"];$sql=$sql." and caipinbianhao like '%$nreqcaipinbianhao%'";}
if ($_POST["caipinmingcheng"]!=""){$nreqcaipinmingcheng=$_POST["caipinmingcheng"];$sql=$sql." and caipinmingcheng like '%$nreqcaipinmingcheng%'";}
if ($_POST["leibie"]!=""){$nreqleibie=$_POST["leibie"];$sql=$sql." and leibie like '%$nreqleibie%'";}
if ($_POST["jiage1"]!=""){$nreqjiage1=$_POST["jiage1"];$sql=$sql." and jiage >= $nreqjiage1";}
if ($_POST["jiage2"]!=""){$nreqjiage2=$_POST["jiage2"];$sql=$sql." and jiage <= $nreqjiage2";}
if ($_POST["fandianmingcheng"]!=""){$nreqfandianmingcheng=$_POST["fandianmingcheng"];$sql=$sql." and fandianmingcheng like '%$nreqfandianmingcheng%'";}
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
$jiagez=$jiagez+floatval(mysql_result($query,$i,jiage));

  ?>
  <tr>
    <td width="25"><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,caipinbianhao);?></td><td><?php echo mysql_result($query,$i,caipinmingcheng);?></td><td><?php echo mysql_result($query,$i,leibie);?></td><td><?php echo mysql_result($query,$i,jiage);?></td><td width='80'><a href="<?php echo mysql_result($query,$i,zhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,zhaopian) ?>' width='80' height='88' border='0'></a></td><td><?php echo mysql_result($query,$i,fandianmingcheng);?></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="90" align="center"><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=caipinxinxi" onclick="return confirm('Delete？')">Delete</a> <a href="caipinxinxi_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">Modified</a> <a href="caipinxinxidetail.php?id=<?php echo mysql_result($query,$i,"id");?>" target="_blank">Detail</a></td>
  </tr>
  	<?php
	}
}
?>
</table>


<p align="center"><a href="caipinxinxi_list.php?pagecurrent=1">1 </a>, <a href="caipinxinxi_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">Pre</a> ,<a href="caipinxinxi_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">Next</a>, <a href="caipinxinxi_list.php?pagecurrent=<?php echo $pagecount;?>">Last</a>, Current <?php echo $pagecurrent;?> Page, Total <?php echo $pagecount;?> page </p>

<p>&nbsp; </p>

</body>
</html>

