<?php
$sql= "UPDATE `cons_med_id` SET
/*DESCRIPTIONS*/ `Descriptions` = '$Descriptions', `Name` ='$Name',`brand_cons_med` = '$brands', 
/*SIZES*/ `sizes_width` = '$width', `units_sizes_width` = '$units_width', `sizes_length` = '$length', `units_sizes_lenght`= '$units_lenght', 
`size_thickness` = '$thickness', `units_size_thichness` = '$units_thickness',
/*SIZES 2*/ `sizes_specific` = '$sizes_specific', `sizes_charrieres` = '$sizes_charriere', `sizes_gauzes` = '$sizes_gauzes', `sizes_color` = '$sizes_colors', `sizes_units` = '$sizes_mesurs', 
/*QT PACKAGE*/ `qt_in_package` = '$QtPackages', 
/*CLEAN*/ `cleanliness` = '$cleanliness', 
/*CARACTERISTICS*/ `types` = '$types', `form` = '$forms', 
/*EXPIRATION DATE*/ `expiration_date` = '$expiration_date', 
/*ASSOCIATION*/ `association_descriptions` = '$association_descriptions', 
/*ASSO SIZE*/ `association_width` = '$association_width', `units_association_width` = '$associations_units_width', `association_length` = '$association_length', `units_association_length` = '$associations_units_lenght', 
`association_sizes` = '$association_sizes', 
/*ASSO CHAR*/ `association_types` = '$association_types', `association_form` = '$association_form'
WHERE `cons_med_id`.`id` = '$id'";

$query = $db->prepare($sql);
$query->execute();
?>