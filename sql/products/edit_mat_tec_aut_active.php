<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_active = $prod["id_mat_tec"];
     if($id_aut_active !=""){
     $sql_edit_aut_active = "SELECT * FROM mat_tec_aut_active JOIN mat_tec_id ON mat_tec_aut_active.id_mat_tec = mat_tec_id.id  WHERE mat_tec_aut_active.id_mat_tec = '$id_aut_active'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_active);
     $edits_aut_active = $requete_edit_aut_acitve->fetchAll();
     }
?>