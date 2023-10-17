<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_active = $prod["id_cons_foo"];
     if($id_aut_active !=""){
     $sql_edit_aut_active = "SELECT * FROM cons_foo_aut_active JOIN cons_foo_id ON cons_foo_aut_active.id_cons_foo = cons_foo_id.id  WHERE cons_foo_aut_active.id_cons_foo = '$id_aut_active'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_active);
     $edits_aut_active = $requete_edit_aut_acitve->fetchAll();
     }
?>