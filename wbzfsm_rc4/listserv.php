<html>
 <head>
  <title>BZFS List</title>

		<link rel="STYLESHEET" href="style.css" type="text/css" />
	

 </head>
<body>
<fieldset>
<legend>List of running BZFS</legend>
<table border="1">
<th>ID</th>
<th>PID</th>
<th>Command Line Option(s)</th>
<?php
 include("user_conf.php");
 $bzfsr = explode("\n",`ps -Af | grep bzfs`);
 //$bzfs_ammount = count($bzfsr);
 unset($bzfsr[count($bzfsr)-1]);
 $i = 0;
  foreach ( $bzfsr as $bzfsl ) {
   preg_match('/bzfs      (.*?) (.*?) 0 (.....) (.*?)(..)\:(..)\:(..) (.*?)-conf '.$user_suffix.'$/',$bzfsl,$bzfspid);
   preg_match('/bzfs     (.*?) (.*?) 0 (.....) (.*?)(..)\:(..)\:(..) (.*?)-conf '.$user_suffix.'$/',$bzfsl,$bzfspidb);
    if ( preg_match('/^\/usr\/games\/bzfs(.*?$)/',$bzfspid[9]) ) {
     echo "<tr><td>$i</td><td>".$bzfspid[1]."</td><td>".substr($bzfspid[9],15)."&nbsp;</td></tr>\n";
     $i++;
    } else if ( preg_match('/^\/usr\/games\/bzfs(.*?$)/',$bzfspidb[9]) ) {
     echo "<tr><td>$i</td><td>".$bzfspidb[1]."</td><td>".substr($bzfspidb[9],15)."&nbsp;</td></tr>\n";
     $i++;
    }
  }
?>
</table>
You are running <b><?php echo $i; ?></b> of <b><?php echo $max_bzfs; ?></b> BZFS instances.
</fieldset>
</body>
</html>
