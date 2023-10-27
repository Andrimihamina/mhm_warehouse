<?php
require_once("../../env/dns_warehouse.php");
if(!empty($_POST)){
foreach( $_POST as $cle =>$value )
{
    if ($value == "edit"){
        $var_id = "$cle";

        $id = $var_id;
/*
======================== ACTIVE =============================
*/
    /*
    ======================== MOBILE MEDICAL =============================
    */
    //IT ADMIN
        $ulm = isSet($_POST["ulm-$id"]) ? 1 : 0;
    //CEO
        $midmob = isSet($_POST["midmob-$id"]) ? 1 : 0;
    //ADMINISTRATOR
        $detmob = isSet($_POST["detmob-$id"]) ? 1 : 0;
    //WARE ADMIN
        $ambulance_1 = isSet($_POST["ambulance_1-$id"]) ? 1 : 0;
    //AMBULANCE 2
        $ambulance_2 = isSet($_POST["ambulance_2-$id"]) ? 1 : 0;
    //OUTREACHES WITH PARTENERS
        $outreaches_with_parteners = isSet($_POST["outreaches_with_parteners-$id"]) ? 1 : 0;

        require_once ("../../sql/functions/products_edit/$link_dynamique");
 
        header("Location: ../../Layout/Products_edit/edit_cons_foo_f_1_mobile_medical.php");
    }
}
}
?>