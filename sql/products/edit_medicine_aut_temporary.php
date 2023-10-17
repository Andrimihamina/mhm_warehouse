<?php
include_once ("../../env/dns_warehouse.php");
     $id_aut_temporary = $prod_med["id_med"];
     if($id_aut_temporary !=""){
     $sql_edit_aut_temporary = "SELECT * FROM medicine_authorizations_temporary JOIN medicine_id ON medicine_authorizations_temporary.id_med = medicine_id.id  WHERE medicine_authorizations_temporary.id_med = '$id_aut_temporary'";
     $requete_edit_aut_acitve= $db->query($sql_edit_aut_temporary);
     $edits_aut_temporary = $requete_edit_aut_acitve->fetchAll();
     }
?>