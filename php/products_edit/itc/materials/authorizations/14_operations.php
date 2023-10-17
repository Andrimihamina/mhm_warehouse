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
========================  OPERATIONS =============================
*/
        $Operation_Cleaning = isSet($_POST["Operation_Cleaning-$id"]) ? 1 : 0;
        $Operation_Cooking = isSet($_POST["Operation_Cooking-$id"]) ? 1 : 0;
        $Operation_Laundry = isSet($_POST["Operation_Laundry-$id"]) ? 1 : 0;

        require_once ("../../sql/functions/products_edit/$link_dynamique");

        header("Location: ../../Layout/Products_edit/edit_mat_itc_f_14_operations.php");
    }
}
