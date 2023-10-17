<?php
    /*==================== OBLIGATORY VARIABLE DESCRIPTIONS====================*/
    // DESCRIPTIONS
    $Descriptions= strip_tags($_POST["descriptions"]);
    if($Descriptions==""){$_SESSION["error_incomplet"] =["Descriptions Name Empty"];}
    $brands= strip_tags($_POST["brands"]);
    if($brands==""){$_SESSION["error_incomplet"] =["Brands Name Empty"];}
   
    /*==================== NOT OBLIGATORY VARIABLE ====================*/
    // SIZES
        // MESURMENTS
        $width = strip_tags($_POST["width"]); $units_width= strip_tags($_POST["units_width"]);
        $length = strip_tags($_POST["length"]); $units_lenght= strip_tags($_POST["units_lenght"]); 
        $thickness = strip_tags($_POST["thickness"]); $units_thickness = strip_tags($_POST["units_thickness"]);
        // SPECIAL SIZES
        $sizes_specific = strip_tags($_POST["sizes_specific"]);
        // CHARRIERES
        $sizes_charriere = strip_tags($_POST["sizes_charriere"]);
        // GAUZES
        $sizes_gauzes = strip_tags($_POST["sizes_gauzes"]); 
        // COLORS
        $sizes_colors = strip_tags($_POST["sizes_colors"]); 
        // SIZE UNITS
        $sizes_mesurs = strip_tags($_POST["sizes_mesurs"]); 
        // QUANTIT PACKAGES
            $QtPackages = strip_tags($_POST["QtPackages"]); 
        // CLEANLINESS
            $cleanliness = strip_tags($_POST["cleanliness"]); 
        // TYPES
            $types = strip_tags($_POST["types"]);
        // FORMS  
        $forms = strip_tags($_POST["forms"]);  
        //  EXPIRATION DATE FORM 
        $expiration_date = strip_tags($_POST["expiration_date"]);

// ASSOCIATIONS
    // NAMES
      $association_descriptions = strip_tags($_POST["association_descriptions"]); 
    // SIZES
      $association_width = strip_tags($_POST["association_width"]); $associations_units_width = strip_tags($_POST["associations_units_width"]);
      $association_length= strip_tags($_POST["association_length"]); $associations_units_lenght = strip_tags($_POST["associations_units_lenght"]);
      $association_sizes = strip_tags($_POST["association_sizes"]); 
    // TYPES
      $association_types = strip_tags($_POST["association_types"]);
    // FORMS  
      $association_form = strip_tags($_POST["association_form"]); 

/*==================== OBLIGATORY VARIABLE ====================*/
//  USED 
  $Used= strip_tags($_POST["Used"]);
  if($Used==""){$_SESSION["error_incomplet"] =["Used For Empty"];} 
?>