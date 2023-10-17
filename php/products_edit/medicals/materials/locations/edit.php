<?php
require_once("../../env/dns_warehouse.php");

foreach( $_POST as $cle =>$value )
{
    if ($value == "edit"){
        $var_id = "$cle";

        $id = $var_id;
        
        $location_0 = strip_tags($_POST["location_0-$id"]);
        $location_1 = strip_tags($_POST["location_1-$id"]);
        $location_2 = strip_tags($_POST["location_2-$id"]);

        // LOCATION 1
        $tbl_location_1 = "mat_location";
        $colums_location_1 = "id_location";
        // LOCATION 2
        $tbl_location_2 = "mat_sublocation";
        $colums_location_2 = "id_sub_loc";
        // LOCATION 3
        $tbl_location_3 = "mat_subsublocation";
        $colums_location_3 = "id_subsubloc";

        /* ===================== APPLICATION AFFICHE=========================*/
        include_once ("../../php/products_add/add/5_b_location.php");

        require_once ("../../sql/functions/products_edit/medicals/materials/location.php");
                
        header("Location: ../../Layout/Products_edit/edit_mat_med_c_locations.php");
    }
}

?>