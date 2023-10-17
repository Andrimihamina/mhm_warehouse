<?php
include_once ("../../env/dns_warehouse.php");

// cons_log
     $sql_edit_med= "SELECT*
                         FROM cons_log_id
                         LEFT JOIN cons_log_quantity ON cons_log_id.id = cons_log_quantity.id_cons_log";
     $requete_edit_med = $db->query($sql_edit_med);
     $edits= $requete_edit_med->fetchAll();

// UNITS
     $sql_prods_med= "SELECT *
                         FROM cons_log_id
                         JOIN cons_log_quantity ON cons_log_id.id = cons_log_quantity.id_cons_log
                         JOIN cons_log_location ON cons_log_id.id = cons_log_location.id_cons_log
                         JOIN cons_log_price ON cons_log_id.id = cons_log_price.id_cons_log
                         JOIN cons_log_from ON cons_log_id.id = cons_log_from.id_cons_log
                         JOIN cons_log_used ON cons_log_id.id = cons_log_used.id_cons_log";
     $requete_prods_med = $db->query($sql_prods_med);
     $prods= $requete_prods_med->fetchAll();
?>