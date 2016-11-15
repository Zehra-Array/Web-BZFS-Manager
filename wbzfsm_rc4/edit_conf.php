<html>
 <head>
  <title>BZFS List</title>
  
		<link rel="STYLESHEET" href="style.css" type="text/css" />
  <script src="shindow/shindow.js"></script>
  <link rel="STYLESHEET" href="shindow/shindow.css" type="text/css" />

 </head>
<body>
	
<div id="mapsbox" style="position: absolute; visibility: hidden;">
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
<tr>
 <td style="background: url(shindow/sh_tl.png) bottom right no-repeat; height: 10px; width: 10px;"></td>
 <td style="background: url(shindow/sh_t.png) bottom repeat-x; height: 10px;"></td>
 <td style="background: url(shindow/sh_tr.png) bottom left no-repeat; height: 10px; width: 10px;"></td>
</tr><tr>
 <td style="background: url(shindow/sh_l.png) right repeat-y; width: 10px;"></td>
 <td style="background: url(shindow/bg.png) repeat;">
<b>Available Maps:</b><br/>
<?php
 $maps = glob("maps/*");
 foreach ( $maps as $map ) {
  echo "".$map."<br/>";
 }
?>
 </td>
 <td style="background: url(shindow/sh_r.png) left repeat-y; width: 10px;"></td>
</tr><tr>
 <td style="background: url(shindow/sh_bl.png) top right no-repeat; height: 10px; width: 10px;"></td>
 <td style="background: url(shindow/sh_b.png) top repeat-x; height: 10px;"></td>
 <td style="background: url(shindow/sh_br.png) top left no-repeat; height: 10px; width: 10px;"></td>
</tr>
</table>
</div>

<div id="gdbbox" style="position: absolute; visibility: hidden;">
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
<tr>
 <td style="background: url(shindow/sh_tl.png) bottom right no-repeat; height: 10px; width: 10px;"></td>
 <td style="background: url(shindow/sh_t.png) bottom repeat-x; height: 10px;"></td>
 <td style="background: url(shindow/sh_tr.png) bottom left no-repeat; height: 10px; width: 10px;"></td>
</tr><tr>
 <td style="background: url(shindow/sh_l.png) right repeat-y; width: 10px;"></td>
 <td style="background: url(shindow/bg.png) repeat;">
<b>Available GDBs:</b><br/>
<?php
 $maps = glob("gdbs/*");
 foreach ( $maps as $map ) {
  echo "".$map."<br/>";
 }
?>
 </td>
 <td style="background: url(shindow/sh_r.png) left repeat-y; width: 10px;"></td>
</tr><tr>
 <td style="background: url(shindow/sh_bl.png) top right no-repeat; height: 10px; width: 10px;"></td>
 <td style="background: url(shindow/sh_b.png) top repeat-x; height: 10px;"></td>
 <td style="background: url(shindow/sh_br.png) top left no-repeat; height: 10px; width: 10px;"></td>
</tr>
</table>
</div>

<div id="udbbox" style="position: absolute; visibility: hidden;">
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
<tr>
 <td style="background: url(shindow/sh_tl.png) bottom right no-repeat; height: 10px; width: 10px;"></td>
 <td style="background: url(shindow/sh_t.png) bottom repeat-x; height: 10px;"></td>
 <td style="background: url(shindow/sh_tr.png) bottom left no-repeat; height: 10px; width: 10px;"></td>
</tr><tr>
 <td style="background: url(shindow/sh_l.png) right repeat-y; width: 10px;"></td>
 <td style="background: url(shindow/bg.png) repeat;">
<b>Available UDBs:</b><br/>
<?php
 $maps = glob("udbs/*");
 foreach ( $maps as $map ) {
  echo "".$map."<br/>";
 }
?>
 </td>
 <td style="background: url(shindow/sh_r.png) left repeat-y; width: 10px;"></td>
</tr><tr>
 <td style="background: url(shindow/sh_bl.png) top right no-repeat; height: 10px; width: 10px;"></td>
 <td style="background: url(shindow/sh_b.png) top repeat-x; height: 10px;"></td>
 <td style="background: url(shindow/sh_br.png) top left no-repeat; height: 10px; width: 10px;"></td>
</tr>
</table>
</div>


<b><u>Start a BZFS</u></b><br/><br/>
&raquo; <a href="http://my.bzflag.org/w/BZFS_Command_Line_Options">Detailed command line options information</a>
<br/><br/>
<b><img src="img/attention.jpg" align="absbottom" /> If it stays loading after klicking "Start", your BZFS is probably up! See <a href="listserv.php">List</a> for more information.</b>
<br/><br/>
<?php
 include("user_conf.php");
 $bzfsr = explode("\n",`ps -Af | grep bzfs`);
 //$bzfs_ammount = count($bzfsr);
 unset($bzfsr[count($bzfsr)-1]);
 $i = 0;
  foreach ( $bzfsr as $bzfsl ) {
   preg_match('/bzfs      (.*?) (.*?) 0 (..)\:(..) (.*?)(..)\:(..)\:(..) (.*?$)/',$bzfsl,$bzfspid);
    if ( preg_match('/^\/usr\/games\/bzfs(.*?$)/',$bzfspid[9]) ) {
     $i++;
    }
  }
 $cfgs = glob("cfgs/*"); // list of available configs (array)
 $cfgs_ammount = count($cfgs); // noumber of available configs (int)
 
 // ******************** /PARSE COMMAND LINE OPTIONS FOR EDITING VALUES/ ********************
 
 $cfgf = $_POST['configfile']; // resave configuration path
 $cfgv = file_get_contents($cfgf); // read configuration to edit
 
 if ( preg_match("/\-j/",$cfgv) ) { $jumping = true; } else { $jumping = false; }
 if ( preg_match("/\+r/",$cfgv) ) { $rico = true; } else { $rico = false; }
 preg_match("/\-ms (.*?) /",$cfgv,$ms); if ( $ms[0] != "") { $msv = true; } else { $msv = false; }
 preg_match("/-r (.*?) /",$cfgv,$r); if ( $r[0] != "") { $rv = true; } else { $rv = false; }
 if ( preg_match("/\-c$/",$cfgv) ) { $c = true; } else { $c = false; }
 if ( preg_match("/\-cr/",$cfgv) ) { $cr = true; } else { $cr = false; }
 if ( preg_match("/\-autoTeam/",$cfgv) ) { $autoteam = true; } else { $autoteam = false; }
 if ( preg_match("/\-noMasterBanlist/",$cfgv) ) { $nmbl = true; } else { $nmbl = false; }
 preg_match("/-mp (.*?),(.*?),(.*?),(.*?),(.*?),(.*?) /",$cfgv,$mp); if ( $mp[0] != "") { $mpv = true; } else { $mpv = false; } // $mp[N] 1=Rg,2=Rd,3=G,4=B,5=P,6=O
 preg_match("/-groupdb (.*?) /",$cfgv,$gdb); if ( $gdb[0] != "") { $gdbv = true; } else { $gdbv = false; }
 preg_match("/-groupdb (.*?) /",$cfgv,$udb); if ( $udb[0] != "") { $udbv = true; } else { $udbv = false; }
 preg_match("/-groupdb (.*?) /",$cfgv,$bdb); if ( $bdb[0] != "") { $bdbv = true; } else { $bdbv = false; }
 preg_match("/-groupdb (.*?) /",$cfgv,$rdb); if ( $rdb[0] != "") { $rdbv = true; } else { $rdbv = false; }
 preg_match("/-world \"(.*?)\" /",$cfgv,$world); if ( $world[0] != "") { $worldv = true; } else { $worldv = false; }
 if ( preg_match("/\-b$/",$cfgv) ) { $b = true; } else { $b = false; }
 if ( preg_match("/\-h$/",$cfgv) ) { $h = true; } else { $h = false; }
 preg_match("/-worldsize (.*?) /",$cfgv,$worldsize); if ( $worldsize[0] != "") { $worldsizev = true; } else { $worldsizev = false; }
 preg_match("/-i (.*?) /",$cfgv,$interface); if ( $interface[0] != "") { $worldsizev = true; } else { $interfacev = false; }
 preg_match("/-p (.*?) /",$cfgv,$port); if ( $port[0] != "") { $portv = true; } else { $portv = false; }
 preg_match("/-public \"(.*?)\" /",$cfgv,$public); if ( $public[0] != "") { $publicv = true; } else { $publicv = false; }
 preg_match("/-publicaddr (.*?) /",$cfgv,$publicaddr); if ( $publicaddr[0] != "") { $publicaddrv = true; } else { $publicaddrv = false; }
 if ( preg_match("/\-disableBots/",$cfgv) ) { $dbots = true; } else { $dbots = false; }
 
 // ******************** /START/ /PARSE FLAGS/ ********************
 $substring = $cfgv;
 $found=0;
 for ( $i=0; $i > -1; $i++) {
 	 preg_match("/\+f (.*?) /",$substring,$afx); if ( $afx[0] != "") { $afv = true; } else { $afv = false; }
 	 	if ( $afv ) {
 	 		$substring = str_replace($afx[0],"",$substring);
 	 		$af[$found]['i'] = true;
 	 		$af[$found]['v'] = $afx[1];
 	 		$found++;
 	 	} else {
 	 		break;
 	 	}
 } 
 // ******************** /END/ /PARSE FLAGS/ ********************
 
 if ( preg_match("/\-fb/",$cfgv) ) { $fb = true; } else { $fb = false; }
 
  // ******************** /START/ /PARSE SRVMSGs/ ********************
 $substring = $cfgv;
 $foundb=0;
 for ( $i=0; $i > -1; $i++) {
 	 preg_match("/\-srvmsg \"(.*?)\" /",$substring,$srvmsgx); if ( $srvmsgx[0] != "") { $srvmsgv = true; } else { $srvmsgv = false; }
 	 	if ( $afv ) {
 	 		$substring = str_replace($srvmsgx[0],"",$substring);
 	 		$srvmsg[$found]['i'] = true;
 	 		$srvmsg[$found]['v'] = $srvmsgx[1];
 	 		$foundb++;
 	 	} else {
 	 		break;
 	 	}
 } 
 // ******************** /END/ /PARSE SRVMSGs/ ********************
 
  // ******************** /START/ /PARSE ADMSGs/ ********************
 $substring = $cfgv;
 $foundc=0;
 for ( $i=0; $i > -1; $i++) {
 	 preg_match("/\-admsg \"(.*?)\" /",$substring,$admsgx); if ( $admsgx[0] != "") { $admsgv = true; } else { $admsgv = false; }
 	 	if ( $afv ) {
 	 		$substring = str_replace($admsgx[0],"",$substring);
 	 		$admsg[$found]['i'] = true;
 	 		$admsg[$found]['v'] = $admsgx[1];
 	 		$foundc++;
 	 	} else {
 	 		break;
 	 	}
 } 
 // ******************** /END/ /PARSE ADMSGs/ ********************
 
?>
You are running <b><?php echo $i; ?></b> of <b><?php echo $max_bzfs; ?></b> BZFS instances.<br/>
You are having <b><?php echo $cfgs_ammount; ?></b> of <b><?php echo $max_cfgs; ?></b> configs.
<br/><br/>
<form action="exec.php?mode=start-saved" method="POST">
<fieldset>
 <legend>Start from Saved Configuration</legend>
<select name="configfile">
<?php
 foreach ( $cfgs as $cfg ) {
  echo "<option value='$cfg'>".basename($cfg)."</option>";
 }
?>
</select> <?php if ( $i < $max_bzfs ) { ?><input value="Start" type="submit" /><?php } else { ?>You already run as much servers as allowed!<?php } ?>
</fieldset>
</form>
<form action="edit_conf.php" method="POST">
<fieldset>
 <legend>Edit Saved Configuration</legend>
<select name="configfile">
<?php
 foreach ( $cfgs as $cfg ) {
  echo "<option value='$cfg'>".basename($cfg)."</option>";
 }
?>
</select><input value="Edit" type="submit" />
<br/><img src="img/done.jpg" align="absbottom" /> Form filled with setting loaded from <i><?php echo basename($_POST['configfile']); ?></i>!
</fieldset>
<br/><br/><br/><br/><u>Crate a New Configuration and Start it</u><br/>
</fieldset>
</form>
<form action="exec.php?mode=start-new" method="POST">
<fieldset>
 <legend>Gameplay Settings</legend>
<select name="style">
<option value="gtn">None (FFA)</option>
<option value="gtc" <?php if ( $c ) { echo "selected"; } ?>>Capture The Flag</option>
<option value="gtcr" <?php if ( $cr ) { echo "selected"; } ?>>Capture The Flag Random Map</option>
<option value="gtrs" <?php if ( $r[1] == "score" ) { echo "selected"; } ?>>Rabbit Chase: Score Rabbit</option>
<option value="gtrk" <?php if ( $r[1] == "killer" ) { echo "selected"; } ?>>Rabbit Chase: Killer Rabbit</option>
<option value="gtrr" <?php if ( $r[1] == "random" ) { echo "selected"; } ?>>Rabbit Chase: Random Rabbit</option>
</select> Game Type<br/>
<input name="j" type="checkbox" <?php if ( $jumping ) { echo "checked"; } ?> /> Jumping<br/>
<input name="r" type="checkbox" <?php if ( $rico ) { echo "checked"; } ?> /> Ricochet<br/>
<input name="ms" type="checkbox" <?php if ( $msv ) { echo "checked"; } ?> /> Max Shots <input value="<?php echo $ms[1]; ?>" type="text" size="2" maxlength="2" name="msv" /> <small>can be a noumber up to 20, if not checked 1 is used</small><br/>
</fieldset><br/>
<fieldset>
 <legend>Player and Team Settings</legend>
<input name="autoteam" type="checkbox" <?php if ( $autoteam ) { echo "checked"; } ?> /> Autoteam<br/>
 <fieldset><legend><input name="mp" type="checkbox" <?php if ( $mpv ) { echo "checked"; } ?> /> Maximum Players</legend>
<input value="<?php echo $mp[1]; ?>" name="rogue" type="text" value="0" size="2" maxlength="2" /> Rogues<br>
<input value="<?php echo $mp[2]; ?>" name="red" type="text" value="0" size="2" maxlength="2" /> Reds<br/>
<input value="<?php echo $mp[3]; ?>" name="green" type="text"  value="0" size="2" maxlength="2" /> Greens<br/>
<input value="<?php echo $mp[4]; ?>" name="blue" type="text" value="0" size="2" maxlength="2" /> Blues<br/>
<input value="<?php echo $mp[5]; ?>" name="purple" type="text" value="0" size="2" maxlength="2" /> Purples<br/>
<input value="<?php echo $mp[6]; ?>" name="observer" type="text" value="0" size="2" maxlength="2" /> Observers<br/>
<img src="img/attention.jpg" align="absbottom" /> If this is not enabled, the server will allow an infinite ammount of players!
 </fieldset><br/>
<input name="groupdb" type="checkbox" <?php if ( $gdbv ) { echo "checked"; } ?> /> <input onFocus="showmenu('gdbbox',this.offsetLeft,this.offsetTop+19,this.offsetWidth);"  onBlur="hidemenu('gdbbox');" value="<?php echo $gdb[1]; ?>" type="text" name="groupdbfile" size="38" /> Group Database <small>(local path on server machine)</small><br/>
<input name="userdb" type="checkbox" <?php if ( $udbv ) { echo "checked"; } ?> /> <input onFocus="showmenu('udbbox',this.offsetLeft,this.offsetTop+19,this.offsetWidth);"  onBlur="hidemenu('udbbox');" value="<?php echo $udb[1]; ?>" type="text" name="userdbfile" size="38" /> User Database <small>(local path on server machine)</small><br/>
<input name="bandb" type="checkbox" <?php if ( $bdbv ) { echo "checked"; } ?> /> <input onFocus="showmenu('bdbbox',this.offsetLeft,this.offsetTop+19,this.offsetWidth);"  onBlur="hidemenu('ndbbox');" value="<?php echo $bdb[1]; ?>" type="text" name="bandbfile" size="38" /> Ban Database <small>(local path on server machine)</small><br/>
<input name="nomasterban" type="checkbox" <?php if ( $nmbl ) { echo "checked"; } ?> /> No Master Banlist<br/>
<input name="reportf" type="checkbox" <?php if ( $rdbv ) { echo "checked"; } ?> /> <input onFocus="showmenu('rdbbox',this.offsetLeft,this.offsetTop+19,this.offsetWidth);"  onBlur="hidemenu('rdbbox');" value="<?php echo $rdb[1]; ?>" type="text" name="reportfv" size="38" /> Report File <small>(local path on server machine)</small><br/>
</fieldset><br/>
<fieldset>
 <legend>Flag Settings</legend>
<input name="pf" type="checkbox" <?php if ( $af[0]['i'] ) { echo "checked"; } ?> /> Add Flags <input value="<?php echo $af[0]['v']; ?>" type="text" size="6" name="pfv" /> <small>enter <i>GROUP</i>{<i>COUNT</i>} or <i>ID</i>{<i>COUNT</i>} here. e.g.: <i>good{2}</i> or <i>CL{3}</i></small><br/>
<input name="pf1" type="checkbox" <?php if ( $af[1]['i'] ) { echo "checked"; } ?> /> Add Flags <input value="<?php echo $af[1]['v']; ?>" type="text" size="6" name="pf1v" /> <small>Just the same as above.</small><br/>
<input name="pf2" type="checkbox" <?php if ( $af[2]['i'] ) { echo "checked"; } ?> /> Add Flags <input value="<?php echo $af[2]['v']; ?>" type="text" size="6" name="pf2v" /> <small>Just the same.</small><br/>
<input name="pf3" type="checkbox" <?php if ( $af[3]['i'] ) { echo "checked"; } ?> /> Add Flags <input value="<?php echo $af[3]['v']; ?>" type="text" size="6" name="pf3v" /> <small>The same ...</small><br/>
<input name="pf4" type="checkbox" <?php if ( $af[4]['i'] ) { echo "checked"; } ?> /> Add Flags <input value="<?php echo $af[4]['v']; ?>" type="text" size="6" name="pf4v" /> <small>Still the same ...</small><br/>
<input name="pf5" type="checkbox" <?php if ( $af[5]['i'] ) { echo "checked"; } ?> /> Add Flags <input value="<?php echo $af[5]['v']; ?>" type="text" size="6" name="pf5v" /> <small>...</small><br/>
<input name="pf6" type="checkbox" <?php if ( $af[6]['i'] ) { echo "checked"; } ?> /> Add Flags <input value="<?php echo $af[6]['v']; ?>" type="text" size="6" name="pf6v" /> <small>...</small><br/>
<input name="pf7" type="checkbox" <?php if ( $af[7]['i'] ) { echo "checked"; } ?> /> Add Flags <input value="<?php echo $af[7]['v']; ?>" type="text" size="6" name="pf7v" /> <small>Last chance!</small><br/>
<input name="fb" type="checkbox" <?php if ( $fb ) { echo "checked"; } ?> /> Flags on Buildings<br/>
</fieldset><br/>
<fieldset>
 <legend>World Settings</legend>
<input name="world" type="checkbox" <?php if ( $worldv ) { echo "checked"; } ?> /> <input value="<?php echo $world[1]; ?>" type="text" name="worldfile" size="38" /> Map File <small>(local path on server machine)</small><br/>
<img src="img/attention.jpg" align="absbottom" /> Do not check any of this if you want to use a Random Map
</fieldset><br/>
<fieldset>
 <legend>Random Map Settings <small>(for use with random maps only)</small></legend>
<input name="b" type="checkbox" <?php if ( $b ) { echo "checked"; } ?> /> Random Rotation<br/>
<input name="h" type="checkbox" <?php if ( $h ) { echo "checked"; } ?> /> Random Height<br/>
<input name="worldsize" type="checkbox" <?php if ( $worldsizev ) { echo "checked"; } ?> /> <input value="<?php echo $worldsize[1]; ?>" type="text" name="worldsizev" size="3" maxlength="4" /> World Size, if not set 400 is used<br/>
<img src="img/attention.jpg" align="absbottom" /> Do not check any of this if you want to use a Map File
</fieldset><br/>
<fieldset>
 <legend>Network Settings</legend>
<input name="i" type="checkbox" <?php if ( $interfacev ) { echo "checked"; } ?> /> <input value="<?php echo $interface[1]; ?>" type="text" size="15" maxlength="15" name="iv" /> Interface (which IP to listen on) <small>If not set first IP of eth0 is used</small><br/>
<input name="p" type="checkbox" <?php if ( $portv ) { echo "checked"; } ?> /> <input value="<?php echo $port[1]; ?>" type="text" size="5" maxlength="5" name="pv" /> Port (which port to listen on) <small>If not set 5154 is used</small><br/>
</fieldset><br/>
<fieldset>
 <legend>Public Settings</legend>
<input name="public" type="checkbox" <?php if ( $publicv ) { echo "checked"; } ?> /> <input value="<?php echo $public[1]; ?>" name="publicv" size="35" maxlength="60" /> Public <small>This makes the server public! Enter the Title (the text next to address in server list) here.</small><br/>
<input name="publicaddr" type="checkbox" <?php if ( $publicaddrv ) { echo "checked"; } ?> /> <input value="<?php echo $publicaddr[1]; ?>" type="text" size="25" maxlength="106" name="publicaddrv" /> Public Address <small>If not set Interface and Port from Network Settings (or if they aren't set defaults of them) are used. You can either use an IP or a Hostname here. Example: <i>bzfs.bzflag.org:1234</i></small><br/>
</fieldset><br/>
<fieldset>
 <legend>Miscellaneous Settings</legend>
<input name="disableBots" type="checkbox" <?php if ( $dbots ) { echo "checked"; } ?> /> Disable Bots<br/>
<!--<input name="owncmd" type="text" size="50" /> Own Command Line Options <small>thought for more expertised users</small><br/>-->
<input name="srvmsg" type="checkbox" <?php if ( $srvmsg[0]['i'] ) { echo "checked"; } ?> /> Add SRVMSG Line <input value="<?php echo $srvmsg[0]['v']; ?>" type="text" size="30" name="srvmsgv" /> enter your SRVMSG here.<br/>
<input name="srvmsg1" type="checkbox" <?php if ( $srvmsg[1]['i'] ) { echo "checked"; } ?> /> Add SRVMSG Line <input value="<?php echo $srvmsg[1]['v']; ?>" type="text" size="30" name="srvmsg1v" /> <small>Or here.</small><br/>
<input name="srvmsg2" type="checkbox" <?php if ( $srvmsg[2]['i'] ) { echo "checked"; } ?> /> Add SRVMSG Line <input value="<?php echo $srvmsg[2]['v']; ?>" type="text" size="30" name="srvmsg2v" /> <small>Or here.</small><br/>
<input name="srvmsg3" type="checkbox" <?php if ( $srvmsg[3]['i'] ) { echo "checked"; } ?> /> Add SRVMSG Line <input value="<?php echo $srvmsg[3]['v']; ?>" type="text" size="30" name="srvmsg3v" /> <small>Or here ...</small><br/>
<input name="srvmsg4" type="checkbox" <?php if ( $srvmsg[4]['i'] ) { echo "checked"; } ?> /> Add SRVMSG Line <input value="<?php echo $srvmsg[4]['v']; ?>" type="text" size="30" name="srvmsg4v" /> <small>here, too ...</small><br/>
<input name="srvmsg5" type="checkbox" <?php if ( $srvmsg[5]['i'] ) { echo "checked"; } ?> /> Add SRVMSG Line <input value="<?php echo $srvmsg[5]['v']; ?>" type="text" size="30" name="srvmsg5v" /> <small>...</small><br/>
<input name="srvmsg6" type="checkbox" <?php if ( $srvmsg[6]['i'] ) { echo "checked"; } ?> /> Add SRVMSG Line <input value="<?php echo $srvmsg[6]['v']; ?>" type="text" size="30" name="srvmsg6v" /> <small>...</small><br/>
<input name="srvmsg7" type="checkbox" <?php if ( $srvmsg[7]['i'] ) { echo "checked"; } ?> /> Add SRVMSG Line <input value="<?php echo $srvmsg[7]['v']; ?>" type="text" size="30" name="srvmsg7v" /> <small>Last chance!</small><br/>
<input name="admsg" type="checkbox" <?php if ( $admsg[0]['i'] ) { echo "checked"; } ?> /> Add ADMSG Line <input value="<?php echo $srvmsg[0]['v']; ?>" type="text" size="30" name="admsgv" /> enter your ADMSG here.<br/>
<input name="admsg1" type="checkbox" <?php if ( $admsg[1]['i'] ) { echo "checked"; } ?> /> Add ADMSG Line <input value="<?php echo $srvmsg[1]['v']; ?>" type="text" size="30" name="admsg1v" /> <small>Or here.</small><br/>
<input name="admsg2" type="checkbox" <?php if ( $admsg[2]['i'] ) { echo "checked"; } ?> /> Add ADMSG Line <input value="<?php echo $srvmsg[2]['v']; ?>" type="text" size="30" name="admsg2v" /> <small>Or here.</small><br/>
<input name="admsg3" type="checkbox" <?php if ( $admsg[3]['i'] ) { echo "checked"; } ?> /> Add ADMSG Line <input value="<?php echo $srvmsg[3]['v']; ?>" type="text" size="30" name="admsg3v" /> <small>Or here ...</small><br/>
<input name="admsg4" type="checkbox" <?php if ( $admsg[4]['i'] ) { echo "checked"; } ?> /> Add ADMSG Line <input value="<?php echo $srvmsg[4]['v']; ?>" type="text" size="30" name="admsg4v" /> <small>here, too ...</small><br/>
<input name="admsg5" type="checkbox" <?php if ( $admsg[5]['i'] ) { echo "checked"; } ?> /> Add ADMSG Line <input value="<?php echo $srvmsg[5]['v']; ?>" type="text" size="30" name="admsg5v" /> <small>...</small><br/>
<input name="admsg6" type="checkbox" <?php if ( $admsg[6]['i'] ) { echo "checked"; } ?> /> Add ADMSG Line <input value="<?php echo $srvmsg[6]['v']; ?>" type="text" size="30" name="admsg6v" /> <small>...</small><br/>
<input name="admsg7" type="checkbox" <?php if ( $admsg[7]['i'] ) { echo "checked"; } ?> /> Add ADMSG Line <input value="<?php echo $srvmsg[7]['v']; ?>" type="text" size="30" name="admsg7v" /> <small>Last chance!</small><br/>

</fieldset>
<br/><br/>
<center>
<?php if ( $cfgs_ammount < $max_cfgs ) { ?><input name="savetoconfig" name="savetoconfig" type="checkbox" checked /><input name="configname" type="text" value="<?php echo basename($cfgf); ?>" /> Save To (a New) Configuration File<br/><?php } ?>
<?php if ( $i < $max_bzfs ) { ?><input value="           Start           " type="submit" /><?php } else { ?>You already run as much servers as allowed!<?php } ?>
</center>
</form>
<br/><br/>
</body>
</html>
