<html>
		<head>
		<link rel="STYLESHEET" href="style.css" type="text/css" />
	</head>

<body>
<?php
 if ( $_GET['mode'] == "create" ) {
  echo "<fieldset><legend>Database Created</legend>";
  if ( $_POST['type'] == "userdb" ) {
   $fp = fopen("udbs/".$_POST['name'],"w");
   fputs($fp," ");
   fclose($fp); echo "<img src=\"img/done.jpg\" align=\"absbottom\" /> User Database \"".$_POST['name']."\" created!<br/> Its now available in <i>udbs/".$_POST['name']."</i><br/>";
  } else if ( $_POST['type'] == "groupdb") {
   $fp = fopen("gdbs/".$_POST['name'],"w");
   fputs($fp," ");
   fclose($fp); echo "<img src=\"img/done.jpg\" align=\"absbottom\" /> Group Database \"".$_POST['name']."\" created!<br/>";
  } else if ( $_POST['type'] == "bandb") {
   $fp = fopen("bdbs/".$_POST['name'],"w");
   fputs($fp," ");
   fclose($fp); echo "<img src=\"img/done.jpg\" align=\"absbottom\" /> Ban Database \"".$_POST['name']."\" created!<br/>";
  } else if ( $_POST['type'] == "reportf") {
   $fp = fopen("reports/".$_POST['name'],"w");
   fputs($fp," ");
   fclose($fp); echo "<img src=\"img/done.jpg\" align=\"absbottom\" /> Report File \"".$_POST['name']."\" created!<br/>";
  }
  echo "</fieldset><br/>";
 }
?>
<?php
 include("user_conf.php");

 $udbs = glob("udbs/*");
 $gdbs = glob("gdbs/*");
 $bdbs = glob("bdbs/*");
 $fdbs = glob("reports/*");

 $i_udbs = 0;
 $i_gdbs = 0;
 $i_bdbs = 0;
 $i_fdbs = 0;

 foreach ( $udbs as $udb ) {
  
  $i_udbs++;
 }

 foreach ( $gdbs as $gdb ) {
  
  $i_gdbs++;
 }

 
 foreach ( $bdbs as $gdb ) {
  
  $i_bdbs++;
 }


 foreach ( $fdbs as $gdb ) {
  
  $i_fdbs++;
 }

?>
<fieldset>
<legend>Create Database</legend>
<form action="creategroupdb.php?mode=create" method="POST">
<select name="type">
<? if ( $i_udbs < $max_udbs ) { ?><option value="userdb">User Database</option><?php } ?>
<? if ( $i_gdbs < $max_gdbs ) { ?><option value="groupdb">Group Database</option><?php } ?>
<? if ( $i_bdbs < $max_bdbs ) { ?><option value="bandb">Ban Database</option><?php } ?>
<? if ( $i_fdbs < $max_rpfs ) { ?><option value="reportf">Report File</option><?php } ?>
</select>

<input name="name" value="filename.db" type="text" />

<input value="Create" type="submit" />
</form>
</fieldset>
</body>
</html>
