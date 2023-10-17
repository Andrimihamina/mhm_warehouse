<?php
    //On connect le msqli
    require_once "../../../../../php/dns/connect.php";
    
    //OPTION BUTTUN LIST DEROULANT
                                
    $list_deroul_color= $mysqli -> query("SELECT id_colors, colors_descriptions FROM cons_colors");
?>