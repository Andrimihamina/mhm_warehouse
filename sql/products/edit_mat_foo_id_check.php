<?php
include_once ("../../env/dns_warehouse.php");
// STATE
     $state = $edits[0]["id_mat_foo"];

     if($state !="" AND $state != 0){
     $sql_state= "SELECT * FROM mat_foo_id 
                           JOIN mat_foo_checking ON mat_foo_checking.id_mat_foo = mat_foo_id.id 
                           JOIN `state` ON mat_foo_checking.states = state.id_state 
                           WHERE mat_foo_id.id = $state";
     $requete_state = $db->query($sql_state);
     $edits_state = $requete_state->fetchAll();

     $states = $edits_state[0]["states"];
     $manufacture_date = $edits_state[0]["manufacture_date"];
     $last_check = $edits_state[0]["last_check"];
     $routing_check = $edits_state[0]["routing_check"];
     }else{
          $states = "Choose...";
          $manufacture_date = "";
          $last_check = "";
          $routing_check = "";
     }


?>