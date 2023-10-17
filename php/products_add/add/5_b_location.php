<?php
   require_once("../../sql/functions/products_add/affiche_location.php");
    
   $location = "$affiche_location_0" ." ". "$affiche_location_1" ." ". "$affiche_location_2"; 
//LOCATION 0 !="" AND LOCATION 1 !="" AND LOCATION 2 !=""
   $assoc_location_case_1 = "$affiche_location_0" ." ". "$affiche_location_1" ." ".  "$affiche_location_2"; 
//LOCATION 0 !="" AND LOCATION 1 !="" AND LOCATION 2 =""
   $assoc_location_case_2 = "$affiche_location_0" ." ".  "$affiche_location_1" ." ". NULL; 
//LOCATION 0 !="" AND LOCATION 1 ="" AND LOCATION 2 =""
   $assoc_location_case_3 = "$affiche_location_0" ." ". NULL ." ". NULL; 

switch($location){
        //LOCATION 0 !="" AND LOCATION 1 ="" AND LOCATION 2 =""
            case $assoc_location_case_3 :
            $location = "$affiche_location_0";
            break;
        //LOCATION 0 !="" AND LOCATION 1 !="" AND LOCATION 2 =""
        case $assoc_location_case_2 :
            $location = "$affiche_location_0" ."-". 
                        "$affiche_location_1";
            break;
        //LOCATION 0 !="" AND LOCATION 1 !="" AND LOCATION 2 !=""
        case $assoc_location_case_1 :
            $location = "$affiche_location_0" ."-". 
                        "$affiche_location_1" ."-". 
                        "$affiche_location_2"; 
            break; 
    } 
 ?>