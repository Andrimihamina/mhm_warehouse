<?php
include_once ("../../env/dns_warehouse.php");
// USED
     $id_used = $prod_med["id"];
     if($id_used !="" and  $id_used !=0){
     $sql_edit_used= "SELECT * FROM cons_foo_used JOIN cons_foo_id ON cons_foo_used.id_cons_foo = cons_foo_id.id  WHERE cons_foo_used.id_cons_foo = '$id_used'";
     $requete_edit_used= $db->query($sql_edit_used);
     $edits_useds = $requete_edit_used->fetchAll();

     $useds = $edits_useds[0]["used_for"];
     }else{$useds = "Choose...";}

?>