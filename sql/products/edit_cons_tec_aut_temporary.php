<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_temporary = $prod["id_cons_tec"];
     if($id_aut_temporary !=""){
     $sql_edit_aut_temporary = "SELECT * FROM cons_tec_aut_temporary JOIN cons_tec_id ON cons_tec_aut_temporary.id_cons_tec = cons_tec_id.id  WHERE cons_tec_aut_temporary.id_cons_tec = '$id_aut_temporary'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_temporary);
     $edits_aut_temporary = $requete_edit_aut_acitve->fetchAll();
     }
?>