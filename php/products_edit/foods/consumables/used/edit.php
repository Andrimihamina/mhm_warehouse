<?php
require_once("../../env/dns_warehouse.php");

foreach( $_POST as $cle =>$value )
{
    if ($value == "edit"){
        $var_id = "$cle";

        $id = $var_id;
        
        $used_for = strip_tags($_POST["used-$id"]);

        require_once ("../../sql/functions/products_edit/foods/consumables/used_for.php");     
        header("Location: ../../Layout/Products_edit/edit_cons_foo_b_used.php");
    }
}

?>