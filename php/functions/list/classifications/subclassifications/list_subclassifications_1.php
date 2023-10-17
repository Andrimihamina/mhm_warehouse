<?php
    //On connect le msqli
    require_once "../../../../../php/dns/connect.php";
    
    //OPTION BUTTUN LIST DEROULANT
                                
    $list_deroul_subclassification= $mysqli -> query("SELECT id_med_sub_class, med_subclassification_description FROM med_sub_classifications");
?>