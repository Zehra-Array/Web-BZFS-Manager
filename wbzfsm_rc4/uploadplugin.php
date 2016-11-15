<html>
		<head>
		<link rel="STYLESHEET" href="style.css" type="text/css" />
	</head>
	<body>
<?php
 if ( $_GET['mode'] == "save" ) {
  $mapdir = "plugins/";
  move_uploaded_file($_FILES['map']['tmp_name'],$mapdir.$_FILES['map']['name']);
  echo "<img src=\"img/done.jpg\" align=\"absbottom\" /> Plugin uploaded";
 }
?>
<fieldset><?php
 include("user_conf.php");
 $maps = glob("plugins/*");
 $i = 0;
 foreach ( $maps as $map ) {
    $i++;
 }
?>
<legend>Upload Plugin</legend>
<form action="uploadplugin.php?mode=save" enctype="multipart/form-data" method="POST">
<input type="file" name="map" /> <?php if ( $i < $max_plgs ) { ?><input type="submit" value="Upload" /><?php } else { ?>You already use as much plugins as you are allowed<?php } ?>
</form>
<br/><br/><br/>

<br/>You are having <b><?php echo $i; ?></b> of <b><?php echo $max_plgs; ?></b> plugins.
</fieldset>
</body>
</html>
