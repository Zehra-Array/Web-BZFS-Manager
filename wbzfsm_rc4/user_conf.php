<?php
 // ***** /CONFIGURATION/ *****
 // Edit depending on your needs!
 
 $max_bzfs = 1; // MAXIMUM AMMOUNT OF BZFS INSTANCES
 $max_maps = 5; // MAXIMUM AMMOUNT OF MAPS
 $max_udbs = 2; // MAXIMUM AMMOUNT OF USER DATABASES
 $max_gdbs = 2; // MAXIMUM AMMOUNT OF GROUP DATABASES
 $max_bdbs = 2; // MAXIMUM AMMOUNT OF BAN DATABASES
 $max_rpfs = 2; // MAXIMUM AMMOUNT OF REPORT FILES
 $max_plgs = 3; // MAXIMUM AMMOUNT OF PLUGINS
 $max_cfgs = 25; // MAXIMUM AMMOUNT OF CONFIGURATIONS
 $user_suffix = "user";
 
 $god_mode = true; // CAN BE true OR false. WHEN true ALL LIMITATIONS ARE SET TO 999999
 
 // ***** /END/ /CONFIGURATION/ *****
 // You may not edit anything below!
 // It's commented but not thought for the user to edit.
 
 // ***** /GOD MODE CORE FUNCTION/ *****
 if ( $god_mode == true ) {
  $max_bzfs = 999999;
  $max_maps = 999999;
  $max_udbs = 999999;
  $max_gdbs = 999999;
  $max_bdbs = 999999;
  $max_rpfs = 999999;
  $max_plgs = 999999;
  $max_cfgs = 999999;
 }
?>