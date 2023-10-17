<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_temporary = $prod["id_cons_itc"];
     if($id_aut_temporary !=""){
     $sql_edit_aut_temporary = "SELECT * FROM cons_itc_aut_temporary JOIN cons_itc_id ON cons_itc_aut_temporary.id_cons_itc = cons_itc_id.id  WHERE cons_itc_aut_temporary.id_cons_itc = '$id_aut_temporary'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_temporary);
     $edits_aut_temporary = $requete_edit_aut_acitve->fetchAll();
     }
?>