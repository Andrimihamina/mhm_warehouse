<?php
require_once("../../env/dns_warehouse.php");

foreach( $_POST as $cle =>$value )
{
    if ($value == "edit"){
        $var_id = "$cle";

        $id = $var_id;

        //GERMANY
        $froms_germany = isSet($_POST["froms_germany-$id"]) ? 1 : 0;
        //MADAGASKAR
        $froms_madagaskar = isSet($_POST["froms_madagaskar-$id"]) ? 1 : 0;

        require_once ("../../sql/functions/products_edit/real_estate/materials/froms.php");

        header("Location: ../../Layout/Products_edit/edit_mat_imo_e_from.php");
    }
}

?>