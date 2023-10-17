<?php
$sql_id= "INSERT INTO `cons_itc_id` (
    /*ID*/`id`, `created_date`, `cons_itc_abrev`, `cons_itc_nbr_abrev`, `id_code_cons_itc`, 
    /*DESCRIPTIONS*/`Descriptions`, `brand_cons_itc`, 
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