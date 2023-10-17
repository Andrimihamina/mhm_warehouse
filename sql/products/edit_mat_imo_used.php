<?php
include_once ("../../env/dns_warehouse.php");
// USED
     $id_used = $prod["id"];
     if($id_used !="" and  $id_used !=0){
     $sql_edit_used= "SELECT * FROM mat_imo_used JOIN mat_imo_id ON mat_imo_used.id_mat_imo = mat_imo_id.id  WHERE mat_imo_used.id_mat_imo = '$id_used'";
     $requete_edit_used= $db->query($sql_edit_used);
     $edits_useds = $requete_edit_used->fetchAll();

     $useds = $edits_useds[0]["used_for_mat_imo"];
     }else{$useds = "Choose...";}

?>