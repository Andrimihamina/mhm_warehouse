<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_temporary = $prod["id_cons_foo"];
     if($id_aut_temporary !=""){
     $sql_edit_aut_temporary = "SELECT * FROM cons_foo_aut_temporary JOIN cons_foo_id ON cons_foo_aut_temporary.id_cons_foo = cons_foo_id.id  WHERE cons_foo_aut_temporary.id_cons_foo = '$id_aut_temporary'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_temporary);
     $edits_aut_temporary = $requete_edit_aut_acitve->fetchAll();
     }
?>