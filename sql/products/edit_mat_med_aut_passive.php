<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_passive = $prod["id_mat_med"];
     if($id_aut_passive !=""){
     $sql_edit_aut_passive = "SELECT * FROM mat_med_aut_passive JOIN mat_med_id ON mat_med_aut_passive.id_mat_med = mat_med_id.id  WHERE mat_med_aut_passive.id_mat_med = '$id_aut_passive'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_passive);
     $edits_aut_passive = $requete_edit_aut_acitve->fetchAll();
     }
?>