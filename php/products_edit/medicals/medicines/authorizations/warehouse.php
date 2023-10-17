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
========================  WAEREHOUSE =============================
*/
        $Warehouse = isSet($_POST["Warehouse-$id"]) ? 1 : 0;

        require_once ("../../sql/functions/products_edit/medicals/medicines/authorizations/13_warehouse.php");
    }
}
