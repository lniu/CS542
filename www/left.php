
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />
<link href="css/left.css" type="text/css" rel="stylesheet" />
<title>Left Menu</title>
<script src="js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" charset="utf-8" src="js/admin.js"></script>
</head>

<body oncontextmenu="return false" ondragstart="return false" onSelectStart="return false">
	   
	    <div class="div_bigmenu">
 		<div class="div_bigmenu_nav_down" id="nav_1" onclick="javascript:lefttoggle(1);">User Managerment</div>
		<ul id="ul_1">
			<li><a href="yhzhgl.php" target='main'>Admin</a></li>
			<li><a href="mod.php" target='main'>Reset pwd</a></li>
			<li><a href="yonghuzhuce_list.php" target='main'>Member</a></li>	
		</ul>
	    </div>
		
		
		

		
		<div class="div_bigmenu">
		<div class="div_bigmenu_nav_down" onclick="javascript:lefttoggle(3);" id="nav_3">Restaurant Management</div>
		<ul id="ul_3">
			<li><a href="fandianxinxi_add.php" target='main'>Rst Insert</a></li>
			<li><a href="fandianxinxi_list.php" target='main'>Rst Search</a></li>
		</ul>
		</div>
		
		<div class="div_bigmenu">
		<div class="div_bigmenu_nav_down" onclick="javascript:lefttoggle(4);" id="nav_4">Dish Management</div>
		<ul id="ul_4">
			<li><a href="caipinxinxi_add.php" target='main'>Dish Insert</a></li>
			<li><a href="caipinxinxi_list.php" target='main'>Dish Search</a></li>
		</ul>
		</div>
		
		
		

		
	</body>
</html>

