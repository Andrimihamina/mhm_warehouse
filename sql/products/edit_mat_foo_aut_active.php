<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_active = $prod["id_mat_foo"];
     if($id_aut_active !=""){
     $sql_edit_aut_active = "SELECT * FROM mat_foo_aut_active JOIN mat_foo_id ON mat_foo_aut_active.id_mat_foo = mat_foo_id.id  
                                        WHERE mat_foo_aut_active.id_mat_foo = '$id_aut_active'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_active);
     $edits_aut_active = $requete_edit_aut_acitve->fetchAll();
     }
?>