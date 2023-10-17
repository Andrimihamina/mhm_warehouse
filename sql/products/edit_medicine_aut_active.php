<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_active = $prod_med["id_med"];
     if($id_aut_active !=""){
     $sql_edit_aut_active = "SELECT * FROM medicine_authorizations_active JOIN medicine_id ON medicine_authorizations_active.id_med = medicine_id.id  WHERE medicine_authorizations_active.id_med = '$id_aut_active'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_active);
     $edits_aut_active = $requete_edit_aut_acitve->fetchAll();
     }
?>