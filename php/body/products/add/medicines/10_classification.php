<?php
    /*
    ================== ASSOCIATION CLASSIFIATION ==========================
    */
    include_once("../../../../../php/body/products/add/medicines/9_affiche_classification.php");

    $classification =    "$affiche_classificiation_0" ." ". 
                        "$affiche_classificiation_1" ." ". 
                        "$affiche_classificiation_2"; 

   //CLASSIFICATION 0 !="" AND CLASSIFICATION 1 !="" AND CLASSIFICATION 2 !=""
   $assoc_classification_case_1 =   "$affiche_classificiation_0" ." ". 
                                    "$affiche_classificiation_1" ." ". 
                                    "$affiche_classificiation_2";
    // CLASSIFICATION 0 !="" AND CLASSIFICATION 1 !="" AND CLASSIFICATION 2 =""
   $assoc_classification_case_2 =   "$affiche_classificiation_0" ." ". 
                                    "$affiche_classificiation_1" ." ". 
                                    "NULL";
   // CLASSIFICATION 0 !="" AND CLASSIFICATION 1 ="" AND CLASSIFICATION 2 =""
   $assoc_classification_case_3 =   "$affiche_classificiation_0" ." ". 
                                    "NULL" ." ". 
                                    "NULL"; 
    switch($classification){
         // CLASSIFICATION 0 !="" AND CLASSIFICATION 1 ="" AND CLASSIFICATION 2 =""
         case $assoc_classification_case_3 :
            $classification = $affiche_classificiation_0;
            break; 
        // CLASSIFICATION 0 !="" AND CLASSIFICATION 1 !="" AND CLASSIFICATION 2 =""
         case $assoc_classification_case_2 :
            $classification = $affiche_classificiation_0 ." ". "$affiche_classificiation_1";
            break;
        //CLASSIFICATION 0 !="" AND CLASSIFICATION 1 !="" AND CLASSIFICATION 2 !=""
         case $assoc_classification_case_1 :
             $classification = $affiche_classificiation_0 ." "."$affiche_classificiation_1" ." ". $affiche_classificiation_2;
             break; 
         
         
    }
?>