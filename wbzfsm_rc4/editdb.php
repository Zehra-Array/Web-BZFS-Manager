<html>
		<head>
		<link rel="STYLESHEET" href="style.css" type="text/css" />
	</head>

<body>
<?php
 if ( $_GET['mode'] == "write" ) {
  echo "<fieldset><legend>File updated</legend>";
  $fp = fopen($_GET['db'],"w");
  fputs($fp,$_POST['cnt']);
  fclose($fp); echo "Changes saved to <i>".$_GET['db']."</i>!";
  echo "</fieldset>";
 }
?>
<form action="editdb.php?mode=write&db=<?php echo $_GET['db']; ?>" method="POST">
<textarea cols="90" rows="20" name="cnt">
<?php
 echo file_get_contents($_GET['db']);
?>
</textarea><br/><input type="submit" value="Save" />
</form>
</body>
</html>
