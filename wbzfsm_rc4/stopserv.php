<html>
	<head>
		<link rel="STYLESHEET" href="style.css" type="text/css" />
	</head>
<body>
<fieldset>
<legend>Stop a BZFS</legend>
<form action="exec.php?mode=stop" method="POST">
<table border="1">
<th>X</th>
<th>PID</th>
<th>Command Line Option(s)</th>
<?php
 include("user_conf.php");
 $bzfsr = explode("\n",`ps -Af | grep bzfs`);
 unset($bzfsr[count($bzfsr)-1]);
 $i = 0;
  foreach ( $bzfsr as $bzfsl ) {
   preg_match('/bzfs      (.*?) (.*?) 0 (.....) (.*?)(..)\:(..)\:(..) (.*?)-conf '.$user_suffix.'$/',$bzfsl,$bzfspid);
   preg_match('/bzfs     (.*?) (.*?) 0 (.....) (.*?)(..)\:(..)\:(..) (.*?)-conf '.$user_suffix.'$/',$bzfsl,$bzfspidb);
    if ( preg_match('/^\/usr\/games\/bzfs(.*?$)/',$bzfspid[9]) ) {
     echo "<tr><td><input name='kill' value='".$bzfspid[1]."' type='radio' /></td><td>".$bzfspid[1]."</td><td>".substr($bzfspid[9],15)."&nbsp;</td></tr>\n";
     $i++;
    } else if ( preg_match('/^\/usr\/games\/bzfs(.*?$)/',$bzfspidb[9]) ) {
     echo "<tr><td><input name='kill' value='".$bzfspidb[1]."' type='radio' /></td><td>".$bzfspidb[1]."</td><td>".substr($bzfspidb[9],15)."&nbsp;</td></tr>\n";
     $i++;
    }
  }
?>
</table>
<br/>&nbsp;<input type="submit" value="Stop Selected" />
</form>
</fieldset>
</body>
</html>
