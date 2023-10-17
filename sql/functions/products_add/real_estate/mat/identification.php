<?php
$sql_id= "INSERT INTO `mat_imo_id` (
    /*ID*/`id`, `created_date`, `mat_imo_abrev`, `mat_imo_nbr_abrev`, `id_code_mat_imo`, 
    /*DESCRIPTON*/`Descriptions`, `name_check`, `model`, 
    /*BRAND*/`manufacturer_name`, `sereal_number`, 
    /*NAME ADDING*/`name_adding`, 
    /*IMAGE*/`mat_imo_image`) VALUES (
    /*ID*/NULL, current_timestamp(), '$MAJ_abrev', '$NBR_abreviations', '$ID',
    /*DESCRIPTION*/ '$Descriptions', '$name_check', '$model', 
    /*BRAND*/'$brands', '$serealNumber', 
    /*NAME ADDING*/'$name_adding', 
    /*IMAGE*/'$file_name')";

$query_id = $db->prepare($sql_id);
$query_id->execute();
$mat_id = $db->lastInsertId();
?>