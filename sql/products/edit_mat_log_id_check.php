<?php
include_once ("../../env/dns_warehouse.php");
// STATE
     $state = $edits[0]["id_mat_log"];

     if($state !="" AND $state != 0){
     $sql_state= "SELECT * FROM mat_log_id 
                           JOIN mat_log_checking ON mat_log_checking.id_mat_log = mat_log_id.id 
                           JOIN `state` ON mat_log_checking.states = state.id_state 
                           WHERE mat_log_id.id = $state";
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