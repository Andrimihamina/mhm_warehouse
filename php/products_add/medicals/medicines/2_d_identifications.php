<?php
require_once("../../sql/functions/products_add/affiche_units_med.php");
// ACTIVAL NAME 0
    // DOSAGE
        $comb_dosage_0 = $dosage_0 ."". $affiche_dosage_unit_0;
    // PACKAGE
        $comb_dosage_package_0 = $dosage_package_0 ."". $affiche_dosage_package_unit_0;
        $comb_dosage_package_quantity_0 = $dosage_package_quantity_0 ."". $affiche_dosage_package_quantity_unit_0;

// ACTIVAL NAME 1
    // DOSAGE
            $comb_dosage_1 = $dosage_1 ."". $affiche_dosage_unit_1;
    // PACKAGE
            $comb_dosage_package_1 = $dosage_package_1 ."". $affiche_dosage_package_unit_1;
            $comb_dosage_package_quantity_1 = $dosage_package_quantity_1 ."". $affiche_dosage_package_quantity_unit_1;
// ACTIVAL NAME 2
    // DOSAGE
            $comb_dosage_2 = $dosage_2 ."". $affiche_dosage_unit_2;
    // PACKAGE2;
            $comb_dosage_package_2 = $dosage_package_2 ."". $affiche_dosage_package_unit_2;
            $comb_dosage_package_quantity_2 = $dosage_package_quantity_2 ."". $affiche_dosage_package_quantity_unit_2;
    // PACKAGE TOTAL
            $total_package = $package ."". $affiche_package_unit;

/* ================== ONLY ONE PRINCIPE ACTIF  ==========================*/
    $actival_name_11 = $actival_name_1;
    if($actival_name_11 == NULL){
    // DOSAGE SANS PACKAGE
        $comb_dosage_package_00 = $comb_dosage_package_0;
          if($comb_dosage_package_00 == NULL ."". NULL){
                $assoc_dosage = $comb_dosage_0;
          }else{
               /*================== DOSAGE AVEC PACKAGE  ==========================*/
              $assoc_dosage = "$comb_dosage_0" ." ". "$comb_dosage_package_0" ." ". "$comb_dosage_package_quantity_0" . " " . "$total_package";
              // DOSAGE = DOSAGE PACKAGE = DOSAGE TOTAL
              $assoc_dosage_case_1 =  "$comb_dosage_0" ." ". "$comb_dosage_0" ." ". "$comb_dosage_package_quantity_0" . " " . "$comb_dosage_package_quantity_0";
               // DOSAGE = DOSAGE PACKAGE # DOSAGE TOTAL
               $assoc_dosage_case_2 =  "$comb_dosage_0" ." ". "$comb_dosage_0" ." ". "$comb_dosage_package_quantity_0" . " " . "$total_package";
              // DOSAGE # DOSAGE PACKAGE = DOSAGE TOTAL
              $assoc_dosage_case_3 = "$comb_dosage_0" ." ". "$comb_dosage_package_0" ." ". "$comb_dosage_package_quantity_0" . " " . "$comb_dosage_package_quantity_0";
              // DOSAGE # DOSAGE PACKAGE # DOSAGE TOTAL
              $assoc_dosage_case_4 = "$comb_dosage_0" ." ". "$comb_dosage_package_0" ." ". "$comb_dosage_package_quantity_0" . " " . "$total_package";
              
               switch($assoc_dosage){
                    // DOSAGE = DOSAGE PACKAGE = DOSAGE TOTAL
                    case $assoc_dosage_case_1 :
                        $assoc_dosage = $comb_dosage_0  ."-".  $comb_dosage_package_quantity_0;
                        break; 
                    // DOSAGE = DOSAGE PACKAGE # DOSAGE TOTAL
                    case $assoc_dosage_case_2 :
                        $assoc_dosage = $comb_dosage_0 ."-". $comb_dosage_package_quantity_0 . " " . $total_package; 
                        break; 
                    // DOSAGE # DOSAGE PACKAGE = DOSAGE TOTAL
                    case $assoc_dosage_case_3 :
                        $assoc_dosage = $comb_dosage_0 ." ". $comb_dosage_package_0 ."-". $comb_dosage_package_quantity_0;
                        break;      
                    // DOSAGE # DOSAGE PACKAGE # DOSAGE TOTAL
                    case $assoc_dosage_case_4 :
                         $assoc_dosage = $comb_dosage_0 ." ". $comb_dosage_package_0 ."-". $comb_dosage_package_quantity_0 . " " . $total_package;
                         break;   
               }
          }
     }else{
          /*================== ACTIVAL NAME 1 NON VIDE  ==========================*/
          if($actival_name_2 == NULL){
            // DOSAGE SANS PACKAGE
            $comb_dosage_package_11 = $comb_dosage_package_1;
                 if($comb_dosage_package_11 == NULL ."". NULL){
                 $assoc_dosage = $comb_dosage_0 ." ". $comb_dosage_1 ;
                 }else{
                      /*================== DOSAGE AVEC PACKAGE  ==========================*/
                     $assoc_dosage =    "$comb_dosage_package_0" ." ". "$comb_dosage_package_1" ." ". 
                                        "$comb_dosage_package_quantity_0" ." ".
                                        "$total_package";
                     // DOSAGE 0 DOSAGE 1  DOSAGE PACKAGE = DOSAGE TOTAL
                     $assoc_dosage_case_1 = "$comb_dosage_package_0" ." ". "$comb_dosage_package_1" ." ". 
                                            "$comb_dosage_package_quantity_0" . " " . 
                                            "$comb_dosage_package_quantity_0" ;
                     // DOSAGE 0 DOSAGE 1  DOSAGE PACKAGE # DOSAGE TOTAL
                     $assoc_dosage_case_2 = "$comb_dosage_package_0" ." ". "$comb_dosage_package_1" ." ". 
                                            "$comb_dosage_package_quantity_0" . " " . 
                                            "$total_package";
                      switch($assoc_dosage){
                           // DOSAGE 0 DOSAGE 1  DOSAGE PACKAGE = DOSAGE TOTAL
                           case $assoc_dosage_case_1 :
                               $assoc_dosage = $comb_dosage_package_0 ." "."$comb_dosage_package_1" ."-". $comb_dosage_package_quantity_0;
                               break; 
                           // DOSAGE 0 DOSAGE 1  DOSAGE PACKAGE # DOSAGE TOTAL
                           case $assoc_dosage_case_2 :
                               $assoc_dosage = $comb_dosage_package_0 ." ". "$comb_dosage_package_1" ."-". $comb_dosage_package_quantity_0 . " " . $total_package; 
                               break;  
                      }
                 }
    }else{
            /*================== ACTIVAL NAME 2 NON VIDE  ==========================*/
            $actival_name_22 =$actival_name_2;
            if($actival_name_22 != NULL){
            // DOSAGE SANS PACKAGE  
            $comb_dosage_package_22 = $comb_dosage_package_2;
            if($comb_dosage_package_22 == NULL ."". NULL){
            $assoc_dosage = $comb_dosage_0 ." ". $comb_dosage_1 ." ". $comb_dosage_2 ;
                 }else{
                      /*================== DOSAGE AVEC PACKAGE  ==========================*/
                     $assoc_dosage =    "$comb_dosage_package_0" ." ". "$comb_dosage_package_1" ." ". "$comb_dosage_package_2" ." ".
                                        "$comb_dosage_package_quantity_0" ." ".
                                        "$total_package";
                     // DOSAGE 0 DOSAGE 1  DOSAGE PACKAGE = DOSAGE TOTAL
                     $assoc_dosage_case_1 = "$comb_dosage_package_0" ." ". "$comb_dosage_package_1" ." ". "$comb_dosage_package_2" ." ".
                                            "$comb_dosage_package_quantity_0" . " " . 
                                            "$comb_dosage_package_quantity_0" ;
                     // DOSAGE 0 DOSAGE 1  DOSAGE PACKAGE # DOSAGE TOTAL
                     $assoc_dosage_case_2 = "$comb_dosage_package_0" ." ". "$comb_dosage_package_1" ." ". "$comb_dosage_package_2" ." ".
                                            "$comb_dosage_package_quantity_0" . " " . 
                                            "$total_package";
                      switch($assoc_dosage){
                           // DOSAGE 0 DOSAGE 1  DOSAGE PACKAGE = DOSAGE TOTAL
                           case $assoc_dosage_case_1 :
                               $assoc_dosage = $comb_dosage_package_0 ." "."$comb_dosage_package_1" ." ". "$comb_dosage_package_2" ."-".  $comb_dosage_package_quantity_0;
                               break; 
                           // DOSAGE 0 DOSAGE 1  DOSAGE PACKAGE # DOSAGE TOTAL
                           case $assoc_dosage_case_2 :
                               $assoc_dosage = $comb_dosage_package_0 ." ". "$comb_dosage_package_1" ." ". "$comb_dosage_package_2" ."-". $comb_dosage_package_quantity_0 . " " . $total_package; 
                               break;  
                      }
                 }
            }
        }
     }
    //  ENSEMBLAGE DU NOM
            $Descriptions = $Descriptions . " ". $assoc_dosage ." ". $affiche_form;

 ?>