<?php
/*==============  ==========================*/
// TYPES
if($states != NULL AND $states != "Choose..."){
     $sql_states = "SELECT * FROM `state` WHERE `id_state` = '$states'";
     $requete_states = $db->query($sql_states);
     $affiche_states = $requete_states ->fetchAll();
   
    $affiche_states = $affiche_states[0]["states"];
}else{$affiche_states = NULL;}


?>