<?php

session_start();
if ($_SESSION['username']==""){
	echo "<script language='javascript'>alert('Illgeal£¡');location='login.php';</script>";
}
?>