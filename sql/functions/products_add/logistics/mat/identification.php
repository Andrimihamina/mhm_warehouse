<?php
$sql_id= "INSERT INTO `mat_log_id` (
    /*ID*/`id`, `created_date`, `mat_log_abrev`, `mat_log_nbr_abrev`, `id_code_mat_log`, 
    /*DESCRIPTON*/`Descriptions`, `name_check`, `model`, 
    /*BRAND*/`manufacturer_name`, `sereal_number`, 
    /*NAME ADDING*/`name_adding`, 
    /*IMAGE*/`mat_log_image`) VALUES (
    /*ID*/NULL, current_timestamp(), '$MAJ_abrev', '$NBR_abreviations', '$ID',
    /*DESCRIPTION*/ '$Descriptions', '$name_check', '$model', 
    /*BRAND*/'$brands', '$serealNumber', 
    /*NAME ADDING*/'$name_adding', 
    /*IMAGE*/'$file_name')";

$query_id = $db->prepare($sql_id);
$query_id->execute();
$mat_id = $db->lastInsertId();
?>