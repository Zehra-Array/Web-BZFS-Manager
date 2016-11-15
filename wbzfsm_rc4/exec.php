<?php
 include("user_conf.php");

 if ( !isset($_GET['mode']) ) { die("do not hack!"); }
 $mode = $_GET['mode'];
 
 if ( $mode == "start-saved" ) {
  $cmds = file_get_contents($_POST['configfile']);
  $bzfs = passthru("sudo -u bzfs /usr/games/bzfs ".$cmds." -conf ".$user_suffix." > /dev/null &");
  exec("echo 'done'");
  echo $bzfs;
 }
 if ( $mode == "start-new" ) {
  $cmds = " ";
  switch ($_POST['style']) {
   case "gtn": $cmds .= " "; break;
   case "gtc": $cmds .= "-c "; break;
   case "gtcr": $cmds .= "-cr "; break;
   case "gtrs": $cmds .= "-rabbit score "; break;
   case "gtrk": $cmds .= "-rabbit killer "; break;
   case "gtrr": $cmds .= "-rabbit random "; break;
  }
  if ( $_POST['j'] ) { $cmds .= "-j "; }
  if ( $_POST['r'] ) { $cmds .= "+r "; }
  if ( $_POST['ms'] && $_POST['msv'] != "" ) { $cmds .= "-ms ".$_POST['msv']." "; }
  if ( $_POST['autoteam'] ) { $cmds .= "-autoTeam "; }
  if ( $_POST['mp'] ) { $cmds .= "-mp ".$_POST['rogue'].",".$_POST['red'].",".$_POST['green'].",".$_POST['blue'].",".$_POST['purple'].",".$_POST['observer']." "; }
  if ( $_POST['groupdb'] && $_POST['groupdbfile'] != "" ) { $cmds .= "-groupdb \"".$_POST['groupdbfile']."\" "; }
  if ( $_POST['userdb'] && $_POST['userdbfile'] != "" ) { $cmds .= "-userdb \"".$_POST['userdbfile']."\" "; }
  if ( $_POST['bandb'] && $_POST['bandbfile'] != "" ) { $cmds .= "-bandb \"".$_POST['bandbfile']."\" "; }
  if ( $_POST['reportf'] && $_POST['reportfv'] != "" ) { $cmds .= "-reportfile \"".$_POST['reportfv']."\" "; }
  if ( $_POST['nomasterban'] ) { $cmds .= "-noMasterBanlist "; }
  if ( $_POST['pf'] && $_POST['pfv'] != "" ) { $cmds .= "+f ".$_POST['pfv']." "; }
  if ( $_POST['pf1'] && $_POST['pf1v'] != "" ) { $cmds .= "+f ".$_POST['pf1v']." "; }
  if ( $_POST['pf2'] && $_POST['pf2v'] != "" ) { $cmds .= "+f ".$_POST['pf2v']." "; }
  if ( $_POST['pf3'] && $_POST['pf3v'] != "" ) { $cmds .= "+f ".$_POST['pf3v']." "; }
  if ( $_POST['pf4'] && $_POST['pf4v'] != "" ) { $cmds .= "+f ".$_POST['pf4v']." "; }
  if ( $_POST['pf5'] && $_POST['pf5v'] != "" ) { $cmds .= "+f ".$_POST['pf5v']." "; }
  if ( $_POST['pf6'] && $_POST['pf6v'] != "" ) { $cmds .= "+f ".$_POST['pf6v']." "; }
  if ( $_POST['pf7'] && $_POST['pf7v'] != "" ) { $cmds .= "+f ".$_POST['pf7v']." "; }
    if ( $_POST['srvmsg'] && $_POST['srvmsgv'] != "" ) { $cmds .= "-srvmsg \"".$_POST['srvmsgv']."\" "; }
  if ( $_POST['srvmsg1'] && $_POST['srvmsg1v'] != "" ) { $cmds .= "-srvmsg \"".$_POST['srvmsg1v']."\" "; }
  if ( $_POST['srvmsg2'] && $_POST['srvmsg2v'] != "" ) { $cmds .= "-srvmsg \"".$_POST['srvmsg2v']."\" "; }
  if ( $_POST['srvmsg3'] && $_POST['srvmsg3v'] != "" ) { $cmds .= "-srvmsg \"".$_POST['srvmsg3v']."\" "; }
  if ( $_POST['srvmsg4'] && $_POST['srvmsg4v'] != "" ) { $cmds .= "-srvmsg \"".$_POST['srvmsg4v']."\" "; }
  if ( $_POST['srvmsg5'] && $_POST['srvmsg5v'] != "" ) { $cmds .= "-srvmsg \"".$_POST['srvmsg5v']."\" "; }
  if ( $_POST['srvmsg6'] && $_POST['srvmsg6v'] != "" ) { $cmds .= "-srvmsg \"".$_POST['srvmsg6v']."\" "; }
  if ( $_POST['srvmsg7'] && $_POST['srvmsg7v'] != "" ) { $cmds .= "-srvmsg \"".$_POST['srvmsg7v']."\" "; }
    if ( $_POST['admsg'] && $_POST['admsgv'] != "" ) { $cmds .= "-admsg \"".$_POST['admsgv']."\" "; }
  if ( $_POST['admsg1'] && $_POST['admsg1v'] != "" ) { $cmds .= "-admsg \"".$_POST['admsg1v']."\" "; }
  if ( $_POST['admsg2'] && $_POST['admsg2v'] != "" ) { $cmds .= "-admsg \"".$_POST['admsg2v']."\" "; }
  if ( $_POST['admsg3'] && $_POST['admsg3v'] != "" ) { $cmds .= "-admsg \"".$_POST['admsg3v']."\" "; }
  if ( $_POST['admsg4'] && $_POST['admsg4v'] != "" ) { $cmds .= "-admsg \"".$_POST['admsg4v']."\" "; }
  if ( $_POST['admsg5'] && $_POST['admsg5v'] != "" ) { $cmds .= "-admsg \"".$_POST['admsg5v']."\" "; }
  if ( $_POST['admsg6'] && $_POST['admsg6v'] != "" ) { $cmds .= "-admsg \"".$_POST['admsg6v']."\" "; }
  if ( $_POST['admsg7'] && $_POST['admsg7v'] != "" ) { $cmds .= "-admsg \"".$_POST['admsg7v']."\" "; }
  if ( $_POST['fb'] ) { $cmds .= "-fb "; }
  if ( $_POST['world'] && $_POST['worldfile'] != "" ) { $cmds .= "-world \"".$_POST['worldfile']."\" "; }
  if ( $_POST['b'] ) { $cmds .= "-b "; }
  if ( $_POST['h'] ) { $cmds .= "-h "; }
  if ( $_POST['worldsize'] && $_POST['worldsizev'] != "" ) { $cmds .= "-worldsize ".$_POST['worldsizev']." "; }
  if ( $_POST['i'] && $_POST['iv'] != "" ) { $cmds .= "-i ".$_POST['iv']." "; }
  if ( $_POST['p'] && $_POST['pv'] != "" ) { $cmds .= "-p ".$_POST['pv']." "; }
  if ( $_POST['public'] && $_POST['publicv'] != "" ) { $cmds .= "-public \"".$_POST['publicv']."\" "; }
  if ( $_POST['publicaddr'] && $_POST['publicaddrv'] != "" ) { $cmds .= "-publicaddr ".$_POST['publicaddrv']." "; }
  if ( $_POST['disableBots'] ) { $cmds .= "-disableBots "; }
  if ( $_POST['owncmd'] != "" ) { $cmds .= $_POST['owncmd']." "; }
  if ( $_POST['savetoconfig'] && !file_exists($_POST['configname']) ) {
	$fp = fopen("cfgs/".$_POST['configname'],"w");
	fputs($fp,$cmds);
	fclose($fp);
  }
  $bzfs = passthru("sudo -u bzfs /usr/games/bzfs $cmds -conf ".$user_suffix." > /dev/null &");
  exec("echo 'done'");
  echo $bzfs;
 }
 if ( $mode == "stop" ) {
  $bzfs = passthru('sudo -u bzfs /bin/kill -9 '.$_POST['kill']);
  echo $bzfs;
 }
?>
