<?php
    //On connect le msqli
    require_once "../../../../../php/dns/connect.php";
    
    //OPTION BUTTUN LIST DEROULANT
                                
    $list_deroul_gauss= $mysqli -> query("SELECT id_gauss, gauss_descriptions FROM cons_gauss");
?>