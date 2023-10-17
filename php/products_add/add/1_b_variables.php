<?php
if(isset(
//  LOCATION 0 
  $_POST["location_0"], $_POST["location_1"], $_POST["location_2"],
// PRICE QUANTITY 
  $_POST["med_quantity"],
    $_POST["box"],
    $_POST["med_price"],
//  QUANTITY  
    $_POST["quantity_initial"], 
    $_POST["quantity_minimal"],
    $_POST["quantity_avarage"])

/*==================== OBLIGATORY VARIABLE ====================*/
  //  LOCATION OBLIGATOIR 
  && !empty($_POST["location_0"]) 
  // LOCATION OBLIGATOIR 
  && !empty($_POST["location_1"]) 
  // PRICE QUANTITY OBLIGATOIR 
  && !empty($_POST["med_quantity"])
  && !empty($_POST["box"])
  && !empty($_POST["med_price"])
  // QUANTITIES
  && !empty($_POST["quantity_initial"])
  && !empty($_POST["quantity_minimal"])
  && !empty($_POST["quantity_avarage"])
  )
?>