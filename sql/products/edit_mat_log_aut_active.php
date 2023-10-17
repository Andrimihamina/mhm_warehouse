<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_active = $prod["id_mat_log"];
     if($id_aut_active !=""){
     $sql_edit_aut_active = "SELECT * FROM mat_log_aut_active JOIN mat_log_id ON mat_log_aut_active.id_mat_log = mat_log_id.id  WHERE mat_log_aut_active.id_mat_log = '$id_aut_active'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_active);
     $edits_aut_active = $requete_edit_aut_acitve->fetchAll();
     }
?>