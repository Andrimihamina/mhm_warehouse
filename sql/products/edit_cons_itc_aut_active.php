<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_active = $prod["id_cons_itc"];
     if($id_aut_active !=""){
     $sql_edit_aut_active = "SELECT * FROM cons_itc_aut_active JOIN cons_itc_id ON cons_itc_aut_active.id_cons_itc = cons_itc_id.id  WHERE cons_itc_aut_active.id_cons_itc = '$id_aut_active'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_active);
     $edits_aut_active = $requete_edit_aut_acitve->fetchAll();
     }
?>