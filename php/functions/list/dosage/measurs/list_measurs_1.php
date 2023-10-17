<?php
    //On connect le msqli
    require_once "../../../../../php/dns/connect.php";
    
    //OPTION BUTTUN LIST DEROULANT
                                
    $list_deroul_measurs= $mysqli -> query("SELECT id_measurs, measurs_descriptions FROM cons_measurs");
?>