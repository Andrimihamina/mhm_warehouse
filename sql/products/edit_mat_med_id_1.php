<?php
include_once ("../../env/dns_warehouse.php");

// MEDICALS
     $id = $_GET['idProduct'];

     $sql_edit_mat_med_id= "SELECT*
                         FROM mat_med_id
                         JOIN mat_med_quantity ON mat_med_id.id = mat_med_quantity.id_mat_med
                         WHERE mat_med_id.id = '$id'";
     $requete_edit_mat_med_id = $db->query($sql_edit_mat_med_id);
     $edits = $requete_edit_mat_med_id->fetchAll();
?>