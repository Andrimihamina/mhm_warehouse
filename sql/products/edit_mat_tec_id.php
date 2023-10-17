<?php
include_once ("../../env/dns_warehouse.php");

// mat_tec
     $sql_edit_med= "SELECT*
                         FROM mat_tec_id
                         LEFT JOIN mat_tec_quantity ON mat_tec_id.id = mat_tec_quantity.id_mat_tec";
     $requete_edit_med = $db->query($sql_edit_med);
     $edits= $requete_edit_med->fetchAll();

// UNITS
     $sql_prods_med= "SELECT *
                         FROM mat_tec_id
                         JOIN mat_tec_quantity ON mat_tec_id.id = mat_tec_quantity.id_mat_tec
                         JOIN mat_tec_location ON mat_tec_id.id = mat_tec_location.id_mat_tec
                         JOIN mat_tec_price ON mat_tec_id.id = mat_tec_price.id_mat_tec
                         JOIN mat_tec_from ON mat_tec_id.id = mat_tec_from.id_mat_tec
                         JOIN mat_tec_used ON mat_tec_id.id = mat_tec_used.id_mat_tec";
     $requete_prods_med = $db->query($sql_prods_med);
     $prods= $requete_prods_med->fetchAll();
?>