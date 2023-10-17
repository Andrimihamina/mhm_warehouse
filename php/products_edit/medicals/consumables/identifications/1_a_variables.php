<?php
if(isset(
// DESCRIPTIONS
$_POST["descriptions"], 
// BRANDS
$_POST["brands"],
// SIZES
  // MESURMENTS
  $_POST["width"], $_POST["units_width"],$_POST["length"], $_POST["units_lenght"], $_POST["thickness"],  $_POST["units_thickness"],
  // SPECIAL SIZES
  $_POST["sizes_specific"],
  // CHARRIERES
  $_POST["sizes_charriere"],
  // GAUZES
  $_POST["sizes_gauzes"], 
  // COLORS
  $_POST["sizes_colors"], 
  // SIZE UNITS
  $_POST["sizes_mesurs"], 
// QUANTIT PACKAGES
    $_POST["QtPackages"], 
// CLEANLINESS
    $_POST["cleanliness"], 
// TYPES
    $_POST["types"],
// FORMS  
  $_POST["forms"],  
//  EXPIRATION DATE FORM 
  $_POST["expiration_date"],

// ASSOCIATIONS
    // NAMES
      $_POST["association_descriptions"], 
    // SIZES
      $_POST["association_width"], $_POST["association_length"], $_POST["association_sizes"], 
    // TYPES
      $_POST["association_types"],
    // FORMS  
      $_POST["association_form"],  
)

/*==================== OBLIGATORY VARIABLE ====================*/
  // DESCRIPTIONS
  && !empty($_POST["descriptions"]) 
  && !empty($_POST["brands"])
  )
?>