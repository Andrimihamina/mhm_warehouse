<?php
include_once ("../../env/dns_warehouse.php");
// USED
     $id_used = $prod["id"];
     if($id_used !="" and  $id_used !=0){
     $sql_edit_used= "SELECT * FROM mat_itc_used JOIN mat_itc_id ON mat_itc_used.id_mat_itc = mat_itc_id.id  WHERE mat_itc_used.id_mat_itc = '$id_used'";
     $requete_edit_used= $db->query($sql_edit_used);
     $edits_useds = $requete_edit_used->fetchAll();

     $useds = $edits_useds[0]["used_for_mat_itc"];
     }else{$useds = "Choose...";}

?>