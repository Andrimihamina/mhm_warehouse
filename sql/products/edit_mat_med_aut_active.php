<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_active = $prod["id_mat_med"];
     if($id_aut_active !=""){
     $sql_edit_aut_active = "SELECT * FROM mat_med_aut_active JOIN mat_med_id ON mat_med_aut_active.id_mat_med = mat_med_id.id  WHERE mat_med_aut_active.id_mat_med = '$id_aut_active'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_active);
     $edits_aut_active = $requete_edit_aut_acitve->fetchAll();
     }
?>