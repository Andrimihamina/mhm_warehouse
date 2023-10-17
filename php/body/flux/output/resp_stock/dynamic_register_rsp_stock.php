<?php
include_once("../../../../header/profile.php");
/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
*/

include_once("../../../../dns/connect.php");
include("../../../../../php/dns/connect_patient_system.php");

if(!empty($_POST)){
    
    
foreach($_POST as $cles =>$values)
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
    // id med
    $id = substr($cles, 0, 14);
    // id cons
    $id_cons = substr($cles, 0, 18); 

    $abbrev_value =  substr($id, 0, 3);

    $abbrev_value_indentif =  substr($id, 0, 8);
    
/*     ============MEDICINE===============================    */
        require("../../../../../php/body/flux/output/resp_stock/categories/medicines.php");
/*     ============CONSUMABLES MEDICAL===============================    */
        require("../../../../../php/body/flux/output/resp_stock/categories/cons_med.php");
/*     ============MATERIALS MEDICAL===============================    */
        require("../../../../../php/body/flux/output/resp_stock/categories/mat_med.php");
/*     ============CONSUMABLES LOGISTICS===============================    */
        require("../../../../../php/body/flux/output/resp_stock/categories/cons_log.php");
/*     ============MATERIALS LOGISTICS===============================    */
        require("../../../../../php/body/flux/output/resp_stock/categories/mat_log.php");
/*     ============CONSUMABLE TECHNICAL===============================    */
        require("../../../../../php/body/flux/output/resp_stock/categories/cons_tec.php");
/*     ============MATERIALS TECHNICAL===============================    */    
        require("../../../../../php/body/flux/output/resp_stock/categories/mat_tec.php");
/*     ============CONSUMABLES ITC===============================    */    
        require("../../../../../php/body/flux/output/resp_stock/categories/cons_itc.php");
/*     ============MATERIALS ITC===============================    */    
        require("../../../../../php/body/flux/output/resp_stock/categories/mat_itc.php");
/*     ============CONSUMABLES FOODS===============================    */    
        require("../../../../../php/body/flux/output/resp_stock/categories/cons_foo.php");
/*     ============MATERIALS FOODS===============================    */    
        require("../../../../../php/body/flux/output/resp_stock/categories/mat_foo.php");
/*     ============MATERIALS IMMO===============================    */    
require("../../../../../php/body/flux/output/resp_stock/categories/mat_imo.php");
    }
    
    }
    
    include_once("imprim_out.php"); 

    header("Location: ../../../../../html/body/flux_output/view_output/view");
}
?>