<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_passive = $prod["id_mat_itc"];
     if($id_aut_passive !=""){
     $sql_edit_aut_passive = "SELECT * FROM mat_itc_aut_passive JOIN mat_itc_id ON mat_itc_aut_passive.id_mat_itc = mat_itc_id.id  WHERE mat_itc_aut_passive.id_mat_itc = '$id_aut_passive'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_passive);
     $edits_aut_passive = $requete_edit_aut_acitve->fetchAll();
     }
?>