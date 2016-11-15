<?php
 //if ( ereg('../',$_GET['db']) ) { die("emergency stop"); }
 if ( ereg("udbs/",$_GET['db']) || ereg("gdbs/",$_GET['db']) || ereg("maps/",$_GET['db']) || ereg("plugins/",$_GET['db']) ) {
  unlink($_GET['db']);
  echo "<img src=\"img/done.jpg\" align=\"absbottom\" /> ".$_GET['db']." Deleted!";
 }
?>
