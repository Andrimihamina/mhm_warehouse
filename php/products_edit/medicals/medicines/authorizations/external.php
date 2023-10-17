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
========================  EXTERNAL =============================
*/
//ADMIN
        $training_external_admin = isSet($_POST["training_external_admin-$id"]) ? 1 : 0;
//MEDICAL
        $training_external_medical = isSet($_POST["training_external_medical-$id"]) ? 1 : 0;
//SOCIAL
        $training_external_social = isSet($_POST["training_external_social-$id"]) ? 1 : 0;
//TECHNICAL
        $training_external_technical = isSet($_POST["training_external_technical-$id"]) ? 1 : 0;


        require_once ("../../sql/functions/products_edit/medicals/medicines/authorizations/11_external.php");
    }
}
