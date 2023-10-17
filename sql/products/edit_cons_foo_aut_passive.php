<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_passive = $prod["id_cons_foo"];
     if($id_aut_passive !=""){
     $sql_edit_aut_passive = "SELECT * FROM cons_foo_aut_passive JOIN cons_foo_id ON cons_foo_aut_passive.id_cons_foo = cons_foo_id.id  WHERE cons_foo_aut_passive.id_cons_foo = '$id_aut_passive'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_passive);
     $edits_aut_passive = $requete_edit_aut_acitve->fetchAll();
     }
?>