<?php
require_once("../../env/dns_warehouse.php");

foreach( $_POST as $cle =>$value )
{
    if ($value == "edit"){
        $var_id = "$cle";

        $id = $var_id;
/*
======================== ACTIVE =============================
*/
/*
========================  TRAINING AND TEACHING =============================
*/
/*
========================  INTERNAL =============================
*/
//ADMIN
        $training_internal_admin = isSet($_POST["training_internal_admin-$id"]) ? 1 : 0;
//MEDICAL
        $training_internal_medical = isSet($_POST["training_internal_medical-$id"]) ? 1 : 0;
//SOCIAL
        $training_internal_social = isSet($_POST["training_internal_social-$id"]) ? 1 : 0;
//TECHNICAL
        $training_internal_technical = isSet($_POST["training_internal_technical-$id"]) ? 1 : 0;

        require_once ("../../sql/functions/products_edit/$link_dynamique");

        header("Location: ../../Layout/Products_edit/edit_mat_foo_f_10_internal.php");
    }
}
