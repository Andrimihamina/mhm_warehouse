<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_temporary = $prod["id_cons_log"];
     if($id_aut_temporary !=""){
     $sql_edit_aut_temporary = "SELECT * FROM cons_log_aut_temporary JOIN cons_log_id ON cons_log_aut_temporary.id_cons_log = cons_log_id.id  WHERE cons_log_aut_temporary.id_cons_log = '$id_aut_temporary'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_temporary);
     $edits_aut_temporary = $requete_edit_aut_acitve->fetchAll();
     }
?>