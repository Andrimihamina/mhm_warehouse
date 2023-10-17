<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_temporary = $prod["id_mat_imo"];
     if($id_aut_temporary !=""){
     $sql_edit_aut_temporary = "SELECT * FROM mat_imo_aut_temporary JOIN mat_imo_id ON mat_imo_aut_temporary.id_mat_imo = mat_imo_id.id  WHERE mat_imo_aut_temporary.id_mat_imo = '$id_aut_temporary'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_temporary);
     $edits_aut_temporary = $requete_edit_aut_acitve->fetchAll();
     }
?>