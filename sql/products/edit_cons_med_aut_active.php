<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_active = $prod["id_cons_med"];
     if($id_aut_active !=""){
     $sql_edit_aut_active = "SELECT * FROM cons_med_aut_active JOIN cons_med_id ON cons_med_aut_active.id_cons_med = cons_med_id.id  WHERE cons_med_aut_active.id_cons_med = '$id_aut_active'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_active);
     $edits_aut_active = $requete_edit_aut_acitve->fetchAll();
     }
?>