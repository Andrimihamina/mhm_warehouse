<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_active = $prod["id_cons_log"];
     if($id_aut_active !=""){
     $sql_edit_aut_active = "SELECT * FROM cons_log_aut_active JOIN cons_log_id ON cons_log_aut_active.id_cons_log = cons_log_id.id  WHERE cons_log_aut_active.id_cons_log = '$id_aut_active'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_active);
     $edits_aut_active = $requete_edit_aut_acitve->fetchAll();
     }
?>