<?php
$sql_id= "INSERT INTO `mat_itc_id` (
    /*ID*/`id`, `created_date`, `mat_itc_abrev`, `mat_itc_nbr_abrev`, `id_code_mat_itc`, 
    /*DESCRIPTON*/`Descriptions`, `name_check`, `model`, 
    /*BRAND*/`manufacturer_name`, `sereal_number`, 
    /*NAME ADDING*/`name_adding`, 
    /*IMAGE*/`mat_itc_image`) VALUES (
    /*ID*/NULL, current_timestamp(), '$MAJ_abrev', '$NBR_abreviations', '$ID',
    /*DESCRIPTION*/ '$Descriptions', '$name_check', '$model', 
    /*BRAND*/'$brands', '$serealNumber', 
    /*NAME ADDING*/'$name_adding', 
    /*IMAGE*/'$file_name')";

$query_id = $db->prepare($sql_id);
$query_id->execute();
$mat_id = $db->lastInsertId();
?>