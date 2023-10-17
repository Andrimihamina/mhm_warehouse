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
========================  EXTERNAL MEDICAL SERVICE =============================
*/
//O THERAPY
        $o_therapy = isSet($_POST["o_therapy-$id"]) ? 1 : 0;
//GERMAN DOCS
        $german_docs = isSet($_POST["german_docs-$id"]) ? 1 : 0;
//EYE
        $eye = isSet($_POST["eye-$id"]) ? 1 : 0;
//EXTERNAL DERMATHOLOGY
        $external_dermathology = isSet($_POST["external_dermathology-$id"]) ? 1 : 0;
//OTHERS
        $external_others = isSet($_POST["external_others-$id"]) ? 1 : 0;

        require_once ("../../sql/functions/products_edit/$link_dynamique");

        header("Location: ../../Layout/Products_edit/edit_cons_log_f_7_cooperations.php");
    }
}
