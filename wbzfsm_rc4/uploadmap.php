<html>
	<head>
		<link rel="STYLESHEET" href="style.css" type="text/css" />
	</head>
<body>
<?php
 if ( $_GET['mode'] == "save" ) {
  $mapdir = "maps/";
  move_uploaded_file($_FILES['map']['tmp_name'],$mapdir.$_FILES['map']['name']);
  echo "<img src=\"img/done.jpg\" align=\"absbottom\" /> Map uploaded";
 }
?>
<fieldset>
<legend>Upload Map</legend>
<?php
 include("user_conf.php");
 $maps = glob("maps/*");
 $i = 0;
 foreach ( $maps as $map ) {
  $i++;
 }
?>
<form action="uploadmap.php?mode=save" enctype="multipart/form-data" method="POST">
<input type="file" name="map" /> <?php if ( $i < $max_plgs ) { ?><input type="submit" value="Upload" /><?php } else { ?>You already use as much maps as you are allowed<?php } ?>
</form>
<br/><br/>You are having <b><?php echo $i; ?></b> of <b><?php echo $max_plgs; ?></b> maps.
</fieldset>
</body>
</html>
