<?php
    //On connect le msqli
    require_once "../../../../../php/dns/connect.php";
    
    //OPTION BUTTUN LIST DEROULANT
                                
    $list_deroul_application= $mysqli -> query("SELECT id_appli, application_descriptions FROM med_application");
?>