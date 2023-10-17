<?php
    //On connect le msqli
    require_once "../../../../../php/dns/connect.php";
    
    //OPTION BUTTUN LIST DEROULANT
                                
    $list_services= $mysqli -> query("SELECT id_service, services_descriptions FROM services");
?> 