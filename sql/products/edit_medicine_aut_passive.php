<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_passive = $prod_med["id_med"];
     if($id_aut_passive !=""){
     $sql_edit_aut_passive = "SELECT * FROM medicine_authorizations_passive JOIN medicine_id ON medicine_authorizations_passive.id_med = medicine_id.id  WHERE medicine_authorizations_passive.id_med = '$id_aut_passive'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_passive);
     $edits_aut_passive = $requete_edit_aut_acitve->fetchAll();
     }
?>