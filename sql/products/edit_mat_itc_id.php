<?php
include_once ("../../env/dns_warehouse.php");

// mat_itc
     $sql_edit_med= "SELECT*
                         FROM mat_itc_id
                         LEFT JOIN mat_itc_quantity ON mat_itc_id.id = mat_itc_quantity.id_mat_itc";
     $requete_edit_med = $db->query($sql_edit_med);
     $edits= $requete_edit_med->fetchAll();

// UNITS
     $sql_prods_med= "SELECT *
                         FROM mat_itc_id
                         JOIN mat_itc_quantity ON mat_itc_id.id = mat_itc_quantity.id_mat_itc
                         JOIN mat_itc_location ON mat_itc_id.id = mat_itc_location.id_mat_itc
                         JOIN mat_itc_price ON mat_itc_id.id = mat_itc_price.id_mat_itc
                         JOIN mat_itc_from ON mat_itc_id.id = mat_itc_from.id_mat_itc
                         JOIN mat_itc_used ON mat_itc_id.id = mat_itc_used.id_mat_itc";
     $requete_prods_med = $db->query($sql_prods_med);
     $prods= $requete_prods_med->fetchAll();
?>