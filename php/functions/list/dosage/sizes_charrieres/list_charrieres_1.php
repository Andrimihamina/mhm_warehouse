<?php
    //On connect le msqli
    require_once "../../../../../php/dns/connect.php";
    
    //OPTION BUTTUN LIST DEROULANT
                                
    $list_deroul_charrieres= $mysqli -> query("SELECT id_charrieres, charrieres_descriptions FROM cons_charrieres");
?>