<?php
session_start();
include_once 'conn.php';

$id=$_GET["id"];
?>
<html>
<head>
<title>Restuarant Info</title><LINK href="qtimages/style.css" type=text/css rel=stylesheet>
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
                          <td width="13%" height="20" align="right" valign="bottom"><span class="STYLE2"><strong>Restaurant Detail</strong></span></td>
                          <td width="87%">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="793" height="188" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="16" background="qtimages/1_02_02_01_02_01.jpg">&nbsp;</td>
                          <td width="755" height="792" valign="top">
						  
						  
						  
						  
						  
						  <?php
$sql="select * from fandianxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <tr>
	  <td width='11%' height=44>Restaurant Name：</td><td width='39%'><?php echo mysql_result($query,0,fandianmingcheng);?></td><td  rowspan=7 align=center><a href=<?php echo mysql_result($query,0,menmianzhaopian);?> target=_blank><img src=<?php echo mysql_result($query,0,menmianzhaopian);?> width=228 height=215 border=0></a></td></tr><tr><td width='11%' height=44>Area：</td><td width='39%'><?php echo mysql_result($query,0,dizhi);?></td></tr><tr><td width='11%' height=44>Type：</td><td width='39%'><?php echo mysql_result($query,0,canyinleixing);?></td></tr><tr><td width='11%' height=44>Dish：</td><td width='39%'><?php echo mysql_result($query,0,tesecaipin);?></td></tr><tr><td width='11%' height=44>Photo：</td><td width='39%'><?php echo mysql_result($query,0,lianxidianhua);?></td></tr><t
	  <tr>
	    <td height=100 colspan="3"  >
		
		 <div class="map">
                        
						
						<div>
                	<div id="allmap1" style="width:100%;height:301px;"></div>
                </div>				




                        </div>                        
                        </div>
		
		</td>
	    </tr>
	  <tr>
	    <td height=100 colspan="3"  ><?php echo mysql_result($query,0,jianjie);?></td></tr><tr><td colspan=3 align=center><input type=button name=Submit5 value=Back onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666'  />
	        <input type=button name=Submit52 value=MyFavorite  onClick="javascript:location.href='shoucangjiluadd.php?id=<?php echo $id?>&lb=Restaurant&mc=<?php echo mysql_result($query,0,fandianmingcheng);?>';" style='border:solid 1px #000000; color:#666666'  /></td></tr>
  </table>

<?php
	}
?>

					
					
					
					

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
