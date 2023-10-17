<?php
    //On connect le msqli
    require_once "../../../../../php/dns/connect.php";
    
    //OPTION BUTTUN LIST DEROULANT
                                
    $list_deroul_classification= $mysqli -> query("SELECT id_class, classifications_descriptions FROM med_classification");
?>