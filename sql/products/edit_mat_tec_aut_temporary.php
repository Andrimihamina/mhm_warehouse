<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_temporary = $prod["id_mat_tec"];
     if($id_aut_temporary !=""){
     $sql_edit_aut_temporary = "SELECT * FROM mat_tec_aut_temporary JOIN mat_tec_id ON mat_tec_aut_temporary.id_mat_tec = mat_tec_id.id  WHERE mat_tec_aut_temporary.id_mat_tec = '$id_aut_temporary'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_temporary);
     $edits_aut_temporary = $requete_edit_aut_acitve->fetchAll();
     }
?>