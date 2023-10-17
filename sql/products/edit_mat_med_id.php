<?php
include_once ("../../env/dns_warehouse.php");

// mat_med
     $sql_edit_med= "SELECT*
                         FROM mat_med_id
                         LEFT JOIN mat_med_quantity ON mat_med_id.id = mat_med_quantity.id_mat_med";
     $requete_edit_med = $db->query($sql_edit_med);
     $edits= $requete_edit_med->fetchAll();

// UNITS
     $sql_prods_med= "SELECT *
                         FROM mat_med_id
                         JOIN mat_med_quantity ON mat_med_id.id = mat_med_quantity.id_mat_med
                         JOIN mat_med_location ON mat_med_id.id = mat_med_location.id_mat_med
                         JOIN mat_med_price ON mat_med_id.id = mat_med_price.id_mat_med
                         JOIN mat_med_from ON mat_med_id.id = mat_med_from.id_mat_med
                         JOIN mat_med_used ON mat_med_id.id = mat_med_used.id_mat_med";
     $requete_prods_med = $db->query($sql_prods_med);
     $prods= $requete_prods_med->fetchAll();
?>