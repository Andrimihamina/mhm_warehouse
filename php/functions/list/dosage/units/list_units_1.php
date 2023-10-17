<?php
    //On connect le msqli
    require_once "../../../../../php/dns/connect.php";
    
    //OPTION BUTTUN LIST DEROULANT
                                
    $list_deroul_units= $mysqli -> query("SELECT id_units_mv, units_description FROM med_units");
?>