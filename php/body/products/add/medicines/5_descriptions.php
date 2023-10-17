<?php

/*
=================== ASSOCIATION NAME ====================================================
*/
// TOTAL
$assoc_name = $actival_name_0 . " " . $actival_name_1 . " " . $actival_name_2; 

// NOMBRE CAS
$assoc_name_case_1 = $actival_name_0 . " " . "NULL" . " " . "NULL"; 
$assoc_name_case_2 = $actival_name_0 . " " . $actival_name_1  . " " . "NULL";
$assoc_name_case_3 = $actival_name_0 . " " . $actival_name_1  . " " . $actival_name_2;
    
switch($assoc_name){
    case "$assoc_name_case_1" :
        $assoc_name = $actival_name_0;
        break;
    case "$assoc_name_case_2" :
        $assoc_name = $actival_name_0 . " " . $actival_name_1;
        break;
    case "$assoc_name_case_3" :
        $assoc_name = $actival_name_0 . " " . $actival_name_1 . " " . $actival_name_2; 
        break;
}

    //ASSOCIATION DU NAME
    $assoc_name = $assoc_name;
?>