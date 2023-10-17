<?php
require_once("../../env/dns_warehouse.php");

foreach( $_POST as $cle =>$value )
{
    if ($value == "edit"){
        $var_id = "$cle";

        $id = $var_id;
        
        $qt_price = strip_tags($_POST["qt-$id"]);
        $box = strip_tags($_POST["unit-$id"]);
        $price = strip_tags($_POST["price-$id"]);

        include_once ("../../sql/functions/products_add/prices_box.php");

        require_once ("../../sql/functions/products_edit/foods/materials/prices.php");

        header("Location: ../../Layout/Products_edit/edit_mat_foo_d_prices.php");
    }
}

?>