<?php
include_once ("../../env/dns_warehouse.php");

// mat_imo
     $sql_edit_med= "SELECT*
                         FROM mat_imo_id
                         LEFT JOIN mat_imo_quantity ON mat_imo_id.id = mat_imo_quantity.id_mat_imo";
     $requete_edit_med = $db->query($sql_edit_med);
     $edits= $requete_edit_med->fetchAll();

// UNITS
     $sql_prods_med= "SELECT *
                         FROM mat_imo_id
                         JOIN mat_imo_quantity ON mat_imo_id.id = mat_imo_quantity.id_mat_imo
                         JOIN mat_imo_location ON mat_imo_id.id = mat_imo_location.id_mat_imo
                         JOIN mat_imo_price ON mat_imo_id.id = mat_imo_price.id_mat_imo
                         JOIN mat_imo_from ON mat_imo_id.id = mat_imo_from.id_mat_imo
                         JOIN mat_imo_used ON mat_imo_id.id = mat_imo_used.id_mat_imo";
     $requete_prods_med = $db->query($sql_prods_med);
     $prods= $requete_prods_med->fetchAll();
?>