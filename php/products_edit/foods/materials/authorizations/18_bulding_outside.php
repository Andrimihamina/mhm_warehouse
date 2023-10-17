<?php
require_once("../../env/dns_warehouse.php");

foreach( $_POST as $cle =>$value )
{
    if ($value == "edit"){
        $var_id = "$cle";

        $id = $var_id;
/*
========================  PASSIVE =============================
*/
/*
========================  BULDING OUTSIDE =============================
*/
//TECHNICAL SITE
        $bulding_outside_technical = isSet($_POST["bulding_outside_technical-$id"]) ? 1 : 0;
//CANTEEN
        $bulding_outside_canteen = isSet($_POST["bulding_outside_canteen-$id"]) ? 1 : 0;
//YARD
        $bulding_outside_yard = isSet($_POST["bulding_outside_yard-$id"]) ? 1 : 0;
//VILLA KB
        $bulding_outside_villa_kb = isSet($_POST["bulding_outside_villa_kb-$id"]) ? 1 : 0;
//SECURITY
        $bulding_outside_security = isSet($_POST["bulding_outside_security-$id"]) ? 1 : 0;

        require_once ("../../sql/functions/products_edit/$link_dynamique");

        header("Location: ../../Layout/Products_edit/edit_mat_foo_f_18_bulding_outside.php");
    }
}
