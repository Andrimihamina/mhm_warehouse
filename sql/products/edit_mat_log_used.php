<?php
include_once ("../../env/dns_warehouse.php");
// USED
     $id_used = $prod["id"];
     if($id_used !="" and  $id_used !=0){
     $sql_edit_used= "SELECT * FROM mat_log_used JOIN mat_log_id ON mat_log_used.id_mat_log = mat_log_id.id  WHERE mat_log_used.id_mat_log = '$id_used'";
     $requete_edit_used= $db->query($sql_edit_used);
     $edits_useds = $requete_edit_used->fetchAll();

     $useds = $edits_useds[0]["used_for_mat_log"];
     }else{$useds = "Choose...";}

?>