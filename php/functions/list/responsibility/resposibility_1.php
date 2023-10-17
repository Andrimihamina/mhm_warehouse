<?php
    //On connect le msqli
    require_once "../php/dns/connect.php";
    
    //OPTION BUTTUN LIST DEROULANT
                                
    $resultSet= $mysqli -> query("SELECT id_resp, responsability FROM mhm_resp ORDER BY `responsability` ASC");
?>