<?php
include_once ("../../env/dns_warehouse.php");

// mat_log
     $sql_edit_med= "SELECT*
                         FROM mat_log_id
                         LEFT JOIN mat_log_quantity ON mat_log_id.id = mat_log_quantity.id_mat_log";
     $requete_edit_med = $db->query($sql_edit_med);
     $edits= $requete_edit_med->fetchAll();

// UNITS
     $sql_prods_med= "SELECT *
                         FROM mat_log_id
                         JOIN mat_log_quantity ON mat_log_id.id = mat_log_quantity.id_mat_log
                         JOIN mat_log_location ON mat_log_id.id = mat_log_location.id_mat_log
                         JOIN mat_log_price ON mat_log_id.id = mat_log_price.id_mat_log
                         JOIN mat_log_from ON mat_log_id.id = mat_log_from.id_mat_log
                         JOIN mat_log_used ON mat_log_id.id = mat_log_used.id_mat_log";
     $requete_prods_med = $db->query($sql_prods_med);
     $prods= $requete_prods_med->fetchAll();
?>