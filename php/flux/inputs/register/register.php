<?php
include_once("../../../../env/dns_warehouse.php");

if(!empty($_POST)){
    
    foreach( $_POST as $cles =>$values){
        // EDIT
        if ($values == "edit_item"){
            $var_edit = "$cles";

            // ID FLUX
            $ID_flux = str_replace("edit-", "", $var_edit);

            // ALL VARIABL EDIT
            $sql_edit = "SELECT * FROM `flux_in` WHERE `id_flux_in` = '$ID_flux'";       
            $requete_edit = $db->query($sql_edit);
            $affiche_edit = $requete_edit->fetch();

            // ABREVIATION
            $ID_abrev = $affiche_edit["id_abrev_code"];

            // VARIABLE QUANTITY
            $var_qt_edit = "qt" ."-". "$ID_abrev" . "-". "$ID_flux";
            $qt_edit = $_POST[$var_qt_edit];
            // VARIABLE PRICE
            $var_pr_edit = "pr" ."-". "$ID_abrev" . "-". "$ID_flux";
            $pr_edit = $_POST[$var_pr_edit];

            require_once ("../../../../sql/flux/inputs/edit.php");

            header("Location: ../../../../Layout/Flux/inputs_register.php");

            exit;
        }

        // CANCEL
        if ($values == "cancel_item"){
            $var_cancel = "$cles";

            // ID FLUX
            $ID_flux = str_replace("cancel-", "", $var_cancel);

            require_once ("../../../../sql/flux/inputs/cancel_item.php");

            header("Location: ../../../../Layout/Flux/inputs_register.php");
            exit;
        }

        // CANCEL ALL           
        if ($values == "cancel"){
            $var_cancel = "$cles";

            // ID FLUX ASSOCIATION
            $nbr_in = $_POST["cancel_all"];

            require_once ("../../../../sql/flux/inputs/cancel_all.php");

            header("Location: ../../../../Layout/Flux/inputs_register.php");
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

        require("../../../../php/flux/inputs/register/categories/medicines.php");

        require("../../../../php/flux/inputs/register/categories/cons_med.php");
        require("../../../../php/flux/inputs/register/categories/cons_log.php");
        require("../../../../php/flux/inputs/register/categories/cons_tec.php");
        require("../../../../php/flux/inputs/register/categories/cons_itc.php");
        require("../../../../php/flux/inputs/register/categories/cons_foo.php");

        require("../../../../php/flux/inputs/register/categories/mat_med.php");
        require("../../../../php/flux/inputs/register/categories/mat_log.php");
        require("../../../../php/flux/inputs/register/categories/mat_tec.php");
        require("../../../../php/flux/inputs/register/categories/mat_foo.php");
        require("../../../../php/flux/inputs/register/categories/mat_itc.php");
        require("../../../../php/flux/inputs/register/categories/mat_imo.php");

        }        
    }
 
    session_start();

    // FOR THE PDF
    require_once("../../../../php/flux/inputs/register/imprim.php");

    unset($_SESSION["suppliers"]);

    header("Location: ../../../../Layout/Flux/inputs_view.php");
}

?>