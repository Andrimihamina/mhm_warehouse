<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_passive = $prod["id_mat_log"];
     if($id_aut_passive !=""){
     $sql_edit_aut_passive = "SELECT * FROM mat_log_aut_passive JOIN mat_log_id ON mat_log_aut_passive.id_mat_log = mat_log_id.id  WHERE mat_log_aut_passive.id_mat_log = '$id_aut_passive'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_passive);
     $edits_aut_passive = $requete_edit_aut_acitve->fetchAll();
     }
?>