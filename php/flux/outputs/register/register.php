<?php
include_once("../../../../env/dns_warehouse.php");

if(!empty($_POST)){
    
    foreach( $_POST as $cles =>$values){
        // CANCEL
        if ($values == "cancel_item"){
            $var_cancel = "$cles";

            // ID FLUX
            $ID_flux = str_replace("cancel-", "", $var_cancel);
        
            require_once ("../../../../sql/flux/outputs/cancel_item.php");

            header("Location: ../../../../Layout/Flux/outputs_register.php");
            exit;
        }

        // CANCEL ALL           
        if ($values == "cancel"){
            $var_cancel = "$cles";
      
            // ID FLUX ASSOCIATION
            $nbr_chr = $_POST["cancel_all"];
            
            require_once ("../../../../sql/flux/outputs/cancel_all.php");
            
            header("Location: ../../../../Layout/Flux/outputs_register.php");
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

        require("../../../../php/flux/outputs/register/categories/medicines.php");

        require("../../../../php/flux/outputs/register/categories/cons_med.php");
        require("../../../../php/flux/outputs/register/categories/cons_log.php");
        require("../../../../php/flux/outputs/register/categories/cons_tec.php");
        require("../../../../php/flux/outputs/register/categories/cons_itc.php");
        require("../../../../php/flux/outputs/register/categories/cons_foo.php");

        require("../../../../php/flux/outputs/register/categories/mat_med.php");
        require("../../../../php/flux/outputs/register/categories/mat_log.php");
        require("../../../../php/flux/outputs/register/categories/mat_tec.php");
        require("../../../../php/flux/outputs/register/categories/mat_foo.php");
        require("../../../../php/flux/outputs/register/categories/mat_itc.php");
        require("../../../../php/flux/outputs/register/categories/mat_imo.php");

        }        
    }
 
    session_start();

    unset($_SESSION["services"]);

    header("Location: ../../../../Layout/Flux/outputs_services.php");
}

?>