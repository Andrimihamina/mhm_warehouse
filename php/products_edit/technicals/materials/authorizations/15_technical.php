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
========================  TECHNICAL =============================
*/
        $technical_technical = isSet($_POST["technical_technical-$id"]) ? 1 : 0;
        $technical_Biomed = isSet($_POST["technical_Biomed-$id"]) ? 1 : 0;
        $technical_Mechanical = isSet($_POST["technical_Mechanical-$id"]) ? 1 : 0;

        require_once ("../../sql/functions/products_edit/$link_dynamique");

        header("Location: ../../Layout/Products_edit/edit_mat_tec_f_15_technicals.php");
    }
}
