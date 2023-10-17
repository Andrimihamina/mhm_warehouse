<?php
require_once("../../env/dns_warehouse.php");

foreach( $_POST as $cle =>$value )
{
    if ($value == "edit"){
        $var_id = "$cle";

        $id = $var_id;

        $stock= $_POST["stock-$id"];
        $quantity_minimal= $_POST["quantity_minimal-$id"];
        $quantity_avarage= $_POST["quantity_avarage-$id"];

        require_once ("../../sql/functions/products_edit/medicals/consumables/quantity.php");

        header("Location: ../../Layout/Products_edit/edit_cons_med_i_quantity.php");
    }
}

?>