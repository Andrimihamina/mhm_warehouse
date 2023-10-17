<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_passive = $prod["id_cons_tec"];
     if($id_aut_passive !=""){
     $sql_edit_aut_passive = "SELECT * FROM cons_tec_aut_passive JOIN cons_tec_id ON cons_tec_aut_passive.id_cons_tec = cons_tec_id.id  WHERE cons_tec_aut_passive.id_cons_tec = '$id_aut_passive'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_passive);
     $edits_aut_passive = $requete_edit_aut_acitve->fetchAll();
     }
?>