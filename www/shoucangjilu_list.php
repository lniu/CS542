<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Favorite</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>Existed Favorite：</p>
<form id="form1" name="form1" method="post" action="">
  Search: ID：<input name="IDhao" type="text" id="IDhao" style='border:solid 1px #000000; color:#666666;width:80px' /> Type：<input name="leibie" type="text" id="leibie" style='border:solid 1px #000000; color:#666666;width:80px' /> 名称：<input name="mingcheng" type="text" id="mingcheng" style='border:solid 1px #000000; color:#666666;width:80px' />
  <input type="submit" name="Submit" value="Search" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">No.</td>
    <td bgcolor='#CCFFFF'>ID</td><td bgcolor='#CCFFFF'>Type</td><td bgcolor='#CCFFFF'>Name</td><td bgcolor='#CCFFFF'>By</td>
    <td width="120" align="center" bgcolor="#CCFFFF">Date</td>
    <td width="70" align="center" bgcolor="#CCFFFF">Operation</td>
  </tr>
  <?php 
    $sql="select * from shoucangjilu where 1=1";
  if ($_POST["IDhao"]!=""){$nreqIDhao=$_POST["IDhao"];$sql=$sql." and IDhao like '%$nreqIDhao%'";}if ($_POST["leibie"]!=""){$nreqleibie=$_POST["leibie"];$sql=$sql." and leibie like '%$nreqleibie%'";}if ($_POST["mingcheng"]!=""){$nreqmingcheng=$_POST["mingcheng"];$sql=$sql." and mingcheng like '%$nreqmingcheng%'";}
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
    <td><?php echo mysql_result($query,$i,IDhao);?></td><td><?php echo mysql_result($query,$i,leibie);?></td><td><?php echo mysql_result($query,$i,mingcheng);?></td><td><?php echo mysql_result($query,$i,shoucangren);?></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="70" align="center"><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=shoucangjilu" onclick="return confirm('Delete？')">Delete</a> <a href="shoucangjilu_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">Modified</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<?php //yougongzitongji?>

  
</p>
<p align="center"><a href="shoucangjilu_list.php?pagecurrent=1">1 </a>, <a href="shoucangjilu_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">Pre</a> ,<a href="shoucangjilu_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">Next</a>, <a href="shoucangjilu_list.php?pagecurrent=<?php echo $pagecount;?>">Last</a>, Current <?php echo $pagecurrent;?> page,Total <?php echo $pagecount;?> pages </p>

<p>&nbsp; </p>

</body>
</html>

