<html>
		<head>
		<link rel="STYLESHEET" href="style.css" type="text/css" />
	</head>

<body>
<fieldset>
<legend>Maps</legend>
<?php
 include("user_conf.php");
 $maps = glob("maps/*");
 $i = 0;
 foreach ( $maps as $map ) {
  echo "<i>".$map."</i> <a href='deletedb.php?db=".$map."'><small>DELETE</small></a><br/>";
  $i++;
 }
?>
<br/>You are having <b><?php echo $i; ?></b> of <b><?php echo $max_maps; ?></b> maps.
</fieldset>
</body>
</html>
