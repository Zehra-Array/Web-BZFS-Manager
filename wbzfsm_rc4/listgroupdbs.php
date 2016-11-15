<html>
		<head>
		<link rel="STYLESHEET" href="style.css" type="text/css" />
</head>
<body>
<fieldset>
<legend>User Databases</legend>
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
  echo "<i>".$udb."</i> <a href='deletedb.php?db=".$udb."'><small>DELETE</small></a> <a href='editdb.php?db=".$udb."'>EDIT</a><br/>";
  $i_udbs++;
 }
?>
<br/>You are having <b><?php echo $i_udbs; ?></b> of <b><?php echo $max_udbs; ?></b> user databases.
</fieldset><br/><fieldset>
<legend>Group Databases</legend>
<?php 
 foreach ( $gdbs as $gdb ) {
  echo "<i>".$gdb."</i> <a href='deletedb.php?db=".$gdb."'><small>DELETE</small></a> <a href='editdb.php?db=".$gdb."'>EDIT</a><br/>";
  $i_gdbs++;
 }

?>
<br/>You are having <b><?php echo $i_gdbs; ?></b> of <b><?php echo $max_gdbs; ?></b> group databases.
</fieldset><br/><fieldset>
<legend>Ban Databases</legend>
<?php 
 foreach ( $bdbs as $gdb ) {
  echo "<i>".$gdb."</i> <a href='deletedb.php?db=".$gdb."'><small>DELETE</small></a><br/>";
  $i_bdbs++;
 }

?>
<br/>You are having <b><?php echo $i_bdbs; ?></b> of <b><?php echo $max_bdbs; ?></b> ban databases.
</fieldset><br/><fieldset>
<legend>Report Files</legend>
<?php 
 foreach ( $fdbs as $gdb ) {
  echo "<i>".$gdb."</i> <a href='deletedb.php?db=".$gdb."'><small>DELETE</small></a><br/>";
  $i_fdbs++;
 }

?>
<br/>You are having <b><?php echo $i_fdbs; ?></b> of <b><?php echo $max_rpfs; ?></b> report files.
</fieldset>
</body>
</html>
