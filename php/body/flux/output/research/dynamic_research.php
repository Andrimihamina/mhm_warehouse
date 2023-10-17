<?php
if(!isset($_SESSION["services"])){
    header("Location: ../services");
    exit;
}

$priority = $_SESSION["services"]["priority"];
$services = $_SESSION["services"]["services"];

$patient_number = $_SESSION["services"]["patient_number"];
if($patient_number !=""){
    $patient_number = $_SESSION["services"]["patient_number"];;
}else{$patient_number = "NULL";}

$nbr_chr = $_SESSION["services"]["nbr_chr"];

$id_code_out = $_SESSION["services"]["id_code_out"];


foreach( $_POST as $cle =>$value )
{
    //echo $cle." = ".$value;
    /*
        Si value est valide donc affiche value
    */
    if ($value == "done"){
      $var_id = "$cle";
    /*
        Prndre l'id med
    */

    $categories = substr($var_id, 0, 13);
    
    // MEDICINE
    include_once("rech_categories/medicines.php");

    // CONSUMABLES MEDICAL
    include_once("rech_categories/cons_med.php");

    // MATERIALS MEDICAL
    include_once("rech_categories/mat_med.php");

    // CONSUMABLES LOGISTIC
    include_once("rech_categories/cons_log.php");

    // MATERIALS LOGISTIC
    include_once("rech_categories/mat_log.php");

    // CONSUMABLES TECHICAL
    include_once("rech_categories/cons_tec.php");

    // MATERIALS TECHICAL
    include_once("rech_categories/mat_tec.php");

    // CONSUMABLES ITC
    include_once("rech_categories/cons_itc.php");

    // MATERIALS ITC
    include_once("rech_categories/mat_itc.php");

    // CONSUMABLES FOODS
    include_once("rech_categories/cons_foo.php");

    // MATERIALS FOODS
    include_once("rech_categories/mat_foo.php");

    // MATERIALS IMMO
    include_once("rech_categories/mat_imo.php");

    }
    
}
 
?>