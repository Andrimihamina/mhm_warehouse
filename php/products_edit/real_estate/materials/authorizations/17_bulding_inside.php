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
========================  BULDING INSIDE =============================
*/
//WELL AND WATER
        $bulding_inside_well_and_water = isSet($_POST["bulding_inside_well_and_water-$id"]) ? 1 : 0;
//SOLAR PANEL AND ELECTRICITY
        $bulding_inside_solar = isSet($_POST["bulding_inside_solar-$id"]) ? 1 : 0;
//GENERATOR AND ELECTRICITY
        $bulding_inside_generator = isSet($_POST["bulding_inside_generator-$id"]) ? 1 : 0;
//OPERATION
        $bulding_inside_operation = isSet($_POST["bulding_inside_operation-$id"]) ? 1 : 0;
//EUIPMENT
        $bulding_inside_equipement = isSet($_POST["bulding_inside_equipement-$id"]) ? 1 : 0;

        require_once ("../../sql/functions/products_edit/$link_dynamique");

        header("Location: ../../Layout/Products_edit/edit_mat_imo_f_17_bulding_inside.php");
    }
}
