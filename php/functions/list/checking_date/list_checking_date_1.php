<?php
    //On connect le msqli
    require_once "../../../../../php/dns/connect.php";
    
    //OPTION BUTTUN LIST DEROULANT
                                
    $list_deroul_checking_date= $mysqli -> query("SELECT id_date, routing_check_date FROM checking_date");
?>