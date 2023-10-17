<?php
if(isset(
// IDENTITIFACTION
$_POST["commercial_name"], 
//  ACTIVAL NAME
  $_POST["actival_name_0"],
    // DOSAGE
    $_POST["dosage_0"], $_POST["dosage_unit_0"],$_POST["dosage_package_0"], $_POST["dosage_package_unit_0"], $_POST["dosage_package_quantity_0"],  $_POST["dosage_package_quantity_unit_0"],
    // PACKAGE
    $_POST["package"], $_POST["package_unit"],
//  ACTIVAL NAME 1 
  $_POST["actival_name_1"],
    // DOSAGE
    $_POST["dosage_1"], $_POST["dosage_unit_1"], $_POST["dosage_package_1"], $_POST["dosage_package_unit_1"], $_POST["dosage_package_quantity_1"], $_POST["dosage_package_quantity_unit_1"],
//  ACTIVAL NAME 2 
  $_POST["actival_name_2"],
    // DOSAGE
    $_POST["dosage_2"], $_POST["dosage_unit_2"], $_POST["dosage_package_2"], $_POST["dosage_package_unit_2"], $_POST["dosage_package_quantity_2"], $_POST["dosage_package_quantity_unit_2"],
//  EXPIRATION DATE FORM 
  $_POST["expiration_date"],
  $_POST["form"],
//  APPLICATION 
  $_POST["application"],
//  CLASSIFICATION 0 
  $_POST["classification_0"], $_POST["classification_1"], $_POST["classification_2"]
  )
/*==================== OBLIGATORY VARIABLE ====================*/
  // DESCRIPTIONS
  && !empty($_POST["commercial_name"]) 
  && !empty($_POST["actival_name_0"])
  // DOSAGE
  && !empty($_POST["dosage_0"])
  && !empty($_POST["dosage_unit_0"]) 
  // EXPIRATION DATE
  && !empty($_POST["expiration_date"])
  // FORM 
  && !empty($_POST["form"])
  // APPLICATION OBLIGATOIR 
  && !empty($_POST["application"]) 
  // CLASSIFICATION OBLIGATOIR 
  && !empty($_POST["classification_0"]) 
  )
?>