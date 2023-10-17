<?php
include_once ("../../env/dns_warehouse.php");

// MEDICALS
     $id = $_GET['idProduct'];

     $sql_edit_mat_log_id= "SELECT*
                         FROM mat_log_id
                         JOIN mat_log_quantity ON mat_log_id.id = mat_log_quantity.id_mat_log
                         WHERE mat_log_id.id = '$id'";
     $requete_edit_mat_log_id = $db->query($sql_edit_mat_log_id);
     $edits = $requete_edit_mat_log_id->fetchAll();
?>