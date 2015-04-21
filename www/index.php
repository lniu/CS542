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
                <td><table id="__01" width="793" height="301" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="793" height="46" background="qtimages/1_02_02_01_01.jpg"><table width="100%" height="20" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="7%" height="20" align="right" valign="bottom"><a href="news.php?lb=Healthy Care"><span class="STYLE2"><strong>News</strong></span></a></td>
                        <td width="87%">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="793" height="244" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="16" background="qtimages/1_02_02_01_02_01.jpg">&nbsp;</td>
                        <td width="755" height="244"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="504" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="newsline">
                              <?php 
					  $sql="select biaoti,id,addtime from xinwentongzhi where leibie='Healthy Care' order by id desc limit 0,9";
					  $query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount>0)
					  {
					  	for($i=0;$i<$rowscount;$i++)
						{
							
						?>
                              <tr height="25">
                                <td width="4%" height="20" align="center"><img src="qtimages/1.jpg" width="9" height="9"></td>
                                <td width="79%" class="newslist"><a href="gg_detail.php?id=<?php echo mysql_result($query,$i,"id");?>">
                                  <?php 
								if (strlen(mysql_result($query,$i,"biaoti"))>58)
								{
									echo substr(mysql_result($query,$i,"biaoti"),0,58);
								}
								else
								{
									echo mysql_result($query,$i,"biaoti");
								}
								
								?>
                                </a></td>
                                <td width="17%" align="center" class="newslist"><?php echo date("Y-m-d",strtotime(mysql_result($query,$i,"addtime")));?></td>
                              </tr>
                              <?php
						}
					  }
					  ?>
                            </table></td>
                            <td width="248">
							<SCRIPT language=javascript>
var imagePath=new Array();
var linkPath=new Array();
var infoText=new Array();
var swf_width=248;
var swf_height=242;

<?php
$sql="select id,biaoti,shouyetupian,id from xinwentongzhi where shouyetupian<>'' order by id desc";
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
for($i=0;$i<5;$i++)
{
	?>
	imagePath.push("<?php echo mysql_result($query,$i,2)?>")
		infoText.push("<?php echo mysql_result($query,$i,1)?>")
		linkPath.push("gg_detail.php?id=<?php echo mysql_result($query,$i,0)?>")
	<?php
}

?>

var imagePath_str=""
var linkPath_str=""
var infoText_str=""
for(var i=0;i<5;i++){
imagePath_str+=imagePath[i]+"|";
linkPath_str+=linkPath[i]+"|";
infoText_str+=infoText[i]+"|";
}
document.writeln('<object type="application\/x-shockwave-flash" codebase=\"http:\/\/fpdownload.macromedia.com\/pub\/shockwave\/cabs\/flash\/swflash.cab#version=7,0,0,0\" width=\"225\" height=\"219\" id=\"flash2\" align=\"middle\">');
document.writeln('<param name=\"allowScriptAccess\" value=\"sameDomain\" \/>');
document.writeln('<param name=\"movie\" value=\"qtimages/luzhupic3.swf\" \/>');
document.writeln('<param name=\"quality\" value=\"high\" \/>');
document.writeln('<param name=\"bgcolor\" value=\"#ffffff\" \/>');
document.writeln("<param name=\"FlashVars\" value=\"ppurl="+imagePath_str+"&pplink="+linkPath_str+"&ppfinfo="+infoText_str+"\" \/>");
document.writeln('<embed src=\"qtimages/luzhupic3.swf\" quality=\"high\" bgcolor=\"#ffffff\" width=\"225\" height=\"219\" name=\"luzhupic3\" align=\"middle\" allowScriptAccess=\"sameDomain\" type=\"application\/x-shockwave-flash\" pluginspage=\"http:\/\/www.macromedia.com\/go\/getflashplayer\" \/>');
document.writeln('<\/object>');
</SCRIPT>							</td>
                          </tr>
                        </table></td>
                        <td width="22" background="qtimages/1_02_02_01_02_03.jpg">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="qtimages/1_02_02_01_03.jpg" width="793" height="11" alt=""></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><table id="__01" width="793" height="245" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="793" height="46" background="qtimages/1_02_02_01_01.jpg"><table width="100%" height="20" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="18%" height="20" align="right" valign="bottom"><span class="STYLE2"><strong>Advised Restaurant</strong></span></td>
                          <td width="87%">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="793" height="188" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="16" background="qtimages/1_02_02_01_02_01.jpg">&nbsp;</td>
                          <td width="755" height="188"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <?php 
    $sql="select * from fandianxinxi where menmianzhaopian<>''";
 
  $sql=$sql." order by id desc limit 0,4";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  
	 for($i=0;$i<$rowscount;$i++)
{
	
  ?>
                              <td height="163" align="center"><table width="20%" height="163" border="0" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td height="137" align="center"><a href="fandianxinxidetail.php?id=<?php echo mysql_result($query,$i,"id");?>"><img src="<?php echo mysql_result($query,$i,"menmianzhaopian");?>" width="131" height="130" border="0"></a></td>
                                  </tr>
                                  <tr>
                                    <td height="25" align="center"><a href="fandianxinxidetail.php?id=<?php echo mysql_result($query,$i,"id");?>"><?php echo mysql_result($query,$i,"fandianmingcheng");?></a></td>
                                  </tr>
                              </table></td>
                              <?php
							
  	}
  ?>
                            </tr>
                          </table></td>
                          <td width="22" background="qtimages/1_02_02_01_02_03.jpg">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="qtimages/1_02_02_01_03.jpg" width="793" height="11" alt=""></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><table id="__01" width="793" height="245" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="793" height="46" background="qtimages/1_02_02_01_01.jpg"><table width="100%" height="20" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="13%" height="20" align="right" valign="bottom"><span class="STYLE2"><strong>Advised Dish</strong></span></td>
                          <td width="87%">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="793" height="188" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="16" background="qtimages/1_02_02_01_02_01.jpg">&nbsp;</td>
                          <td width="755" height="188"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <?php 
    $sql="select * from caipinxinxi where zhaopian<>''";
 
  $sql=$sql." order by id desc limit 0,4";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  
	 for($i=0;$i<$rowscount;$i++)
{
	
  ?>
                                <td height="163" align="center"><table width="20%" height="163" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td height="137" align="center"><a href="caipinxinxidetail.php?id=<?php echo mysql_result($query,$i,"id");?>"><img src="<?php echo mysql_result($query,$i,"zhaopian");?>" width="131" height="130" border="0"></a></td>
                                    </tr>
                                    <tr>
                                      <td height="25" align="center"><a href="caipinxinxidetail.php?id=<?php echo mysql_result($query,$i,"id");?>"><?php echo mysql_result($query,$i,"caipinmingcheng");?></a></td>
                                    </tr>
                                </table></td>
                                <?php
							
  	}
  ?>
                              </tr>
                          </table></td>
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