<?php
include_once ("../../env/dns_warehouse.php");

// MEDICALS
     $id = $_GET['idProduct'];

     $sql_edit_cons_log_id= "SELECT*
                         FROM cons_log_id
                         JOIN cons_log_quantity ON cons_log_id.id = cons_log_quantity.id_cons_log
                         WHERE cons_log_id.id = '$id'";
     $requete_edit_cons_log_id = $db->query($sql_edit_cons_log_id);
     $edits_med_id = $requete_edit_cons_log_id->fetchAll();
?>