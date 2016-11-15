<html>
	<head>
		<link rel="STYLESHEET" href="style.css" type="text/css" />
	</head>
<body>
<fieldset>
	<legend>I am allowed to ...</legend>
	<?php include("user_conf.php"); ?>
	<?php if ( $god_mode == true ) { echo "<b>God Mode enabled!!!</b><br/>"; } ?>
	... run <?php echo $max_bzfs; ?> BZFS.<br/>
	... have <?php echo $max_maps; ?> maps.<br/>
	... have <?php echo $max_udbs; ?> user databases.<br/>
	... have <?php echo $max_gdbs; ?> group databases.<br/>
	... have <?php echo $max_bdbs; ?> ban databases.<br/>
	... have <?php echo $max_rpfs; ?> report files.<br/>
	... have <?php echo $max_plgs; ?> plugins.<br/>
	... have <?php echo $max_cfgs; ?> configs.
</fieldset>
</body>
</html>