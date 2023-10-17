<?php
require_once("../../env/dns_warehouse.php");

foreach( $_POST as $cle =>$value )
{
    if ($value == "edit"){
        $var_id = "$cle";

        $id = $var_id;
/*======================== ACTIVE =============================*/
/*========================  MEDICAL =============================*/
/*========================  STERILIZATION AND LABORATORY =============================*/
//STERILIZATIONS
        $sterilizations = isSet($_POST["sterilizations-$id"]) ? 1 : 0;
//LABORATORY
        $laboratory = isSet($_POST["laboratory-$id"]) ? 1 : 0;

        require_once ("../../sql/functions/products_edit/$link_dynamique");

        header("Location: ../../Layout/Products_edit/edit_cons_itc_f_3_steri_labo.php");
    }
}
