<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_active = $prod["id_mat_itc"];
     if($id_aut_active !=""){
     $sql_edit_aut_active = "SELECT * FROM mat_itc_aut_active JOIN mat_itc_id ON mat_itc_aut_active.id_mat_itc = mat_itc_id.id  WHERE mat_itc_aut_active.id_mat_itc = '$id_aut_active'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_active);
     $edits_aut_active = $requete_edit_aut_acitve->fetchAll();
     }
?>