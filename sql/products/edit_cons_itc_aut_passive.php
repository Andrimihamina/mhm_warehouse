<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_passive = $prod["id_cons_itc"];
     if($id_aut_passive !=""){
     $sql_edit_aut_passive = "SELECT * FROM cons_itc_aut_passive JOIN cons_itc_id ON cons_itc_aut_passive.id_cons_itc = cons_itc_id.id  WHERE cons_itc_aut_passive.id_cons_itc = '$id_aut_passive'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_passive);
     $edits_aut_passive = $requete_edit_aut_acitve->fetchAll();
     }
?>