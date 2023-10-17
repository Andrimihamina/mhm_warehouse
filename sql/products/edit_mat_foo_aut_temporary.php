<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_temporary = $prod["id_mat_foo"];
     if($id_aut_temporary !=""){
     $sql_edit_aut_temporary = "SELECT * FROM mat_foo_aut_temporary JOIN mat_foo_id ON mat_foo_aut_temporary.id_mat_foo = mat_foo_id.id  WHERE mat_foo_aut_temporary.id_mat_foo = '$id_aut_temporary'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_temporary);
     $edits_aut_temporary = $requete_edit_aut_acitve->fetchAll();
     }
?>