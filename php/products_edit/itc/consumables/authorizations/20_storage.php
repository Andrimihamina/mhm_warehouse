<?php
require_once("../../env/dns_warehouse.php");

foreach( $_POST as $cle =>$value )
{
    if ($value == "edit"){
        $var_id = "$cle";

        $id = $var_id;
/*
========================  TEMPORARY =============================
*/
//TECHNICAL STORAGE
        $technical_storage = isSet($_POST["technical_storage-$id"]) ? 1 : 0;
//MEDICAL STORAGE
        $medical_storage = isSet($_POST["medical_storage-$id"]) ? 1 : 0;
//NO MEDICAL STORAGE
        $no_medical_storage = isSet($_POST["no_medical_storage-$id"]) ? 1 : 0;

        require_once ("../../sql/functions/products_edit/$link_dynamique");

        header("Location: ../../Layout/Products_edit/edit_cons_itc_f_20_storage.php");
    }
}
