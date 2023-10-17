<?php
// UNITS - SIZES
require_once("../../sql/functions/products_add/affiche_units_cons.php");

    $joint_units = $width."".$affiche_units_width ." ". $length."".$affiche_units_lenght ." ". $thickness."".$affiche_units_thickness;
    $joint_sizes = $affiche_sizes_specific ." ". $affiche_sizes_charrieres ." ". $affiche_sizes_gauzes . " ". $affiche_sizes_color;

    $association_units = $association_width ."". $affiche_units_association_width ." ". $association_length ."". $affiche_units_association_length;

    // UNITS
    $units_body = $joint_units ." ". $joint_sizes;
    $units_association = $association_units." ". $association_sizes;

// TYPES - FORMS
require_once("../../sql/functions/products_add/affiche_types_forms_cons.php");
    $joint = $affiche_types ." ". $affiche_forms;
    $association = $affiche_association_types ." ". $affiche_association_forms;

//  ENSEMBLAGE DU DESCRIPTIONS
$Name = $Descriptions;
$Descriptions = $Descriptions ." ". $cleanliness . " ". $units_body ." ". $joint . " ". $association_descriptions . " ". $units_association ." ". $association;

?>