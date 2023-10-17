<?php
    //On connect le msqli
    require_once "../../../../../php/dns/connect.php";
    
    //OPTION BUTTUN LIST DEROULANT
                                
    $list_deroul_suppliers= $mysqli -> query("SELECT `id_suppliers`, `name` FROM `suppliers`");
?>