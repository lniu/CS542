<?php 
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Member Register</title><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>Existed Record：</p>
<form id="form1" name="form1" method="post" action="">
  Search:Account:
  <input name="bh" type="text" id="bh" />
  Name:
  <input name="mc" type="text" id="mc" />
  <input type="submit" name="Submit" value="Search" />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#EBE2FE">No</td>
    <td width="94" bgcolor='#EBE2FE'>Account</td>
    <td width="94" bgcolor='#EBE2FE'>Password</td>
    <td width="94" bgcolor='#EBE2FE'>Name</td>
    <td width="94" bgcolor='#EBE2FE'>Sex</td>
    <td width="167" bgcolor='#EBE2FE'>Area</td>
    <td width="204" bgcolor='#EBE2FE'>Email</td>
    <td width="86" bgcolor='#EBE2FE'>Photo</td>
    <td width="65" align="center" bgcolor="#EBE2FE">Pass</td>
    <td width="120" align="center" bgcolor="#EBE2FE">Date</td>
    <td width="70" align="center" bgcolor="#EBE2FE">Operation</td>
  </tr>
  <?php 
    $sql="select * from yonghuzhuce where 1=1";
  if ($_POST["bh"]!="")
{
  	$nreqbh=$_POST["bh"];
  	$sql=$sql." and zhanghao like '%$nreqbh%'";
}
     if ($_POST["mc"]!="")
{
  	$nreqmc=$_POST["mc"];
  	$sql=$sql." and xingming like '%$nreqmc%'";
}
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
  ?>
  <tr>
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,zhanghao);?></td><td><?php echo mysql_result($query,$i,mima);?></td><td><?php echo mysql_result($query,$i,xingming);?></td><td><?php echo mysql_result($query,$i,xingbie);?></td><td><?php echo mysql_result($query,$i,diqu);?></td><td><?php echo mysql_result($query,$i,Email);?></td><td align="center"><img src="<?php echo mysql_result($query,$i,zhaopian);?>" width="73" height="77" /></td>
    <td width="65" align="center"><a href="sh.php?id=<?php echo mysql_result($query,$i,id);?>&amp;yuan=<?php echo mysql_result($query,$i,issh);?>&tablename=yonghuzhuce"><?php echo mysql_result($query,$i,issh);?></a></td>
    <td width="120" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    <td width="70" align="center"><a href="del.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>&tablename=yonghuzhuce" onclick="return confirm('Delete？')">Delete</a> <a href="yonghuzhuce_updt.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>">Modified</a></td>
  </tr>
  	<?php
	}
}
?>
</table>

<p align="center"><a href="yonghuzhuce_list.php?pagecurrent=1">1 </a>, <a href="yonghuzhuce_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">Pre</a> ,<a href="yonghuzhuce_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">Next</a>, <a href="yonghuzhuce_list.php?pagecurrent=<?php echo $pagecount;?>">Last</a>, Current <?php echo $pagecurrent;?> Page, Total <?php echo $pagecount;?> pages </p>

<p>&nbsp; </p>

</body>
</html>

