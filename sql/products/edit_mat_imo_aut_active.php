<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_active = $prod["id_mat_imo"];
     if($id_aut_active !=""){
     $sql_edit_aut_active = "SELECT * FROM mat_imo_aut_active JOIN mat_imo_id ON mat_imo_aut_active.id_mat_imo = mat_imo_id.id  WHERE mat_imo_aut_active.id_mat_imo = '$id_aut_active'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_active);
     $edits_aut_active = $requete_edit_aut_acitve->fetchAll();
     }
?>