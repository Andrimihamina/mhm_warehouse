<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_temporary = $prod["id_mat_itc"];
     if($id_aut_temporary !=""){
     $sql_edit_aut_temporary = "SELECT * FROM mat_itc_aut_temporary JOIN mat_itc_id ON mat_itc_aut_temporary.id_mat_itc = mat_itc_id.id  WHERE mat_itc_aut_temporary.id_mat_itc = '$id_aut_temporary'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_temporary);
     $edits_aut_temporary = $requete_edit_aut_acitve->fetchAll();
     }
?>