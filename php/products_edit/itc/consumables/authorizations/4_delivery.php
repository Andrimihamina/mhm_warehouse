<?php
require_once("../../env/dns_warehouse.php");

foreach( $_POST as $cle =>$value )
{
    if ($value == "edit"){
        $var_id = "$cle";

        $id = $var_id;
/*======================== ACTIVE =============================*/
/*========================  MEDICAL =============================*/

/*
========================  INPATIENTS OBSTETRICAL =============================
*/
//DELIVERY
        $inpatients_delivery = isSet($_POST["inpatients_delivery-$id"]) ? 1 : 0;

        require_once ("../../sql/functions/products_edit/$link_dynamique");

        header("Location: ../../Layout/Products_edit/edit_cons_itc_f_4_delivery.php");
    }
}
