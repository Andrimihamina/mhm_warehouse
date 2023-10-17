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
========================  MEDICAL =============================
*/
/*
========================  INPATIENTS SURGERIES =============================
*/
//GENERAL
        $inpatients_surgeries = isSet($_POST["inpatients_surgeries-$id"]) ? 1 : 0;

        require_once ("../../sql/functions/products_edit/$link_dynamique");

        header("Location: ../../Layout/Products_edit/edit_mat_tec_f_6_surgery.php");
    }
}
