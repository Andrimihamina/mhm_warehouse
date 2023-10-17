<?php
if(isset(
// DESCRIPTIONS
$_POST["descriptions"], 
// BRANDS
$_POST["brands"],

//  USED 
  $_POST["Used"]
)

/*==================== OBLIGATORY VARIABLE ====================*/
  // DESCRIPTIONS
  && !empty($_POST["descriptions"]) 
  && !empty($_POST["brands"])
  // USED
  && !empty($_POST["Used"]) 
  )
?>