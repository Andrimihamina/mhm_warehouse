<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_passive = $prod["id_mat_foo"];
     if($id_aut_passive !=""){
     $sql_edit_aut_passive = "SELECT * FROM mat_foo_aut_passive JOIN mat_foo_id ON mat_foo_aut_passive.id_mat_foo = mat_foo_id.id  WHERE mat_foo_aut_passive.id_mat_foo = '$id_aut_passive'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_passive);
     $edits_aut_passive = $requete_edit_aut_acitve->fetchAll();
     }
?>