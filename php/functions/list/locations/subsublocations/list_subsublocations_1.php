<?php
    //On connect le msqli
    require_once "../../../../../php/dns/connect.php";
    
    //OPTION BUTTUN LIST DEROULANT
                                
    $list_deroul_subsublocation= $mysqli -> query("SELECT id_subsubloc, subsublocation_descriptions FROM med_subsublocation");
?>