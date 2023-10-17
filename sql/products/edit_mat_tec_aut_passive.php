<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_passive = $prod["id_mat_tec"];
     if($id_aut_passive !=""){
     $sql_edit_aut_passive = "SELECT * FROM mat_tec_aut_passive JOIN mat_tec_id ON mat_tec_aut_passive.id_mat_tec = mat_tec_id.id  WHERE mat_tec_aut_passive.id_mat_tec = '$id_aut_passive'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_passive);
     $edits_aut_passive = $requete_edit_aut_acitve->fetchAll();
     }
?>