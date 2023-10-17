<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_temporary = $prod["id_mat_med"];
     if($id_aut_temporary !=""){
     $sql_edit_aut_temporary = "SELECT * FROM mat_med_aut_temporary JOIN mat_med_id ON mat_med_aut_temporary.id_mat_med = mat_med_id.id  WHERE mat_med_aut_temporary.id_mat_med = '$id_aut_temporary'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_temporary);
     $edits_aut_temporary = $requete_edit_aut_acitve->fetchAll();
     }
?>