<?php
session_start();
include_once("../../../../env/dns_warehouse.php");

if(!empty($_POST)){
    
    foreach( $_POST as $cles =>$values){
        // CANCEL
        if ($values == "cancel_item"){
            $var_cancel = "$cles";

            // ID FLUX
            $ID_flux = str_replace("cancel-", "", $var_cancel);
        
            require_once ("../../../../sql/flux/outputs/cancel_item.php");
            
            $id_code_1 = "SELECT * FROM `flux_out` WHERE `id_flux_out` = '$ID_flux'"; 
            $id_code_2 = $db->query($id_code_1); 
            $id_code_3 = $id_code_2->fetchAll(); 
            $id_code = $id_code_3[0]["id_out"];
            
            header("Location: ../../../../Layout/Flux/outputs_storage_principal.php?id=$id_code");
            exit;
        }

        // CANCEL ALL           
        if ($values == "cancel"){
            $var_cancel = "$cles";
      
            // ID FLUX ASSOCIATION
            $nbr_chr = $_POST["cancel_all"];
            
            require_once ("../../../../sql/flux/outputs/cancel_all.php");
            
            header("Location: ../../../../Layout/Flux/outputs_services.php");
            exit;
        }

        // REGISTRATION
        if ($_POST["register"] == "done"){
        // ID MED
        $id = substr($cles, 0, 14);
        // ID CONS AND MAT
        $id_cons = substr($cles, 0, 18);
        // MED COS MAT
        $abbrev_value =  substr($id, 0, 3);
        $abbrev_value_indentif =  substr($id_cons, 0, 8);

        require("../../../../php/flux/outputs/register/order_categories/medicines.php");

        require("../../../../php/flux/outputs/register/order_categories/cons_med.php");
        require("../../../../php/flux/outputs/register/order_categories/cons_log.php");
        require("../../../../php/flux/outputs/register/order_categories/cons_tec.php");
        require("../../../../php/flux/outputs/register/order_categories/cons_itc.php");
        require("../../../../php/flux/outputs/register/order_categories/cons_foo.php");

        require("../../../../php/flux/outputs/register/order_categories/mat_med.php");
        require("../../../../php/flux/outputs/register/order_categories/mat_log.php");
        require("../../../../php/flux/outputs/register/order_categories/mat_tec.php");
        require("../../../../php/flux/outputs/register/order_categories/mat_foo.php");
        require("../../../../php/flux/outputs/register/order_categories/mat_itc.php");
        require("../../../../php/flux/outputs/register/order_categories/mat_imo.php");
        }        
    }
    
    session_status();
   // FOR THE PDF
   require_once("../../../../php/flux/outputs/register/imprim.php");

   header("Location: ../../../../Layout/Flux/outputs_view.php");
}

?>