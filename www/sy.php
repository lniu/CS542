<?php
session_start();

?>
<html>
<head>
<link rel="stylesheet" href="images/StyleSheet.css" type="text/css" />
</head>
<body>

<table width="100%" height="210" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#D9E9FF" style="border-collapse:collapse">  
  <TBODY>
    <TR 
  align=middle bgColor=#ffffff>
      <td colspan="4" bgColor=#87BBEF><strong>Basic Information</strong></td>
    </TR>
    <TR   align=middle 
  bgColor=#ffffff>
      <TD width="14%" align="left" valign="bottom" >Current User£º</TD>
      <TD width="37%"  align="left" valign="bottom" ><font class="t4"><?php echo $_SESSION['username'];?></font></TD>
      <TD width="9%"  align="left" valign="bottom" >Authority£º</TD>
      <TD width="40%"  align="left" valign="bottom" ><?php echo $_SESSION['cx'];?></TD>
    </TR>

    <TR   align=middle 
  bgColor=#ffffff>
      
      
      <TD align="left" valign="bottom" >Date£º</TD>
      <TD  align="left" valign="bottom" ><?php echo date("Y-m-d")?></TD>
    </TR>
  </TBODY>
</TABLE>
<p>&nbsp;</p>
<table width="100%" height="184" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#D9E9FF" style="border-collapse:collapse">  
  <TBODY>
    <TR 
  align=middle bgColor=#ffffff>
      <td height="37" colspan="2" bgColor=#87BBEF><strong>Meal Service<strong></td>
    </TR>



  </TBODY>
</TABLE>
<p></p>
</BODY>
  </HTML>
