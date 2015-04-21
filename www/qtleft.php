<script language="javascript">
function checklog()
{
	if(document.userlog.username.value=="" || document.userlog.pwd1.value=="" || document.userlog.yzm.value=="")
	{
		alert("Please enter whole information");
		return false;
	}
}
</script>
<table id="__01" width="321" height="848" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><table id="__01" width="321" height="223" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="321" height="45" background="qtimages/1_02_01_01_01.jpg"><table width="100%" height="20" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="35%" height="20" align="right" valign="bottom"><span class="STYLE5 STYLE2"><strong>Announcement</strong></span></td>
                        <td width="62%">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="321" height="169" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="25" background="qtimages/1_02_01_01_02_01.jpg">&nbsp;</td>
                        <td width="279" height="169"><marquee border="0" direction="up" height="100%" onMouseOut="start()" onMouseOver="stop()"
                scrollamount="1" scrolldelay="50">
                          <TABLE width="100%" height="100%" >
                      <TR><TD ><?php 
					  $sql="select * from dx where leibie='Welcome'";
					  $query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount>0)
					  {
					  	echo mysql_result($query,0,"content");
					  	}
						?></TD></TR></TABLE></marquee></td>
                        <td width="17" background="qtimages/1_02_01_01_02_03.jpg">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="qtimages/1_02_01_01_03.jpg" width="321" height="9" alt=""></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><table id="__01" width="321" height="211" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="321" height="45" background="qtimages/1_02_01_01_01.jpg"><table width="100%" height="20" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="18%" height="20" align="right" valign="bottom"><span class="STYLE5 STYLE2"><strong>Login</strong></span></td>
                          <td width="62%">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="321" height="157" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="25" background="qtimages/1_02_01_01_02_01.jpg">&nbsp;</td>
                          <td width="279" height="157">
                            <?php 
					if ($_SESSION['cx']=="" )
					{
				?>
                            <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
                              <form action="userlog_post.php" method="post" name="userlog" id="userlog">
                                <tr>
                                  <td width="12" height="28">&nbsp;</td>
                                  <td width="52" height="28">Account:</td>
                                  <td height="28" colspan="2"><input name="username" type="text" id="username" size="12" style="width:100px; height:16px; border:solid 1px #000000; color:#666666" /></td>
                                </tr>
                                <tr>
                                  <td height="28">&nbsp;</td>
                                  <td height="28">Password:</td>
                                  <td height="28" colspan="2"><input name="pwd1" type="password" id="pwd1" size="12" style="width:100px; height:16px; border:solid 1px #000000; color:#666666" /></td>
                                </tr>
                                
                                <tr style="display:none">
                                  <td height="28">&nbsp;</td>
                                  <td height="28">Authority:</td>
                                  <td height="28" colspan="2"><select name="cx" id="cx">
                                      <option value="Member">Member</option>
                                    </select>                                  </td>
                                </tr>
								<tr >
                                  <td height="28">&nbsp;</td>
                                  <td height="28">Security code£º</td>
                                  <td width="55" height="28"><input name="yzm" type="text" id="yzm" style=" height:20px; border:solid 1px #000000; color:#666666; width:50px" /></td>
                                  <td width="160"><img alt="Refresh" onclick="this.src='code.php?time='+new Date().getTime();" src="code.php?time='+new Date().getTime();" style="cursor:hand" /></td>
								</tr>
                                <tr>
                                  <td height="38" colspan="4" align="center"><input type="submit" name="Submit" value="Login" style=" height:19px; border:solid 1px #000000; color:#666666" onclick="return checklog();" />
                                      <input type="reset" name="Submit2" value="Reset" style=" height:19px; border:solid 1px #000000; color:#666666" /></td>
                                </tr>
                              </form>
                            </table>
                            <?php 
							}
				  else
				  {
				 ?>
                            <table width="93%" height="68%" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td height="28" align="left">Current User£º<?php echo $_SESSION['username']?></td>
                              </tr>
                              <tr>
                                <td height="28" align="left">Authority£º<?php echo $_SESSION['cx']?></td>
                              </tr>
                              <tr>
                                <td height="28" align="left">Welcome!!!</td>
                              </tr>
                              <tr>
                                <td height="28" align="center"><input type="button" name="Submit3" value="Logout" onclick="javascript:location.href='logout.php';" style=" height:19px; border:solid 1px #000000; color:#666666" />
                                    <input type="button" name="Submit22" value="Personal" onclick="javascript:location.href='main.php';" style=" height:19px; border:solid 1px #000000; color:#666666" /></td>
                              </tr>
                            </table>
                            <?php } ?>                            </td>
                          <td width="17" background="qtimages/1_02_01_01_02_03.jpg">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="qtimages/1_02_01_01_03.jpg" width="321" height="9" alt=""></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><table id="__01" width="321" height="186" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="321" height="45" background="qtimages/1_02_01_01_01.jpg"><table width="100%" height="20" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="18%" height="20" align="right" valign="bottom"><span class="STYLE5 STYLE2"><strong>Search</strong></span></td>
                          <td width="62%">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="321" height="132" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="25" background="qtimages/1_02_01_01_02_01.jpg">&nbsp;</td>
                          <td width="279" height="132"><table width="93%" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                            <form action="news.php" method="post" name="formsearch" id="formsearch">
                              <tr>
                                <td width="19%">Title</td>
                                <td width="81%"><input name="biaoti" type="text" id="biaoti" size="20" style="width:130px; height:25px; border:solid 1px #000000; color:#666666" /></td>
                              </tr>
                              <tr>
                                <td>Type</td>
                                <td><select name="lb" style="width:130px; height:25px; border:solid 1px #000000; color:#666666">
                                    <?php
								  $sql="select distinct(leibie) from xinwentongzhi";
								  $query=mysql_query($sql);
								$rowscount=mysql_num_rows($query);
								if($rowscount>0)
								{
								for($i=0;$i<$rowscount;$i++)
	 							{
								  ?>
								  <option value="<?php echo mysql_result($query,$i,"leibie")?>"><?php echo mysql_result($query,$i,"leibie")?></option>
								  <?php
								  }
								  }
								  ?>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><input type="submit" name="Submit4" value="Submit" style=" height:19px; border:solid 1px #000000; color:#666666" /></td>
                              </tr>
                            </form>
                          </table></td>
                          <td width="17" background="qtimages/1_02_01_01_02_03.jpg">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="qtimages/1_02_01_01_03.jpg" width="321" height="9" alt=""></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><table id="__01" width="321" height="228" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="321" height="45" background="qtimages/1_02_01_01_01.jpg"><table width="100%" height="20" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="18%" height="20" align="right" valign="bottom"><span class="STYLE5 STYLE2"><strong>Links</strong></span></td>
                          <td width="62%">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="321" height="174" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="25" background="qtimages/1_02_01_01_02_01.jpg">&nbsp;</td>
                          <td width="279" height="174"><table class="newsline" cellspacing="0" cellpadding="0" width="100%" 
                  align="center" border="0">
                            <tbody>
                              <?php 
					  $sql="select * from youqinglianjie order by id desc";
					  $query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount>0)
					  {
					  	for($i=0;$i<$rowscount;$i++)
						{
						?>
                              <tr>
                                <td width="12%" height="25" align="center"><span class="STYLE2"><img src="qtimages/1.jpg" /></span></td>
                                <td width="20%" height="25"><a href="<?php echo mysql_result($query,$i,"wangzhi");?>" target="_blank" ><?php echo mysql_result($query,$i,"wangzhanmingcheng");?></a></td>
                                <td width="68%" height="25"><a href="<?php echo mysql_result($query,$i,"wangzhi");?>" target="_blank" ><?php echo mysql_result($query,$i,"wangzhi");?></a></td>
                              </tr>
                              <?php
						}
					  }
					  ?>
                            </tbody>
                          </table></td>
                          <td width="17" background="qtimages/1_02_01_01_02_03.jpg">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="qtimages/1_02_01_01_03.jpg" width="321" height="9" alt=""></td>
                  </tr>
                </table></td>
              </tr>
            </table>