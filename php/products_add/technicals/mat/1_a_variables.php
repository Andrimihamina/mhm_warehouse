<?php
if(isset(
// DESCRIPTIONS
$_POST["descriptions"], 
// BRANDS
$_POST["Maker"],
// MODEL
$_POST["model"],
// SEREAL NUMBER
$_POST["serealNumber"],
// STATES
$_POST["states"],
// MANIFDATE
$_POST["manifDate"], 
// CHECK
$_POST["Check"], 
// INTERVAL CONTROL
$_POST["IntControl"],

//  USED 
  $_POST["Used"]
)

/*==================== OBLIGATORY VARIABLE ====================*/
  // DESCRIPTIONS
  && !empty($_POST["descriptions"]) 
  && !empty($_POST["brands"])
  && !empty($_POST["Maker"])
  && !empty($_POST["serealNumber"])
  && !empty($_POST["states"])
  // USED
  && !empty($_POST["Used"]) 
  )
?>