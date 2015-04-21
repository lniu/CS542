<?php
include_once 'conn.php';
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
<title></title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />
<link rel="stylesheet" type="text/css" href="css/top.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>

<script language="javascript" type="text/javascript" charset="utf-8" src="js/topmenu.js"></script>

<script language="javascript" type="text/javascript">


</script>
</head>

<body oncontextmenu="return false" ondragstart="return false" onSelectStart="return false">
<div class="top_box">
    <div class="top_logo"><div align="center" style="color: #CCFFCC;font-size: 13pt;font-weight: bold;">Meal Service</div></div>
    <div class="top_nav">
      <div class="top_nav_sm">
		 		 <span style="float:right; padding-right:12px"> [<a href="index.php" target='_parent' ><strong>HomePage</strong></a>] </span>
		 		Welcom！<?php echo $_SESSION["username"]?> [<?php echo $_SESSION["cx"]?>]  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;		</div>
         <div class="top_nav_xm">
             <div class="navtit" id="navtit">
                <span onclick="changeMenu(this);"  class="hover"><a href="sy.php" target='main'><i>DevelopPage</i></a></span>
				<span onclick="changeMenu(this);" ><a href="yhzhgl.php" target='main'><i>Admin Management</i></a></span>				
					
				
				
           </div>
         </div>
    </div>
    
    <div class="top_she">  
		<a href="javascript:void(0);" onClick="self.top.location.href='logout.php'">Logoff</a> <a onClick="javascript:window.parent.main.history.go(-1);" style="cursor:pointer;">Pre</a>
		 <a onclick="javascript:window.parent.main.location.reload();" style="cursor:pointer;">Refresh</a>    </div>
    </div>
</div>
</body>
</html>

