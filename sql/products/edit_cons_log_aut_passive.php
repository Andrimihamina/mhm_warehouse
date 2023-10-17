<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_passive = $prod["id_cons_log"];
     if($id_aut_passive !=""){
     $sql_edit_aut_passive = "SELECT * FROM cons_log_aut_passive JOIN cons_log_id ON cons_log_aut_passive.id_cons_log = cons_log_id.id  WHERE cons_log_aut_passive.id_cons_log = '$id_aut_passive'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_passive);
     $edits_aut_passive = $requete_edit_aut_acitve->fetchAll();
     }
?>