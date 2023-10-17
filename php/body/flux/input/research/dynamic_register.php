<?php
/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
*/

include_once("../../../../dns/connect.php");
include_once("../../../../dns/connect_patient_system.php");

if(!empty($_POST)){
    
foreach( $_POST as $cles =>$values)
    {
     /*   
    echo "<pre>";
    echo $cles." = ".$values;
    echo "</pre>";
    */
    if ($_POST["register"] == "done"){
        /*
        On  update le donne 
       */
    // ID MED
    $id = substr($cles, 0, 14);
    // ID CONS MAT
    $id_cons = substr($cles, 0, 18);

    // MED COS MAT
    $abbrev_value =  substr($id, 0, 3);
    $abbrev_value_indentif =  substr($id_cons, 0, 8);


    /*
    ============MEDICINE================================
    */
        require("../../../../../php/body/flux/input/research/register_categories/medicines.php");
    /*
    ============CONSUMABLES================================
    */
        require("../../../../../php/body/flux/input/research/register_categories/cons_med.php");
    /*
    ============MATERIALS================================
    */
        require("../../../../../php/body/flux/input/research/register_categories/mat_med.php");
    /*
    ============CONSUMABLES LOGISTICS================================
    */
        require("../../../../../php/body/flux/input/research/register_categories/cons_log.php");    
    /*
    ============CONSUMABLES LOGISTICS================================
    */
        require("../../../../../php/body/flux/input/research/register_categories/mat_log.php");  
    /*
    ============CONSUMABLES LOGISTICS================================
    */
        require("../../../../../php/body/flux/input/research/register_categories/cons_tec.php");    
    /*
    ============MATERIALS TECHNICALS================================
    */
        require("../../../../../php/body/flux/input/research/register_categories/mat_tec.php");  
    /*
    ============CONSUMABLES ITC================================
    */
        require("../../../../../php/body/flux/input/research/register_categories/cons_itc.php");  
    /*
    ============MATERIALS ITC================================
    */
        require("../../../../../php/body/flux/input/research/register_categories/mat_itc.php");
     /*
    ============CONSUMABLES FOODS================================
    */
    require("../../../../../php/body/flux/input/research/register_categories/cons_foo.php");
    /*
    ============MATERIALS FOODS================================
    */
    require("../../../../../php/body/flux/input/research/register_categories/mat_foo.php");
    /*
    ============MATERIALS IMMO================================
    */
    require("../../../../../php/body/flux/input/research/register_categories/mat_imo.php");
       }
          
    }
    include_once("imprim.php");   
    
    unset($_SESSION["suppliers"]); 

    header("Location: ../../../../../html/body/flux/view_input/view");
}
?>