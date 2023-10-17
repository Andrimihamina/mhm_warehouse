<?php
include_once ("../../env/dns_warehouse.php");

// MEDICALS
     $id = $_GET['idProduct'];

     $sql_edit_mat_tec_id= "SELECT*
                         FROM mat_tec_id
                         JOIN mat_tec_quantity ON mat_tec_id.id = mat_tec_quantity.id_mat_tec
                         WHERE mat_tec_id.id = '$id'";
     $requete_edit_mat_tec_id = $db->query($sql_edit_mat_tec_id);
     $edits = $requete_edit_mat_tec_id->fetchAll();
?>