<?php
$sql_id= "INSERT INTO `cons_med_id` (
    /*ID*/ `id`, `created_date`, `cons_med_abrev`, `cons_med_nbr_abrev`, `id_code_cons_med`, 
    /*DESCRIPTIONS*/ `Descriptions`, `Name`,`brand_cons_med`, 
    /*SIZES*/ `sizes_width`, `units_sizes_width`, `sizes_length`, `units_sizes_lenght`, `size_thickness`, `units_size_thichness`,
    /*SIZES 2*/ `sizes_specific`, `sizes_charrieres`, `sizes_gauzes`, `sizes_color`, `sizes_units`, 
    /*QT PACKAGE*/ `qt_in_package`, 
    /*CLEAN*/ `cleanliness`, 
    /*CARACTERISTICS*/ `types`, `form`, 
    /*EXPIRATION DATE*/ `expiration_date`, 
    /*ASSOCIATION*/ `association_descriptions`, 
    /*ASSO SIZE*/ `association_width`, `units_association_width`, `association_length`, `units_association_length`, `association_sizes`, 
    /*ASSO CHAR*/ `association_types`, `association_form`, 
    /*NAME ADD*/ `name_adding`, 
    /*IMAGE*/ `cons_image`) VALUES (
        /*ID*/ NULL, current_timestamp(), '$MAJ_abrev', '$NBR_abreviations', '$ID',
        /*DESCRIPTIONS*/ '$Descriptions', '$Name', '$brands', 
        /*SIZES*/ '$width', '$units_width', '$length', '$units_lenght', '$thickness', '$units_thickness', 
        /*SIZES 2*/ '$sizes_specific', '$sizes_charriere', '$sizes_gauzes', '$sizes_colors', '$sizes_mesurs', 
        /*QT PACKAGE*/ '$QtPackages', 
        /*CLEAN*/ '$cleanliness', 
        /*CARACTERISTICS*/ '$types','$forms',
        /*EXPIRATION DATE*/ '$expiration_date', 
        /*ASSOCIATION*/ '$association_descriptions',
        /*ASSO SIZE*/ '$association_width', '$associations_units_width', '$association_length', '$associations_units_lenght', '$association_sizes', 
        /*ASSO CHAR*/ '$association_types', '$association_form', 
        /*NAME ADD*/ '$name_adding', 
        /*IMAGE*/ '$file_name')";


$query_id = $db->prepare($sql_id);
$query_id->execute();
$cons_id = $db->lastInsertId();
?>