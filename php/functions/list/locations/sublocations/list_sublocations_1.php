<?php
    //On connect le msqli
    require_once "../../../../../php/dns/connect.php";
    
    //OPTION BUTTUN LIST DEROULANT
                                
    $list_deroul_sublocation= $mysqli -> query("SELECT id_sub_loc, sublocation_descriptions FROM med_sublocation");
?>