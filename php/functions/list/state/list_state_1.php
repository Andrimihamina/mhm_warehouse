<?php
    //On connect le msqli
    require_once "../../../../../php/dns/connect.php";
    
    //OPTION BUTTUN LIST DEROULANT
                                
    $list_state_date= $mysqli -> query("SELECT id_state, states FROM `state`");
?>