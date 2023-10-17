<?php
require_once("../../env/dns_warehouse.php");

foreach( $_POST as $cle =>$value )
{
    if ($value == "edit"){
        $var_id = "$cle";

        $id = $var_id;
        
        $classification_0 = strip_tags($_POST["class_0-$id"]);
        $classification_1 = strip_tags($_POST["class_1-$id"]);
        $classification_2 = strip_tags($_POST["class_2-$id"]);

        /* ===================== APPLICATION AFFICHE=========================*/
        include_once ("../../sql/functions/products_edit/affiche_classifications.php");
    /* ===================== CLASSIFICATIONS =========================*/
    $classification =   "$affiche_classificiation_0" ." ".  "$affiche_classificiation_1" ." ".  "$affiche_classificiation_2"; 

    //CLASSIFICATION 0 !="" AND CLASSIFICATION 1 !="" AND CLASSIFICATION 2 !=""
    $assoc_classification_case_1 =   "$affiche_classificiation_0" ." ". "$affiche_classificiation_1" ." ". "$affiche_classificiation_2";
    // CLASSIFICATION 0 !="" AND CLASSIFICATION 1 !="" AND CLASSIFICATION 2 =""
    $assoc_classification_case_2 =   "$affiche_classificiation_0" ." ". "$affiche_classificiation_1" ." ". NULL;
    // CLASSIFICATION 0 !="" AND CLASSIFICATION 1 ="" AND CLASSIFICATION 2 =""
    $assoc_classification_case_3 =   "$affiche_classificiation_0" ." ". NULL ." ". NULL; 

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
        break;}

        require_once ("../../sql/functions/products_edit/medicals/medicines/classifications.php");
    }
}

?>