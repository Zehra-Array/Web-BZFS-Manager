<html>
		<head>
		<link rel="STYLESHEET" href="style.css" type="text/css" />
	</head>

<body>
<fieldset>
<legend>Plugins</legend>
<?php
 include("user_conf.php");
 $maps = glob("plugins/*");
 $i = 0;
 foreach ( $maps as $map ) {
  echo "<i>".$map."</i> <a href='deletedb.php?db=".$map."'><small>DELETE</small></a><br/>";
  $i++;
 }
?>
<br/>You are having <b><?php echo $i; ?></b> of <b><?php echo $max_plgs; ?></b> plugins.
</fieldset>
</body>
</html>
