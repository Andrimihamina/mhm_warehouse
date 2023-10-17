<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_temporary = $prod["id_cons_med"];
     if($id_aut_temporary !=""){
     $sql_edit_aut_temporary = "SELECT * FROM cons_med_aut_temporary JOIN cons_med_id ON cons_med_aut_temporary.id_cons_med = cons_med_id.id  WHERE cons_med_aut_temporary.id_cons_med = '$id_aut_temporary'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_temporary);
     $edits_aut_temporary = $requete_edit_aut_acitve->fetchAll();
     }
?>