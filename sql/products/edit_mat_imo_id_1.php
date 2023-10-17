<?php
include_once ("../../env/dns_warehouse.php");

// MEDICALS
     $id = $_GET['idProduct'];

     $sql_edit_mat_imo_id= "SELECT*
                         FROM mat_imo_id
                         JOIN mat_imo_quantity ON mat_imo_id.id = mat_imo_quantity.id_mat_imo
                         WHERE mat_imo_id.id = '$id'";
     $requete_edit_mat_imo_id = $db->query($sql_edit_mat_imo_id);
     $edits = $requete_edit_mat_imo_id->fetchAll();
?>