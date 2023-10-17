<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_active = $prod["id_cons_tec"];
     if($id_aut_active !=""){
     $sql_edit_aut_active = "SELECT * FROM cons_tec_aut_active JOIN cons_tec_id ON cons_tec_aut_active.id_cons_tec = cons_tec_id.id  WHERE cons_tec_aut_active.id_cons_tec = '$id_aut_active'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_active);
     $edits_aut_active = $requete_edit_aut_acitve->fetchAll();
     }
?>