<html>
 <head>
  <title>BZFS List</title>
  <script src="shindow/shindow.js"></script>
  <link rel="STYLESHEET" href="shindow/shindow.css" type="text/css" />
  <link rel="STYLESHEET" href="style.css" type="text/css" />
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

<div id="bdbbox" style="position: absolute; visibility: hidden;">
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
<tr>
 <td style="background: url(shindow/sh_tl.png) bottom right no-repeat; height: 10px; width: 10px;"></td>
 <td style="background: url(shindow/sh_t.png) bottom repeat-x; height: 10px;"></td>
 <td style="background: url(shindow/sh_tr.png) bottom left no-repeat; height: 10px; width: 10px;"></td>
</tr><tr>
 <td style="background: url(shindow/sh_l.png) right repeat-y; width: 10px;"></td>
 <td style="background: url(shindow/bg.png) repeat;">
<b>Available BDBs:</b><br/>
<?php
 $maps = glob("bdbs/*");
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

<div id="rdbbox" style="position: absolute; visibility: hidden;">
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
<tr>
 <td style="background: url(shindow/sh_tl.png) bottom right no-repeat; height: 10px; width: 10px;"></td>
 <td style="background: url(shindow/sh_t.png) bottom repeat-x; height: 10px;"></td>
 <td style="background: url(shindow/sh_tr.png) bottom left no-repeat; height: 10px; width: 10px;"></td>
</tr><tr>
 <td style="background: url(shindow/sh_l.png) right repeat-y; width: 10px;"></td>
 <td style="background: url(shindow/bg.png) repeat;">
<b>Available Reportfiles:</b><br/>
<?php
 $maps = glob("reports/*");
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
 $cfgs = glob("cfgs/*");
 $cfgs_ammount = count($cfgs);
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
</select> <input value="Edit" type="submit" />
</fieldset>
<br/><br/><br/><br/><u>Crate a New Configuration and Start it</u><br/>
</fieldset>
</form>
<form action="exec.php?mode=start-new" method="POST">
<fieldset>
 <legend>Gameplay Settings</legend>
<select name="style">
<option value="gtn">None (FFA)</option>
<option value="gtc">Capture The Flag</option>
<option value="gtcr">Capture The Flag Random Map</option>
<option value="gtrs">Rabbit Chase: Score Rabbit</option>
<option value="gtrk">Rabbit Chase: Killer Rabbit</option>
<option value="gtrr">Rabbit Chase: Random Rabbit</option>
</select> Game Type<br/>
<input name="j" type="checkbox" /> Jumping<br/>
<input name="r" type="checkbox" /> Ricochet<br/>
<input name="ms" type="checkbox" /> Max Shots <input type="text" size="2" maxlength="2" name="msv" /> <small>can be a noumber up to 20, if not checked 1 is used</small><br/>
</fieldset><br/>
<fieldset>
 <legend>Player and Team Settings</legend>
<input name="autoteam" type="checkbox" /> Autoteam<br/>
 <fieldset><legend><input name="mp" type="checkbox" /> Maximum Players</legend>
<input name="rogue" type="text" value="0" size="2" maxlength="2" /> Rogues<br>
<input name="red" type="text" value="0" size="2" maxlength="2" /> Reds<br/>
<input name="green" type="text"  value="0" size="2" maxlength="2" /> Greens<br/>
<input name="blue" type="text" value="0" size="2" maxlength="2" /> Blues<br/>
<input name="purple" type="text" value="0" size="2" maxlength="2" /> Purples<br/>
<input name="observer" type="text" value="0" size="2" maxlength="2" /> Observers<br/>
<img src="img/attention.jpg" align="absbottom" /> If this is not enabled, the server will allow an infinite ammount of players!
 </fieldset><br/>
<input name="groupdb" type="checkbox" /> <input onFocus="showmenu('gdbbox',this.offsetLeft,this.offsetTop+19,this.offsetWidth);"  onBlur="hidemenu('gdbbox');" type="text" name="groupdbfile" size="38" /> Group Database <small>(local path on server machine)</small><br/>
<input name="userdb" type="checkbox" /> <input onFocus="showmenu('udbbox',this.offsetLeft,this.offsetTop+19,this.offsetWidth);"  onBlur="hidemenu('udbbox');" type="text" name="userdbfile" size="38" /> User Database <small>(local path on server machine)</small><br/>
<input name="bandb" type="checkbox" /> <input onFocus="showmenu('bdbbox',this.offsetLeft,this.offsetTop+19,this.offsetWidth);"  onBlur="hidemenu('bdbbox');" type="text" name="bandbfile" size="38" /> Ban Database <small>(local path on server machine)</small><br/>
<input name="nomasterban" type="checkbox" /> No Master Banlist<br/>
<input name="reportf" type="checkbox" /> <input onFocus="showmenu('rdbbox',this.offsetLeft,this.offsetTop+19,this.offsetWidth);"  onBlur="hidemenu('rdbbox');" type="text" name="reportfv" size="38" /> Report File <small>(local path on server machine)</small><br/>
</fieldset><br/>
<fieldset>
 <legend>Flag Settings</legend>
<input name="pf" type="checkbox" /> Add Flags <input type="text" size="6" name="pfv" /> <small>enter <i>GROUP</i>{<i>COUNT</i>} or <i>ID</i>{<i>COUNT</i>} here. e.g.: <i>good{2}</i> or <i>CL{3}</i></small><br/>
<input name="pf1" type="checkbox" /> Add Flags <input type="text" size="6" name="pf1v" /> <small>Just the same as above.</small><br/>
<input name="pf2" type="checkbox" /> Add Flags <input type="text" size="6" name="pf2v" /> <small>Just the same.</small><br/>
<input name="pf3" type="checkbox" /> Add Flags <input type="text" size="6" name="pf3v" /> <small>The same ...</small><br/>
<input name="pf4" type="checkbox" /> Add Flags <input type="text" size="6" name="pf4v" /> <small>Still the same ...</small><br/>
<input name="pf5" type="checkbox" /> Add Flags <input type="text" size="6" name="pf5v" /> <small>...</small><br/>
<input name="pf6" type="checkbox" /> Add Flags <input type="text" size="6" name="pf6v" /> <small>...</small><br/>
<input name="pf7" type="checkbox" /> Add Flags <input type="text" size="6" name="pf7v" /> <small>Last chance!</small><br/>
<input name="fb" type="checkbox" /> Flags on Buildings<br/>
</fieldset><br/>
<fieldset>
 <legend>World Settings</legend>
<input name="world" type="checkbox" /> <input onFocus="showmenu('mapsbox',this.offsetLeft,this.offsetTop+19,this.offsetWidth);"  onBlur="hidemenu('mapsbox');" type="text" name="worldfile" size="38" /> Map File <small>(local path on server machine)</small><br/>
<img src="img/attention.jpg" align="absbottom" /> Do not check any of this if you want to use a Random Map
</fieldset><br/>
<fieldset>
 <legend>Random Map Settings <small>(for use with random maps only)</small></legend>
<input name="b" type="checkbox" /> Random Rotation<br/>
<input name="h" type="checkbox" /> Random Height<br/>
<input name="worldsize" type="checkbox" /> <input type="text" name="worldsizev" size="3" maxlength="4" /> World Size, if not set 400 is used<br/>
<img src="img/attention.jpg" align="absbottom" /> Do not check any of this if you want to use a Map File
</fieldset><br/>
<fieldset>
 <legend>Network Settings</legend>
<input name="i" type="checkbox" /> <input type="text" size="15" maxlength="15" name="iv" /> Interface (which IP to listen on) <small>If not set first IP of eth0 is used</small><br/>
<input name="p" type="checkbox" /> <input type="text" size="5" maxlength="5" name="pv" /> Port (which port to listen on) <small>If not set 5154 is used</small><br/>
</fieldset><br/>
<fieldset>
 <legend>Public Settings</legend>
<input name="public" type="checkbox" /> <input name="publicv" size="35" maxlength="60" /> Public <small>This makes the server public! Enter the Title (the text next to address in server list) here.</small><br/>
<input name="publicaddr" type="checkbox" /> <input type="text" size="25" maxlength="106" name="publicaddrv" /> Public Address <small>If not set Interface and Port from Network Settings (or if they aren't set defaults of them) are used. You can either use an IP or a Hostname here. Example: <i>bzfs.bzflag.org:1234</i></small><br/>
</fieldset><br/>
<fieldset>
 <legend>Miscellaneous Settings</legend>
<input name="disableBots" type="checkbox" /> Disable Bots<br/>
<input name="owncmd" type="text" size="50" /> Own Command Line Options <small>thought for more expertised users</small><br/>
<input name="srvmsg" type="checkbox" /> Add SRVMSG Line <input type="text" size="30" name="srvmsgv" /> enter your SRVMSG here.<br/>
<input name="srvmsg1" type="checkbox" /> Add SRVMSG Line <input type="text" size="30" name="srvmsg1v" /> <small>Or here.</small><br/>
<input name="srvmsg2" type="checkbox" /> Add SRVMSG Line <input type="text" size="30" name="srvmsg2v" /> <small>Or here.</small><br/>
<input name="srvmsg3" type="checkbox" /> Add SRVMSG Line <input type="text" size="30" name="srvmsg3v" /> <small>Or here ...</small><br/>
<input name="srvmsg4" type="checkbox" /> Add SRVMSG Line <input type="text" size="30" name="srvmsg4v" /> <small>here, too ...</small><br/>
<input name="srvmsg5" type="checkbox" /> Add SRVMSG Line <input type="text" size="30" name="srvmsg5v" /> <small>...</small><br/>
<input name="srvmsg6" type="checkbox" /> Add SRVMSG Line <input type="text" size="30" name="srvmsg6v" /> <small>...</small><br/>
<input name="srvmsg7" type="checkbox" /> Add SRVMSG Line <input type="text" size="30" name="srvmsg7v" /> <small>Last chance!</small><br/>
<input name="admsg" type="checkbox" /> Add ADMSG Line <input type="text" size="30" name="admsgv" /> enter your ADMSG here.<br/>
<input name="admsg1" type="checkbox" /> Add ADMSG Line <input type="text" size="30" name="admsg1v" /> <small>Or here.</small><br/>
<input name="admsg2" type="checkbox" /> Add ADMSG Line <input type="text" size="30" name="admsg2v" /> <small>Or here.</small><br/>
<input name="admsg3" type="checkbox" /> Add ADMSG Line <input type="text" size="30" name="admsg3v" /> <small>Or here ...</small><br/>
<input name="admsg4" type="checkbox" /> Add ADMSG Line <input type="text" size="30" name="admsg4v" /> <small>here, too ...</small><br/>
<input name="admsg5" type="checkbox" /> Add ADMSG Line <input type="text" size="30" name="admsg5v" /> <small>...</small><br/>
<input name="admsg6" type="checkbox" /> Add ADMSG Line <input type="text" size="30" name="admsg6v" /> <small>...</small><br/>
<input name="admsg7" type="checkbox" /> Add ADMSG Line <input type="text" size="30" name="admsg7v" /> <small>Last chance!</small><br/>

</fieldset>
<br/><br/>
<center>
<?php if ( $cfgs_ammount < $max_cfgs ) { ?><input name="savetoconfig" name="savetoconfig" type="checkbox" /><input name="configname" type="text" value="filename.cfg" /> Save To a New Configuration File<br/><?php } ?>
<?php if ( $i < $max_bzfs ) { ?><input value="           Start           " type="submit" /><?php } else { ?>You already run as much servers as allowed!<?php } ?>
</center>
</form>
<br/><br/>
</body>
</html>
