<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_passive = $prod["id_mat_imo"];
     if($id_aut_passive !=""){
     $sql_edit_aut_passive = "SELECT * FROM mat_imo_aut_passive JOIN mat_imo_id ON mat_imo_aut_passive.id_mat_imo = mat_imo_id.id  WHERE mat_imo_aut_passive.id_mat_imo = '$id_aut_passive'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_passive);
     $edits_aut_passive = $requete_edit_aut_acitve->fetchAll();
     }
?>