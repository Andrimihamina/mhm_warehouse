<?php
$sql_id= "INSERT INTO `cons_log_id` (
    /*ID*/`id`, `created_date`, `cons_log_abrev`, `cons_log_nbr_abrev`, `id_code_cons_log`, 
    /*DESCRIPTIONS*/`Descriptions`, `brand_cons_log`, 
    /*NAME ADDING*/`name_adding`, 
    /*IMAGE*/`image`) VALUES (
    /*ID*/NULL, current_timestamp(), '$MAJ_abrev', '$NBR_abreviations', '$ID',
    /*DESCRIPTIONS*/ '$Descriptions', '$brands',
    /*NAME ADD*/ '$name_adding', 
    /*IMAGE*/ '$file_name')";


$query_id = $db->prepare($sql_id);
$query_id->execute();
$cons_id = $db->lastInsertId();
?>