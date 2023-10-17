<?php
    //On connect le msqli
    require_once "../../../../../php/dns/connect.php";
    
    /*RECHERCHER LE SERVICE VALIDE POUR LE RESPONSABLE*/
    $id_resp = $responsi[0]["id_resp"];            
    //OPTION BUTTUN LIST DEROULANT          
    $list_services= $mysqli -> query("SELECT id_service, services FROM service_responsibility WHERE `$id_resp` = 1");
?> 