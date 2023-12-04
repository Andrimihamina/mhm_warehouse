<?php
if(!empty($_POST)){
    $_SESSION["error_incomplet"] = [];
    $_SESSION["error_doublons"] = [];

    require_once ("../../env/dns_warehouse.php");
    require_once ("../../env/dns_patient_system.php");
    // ALL VARIABLES
    require_once ("../../php/products_add/medicals/medicines/1_a_variables.php");
    require_once ("../../php/products_add/add/1_b_variables.php");
    require_once ("../../php/products_add/add/1_c_variables_froms.php");
    require_once ("../../php/products_add/add/1_d_variables_aut.php");
    // ALL IDENTIFICATIONS
    require_once ("../../php/products_add/medicals/medicines/2_a_identifications.php");
    require_once ("../../php/products_add/add/2_b_identifications.php");

    if($_SESSION["error_incomplet"]===[]){
        // ABREVIATIONS
        require_once ("../../php/products_add/medicals/medicines/3_a_abreviations.php");
        require_once ("../../php/products_add/add/3_b_abreviations.php");
        // DESCRIPTIONS
        require_once ("../../php/products_add/medicals/medicines/2_c_identifications.php");
        require_once ("../../php/products_add/medicals/medicines/2_d_identifications.php");
        // USED FOR
        require_once ("../../php/products_add/medicals/medicines/4_a_used_for.php");
        // LOCATIONS
        require_once ("../../php/products_add/medicals/medicines/5_a_location.php");
        require_once ("../../php/products_add/add/5_b_location.php");
        // PRICES
        require_once ("../../php/products_add/add/6_prices.php");

        // CHECKING
        require_once ("../../php/products_add/medicals/medicines/7_checking.php");
            if($checkrows_id > 0)
            {$_SESSION["error_doublons"][] = "This Items is alredy register";}
            else {
                // MEDICINE ID
                require_once ("../../sql/functions/products_add/medicals/medicines/medicine_id.php");

                    // PATIENTS SYSTEM
                    // ITEMS
                    require_once ("../../sql/functions/products_add/medicals/medicines/med_patient_system.php");
                    // INVENTORY
                    require_once ("../../sql/functions/products_add/medicals/medicines/med_inventory.php");

                // USED FOR
                require_once ("../../sql/functions/products_add/medicals/medicines/used_for.php"); 
                // LOCATIONS
                require_once ("../../sql/functions/products_add/medicals/medicines/location.php"); 
                // PRICES
                require_once ("../../sql/functions/products_add/medicals/medicines/prices.php"); 
                // FROMS
                require_once ("../../sql/functions/products_add/medicals/medicines/froms.php"); 
                // AUTHORIZATIONS
                require_once ("../../sql/functions/products_add/medicals/medicines/authorization.php"); 
                // QUANTITY
                require_once ("../../sql/functions/products_add/medicals/medicines/quantity.php"); 

                // SESSION NEEDED
                $categories = "Medicines";
                    // ID TABLES
                    $tb_id = "medicine_id"; $columns_id = "id_med"; $images = "med_img"; $link_img = "med_img";
                    // USED
                    $tb_app = "medicine_application";
                    $tb_used_app_desc ="med_affiche_application";
                    $tb_class = "medicine_classification";
                    $tb_used_class_desc = "med_affiche_classification";
                    // LOCATION
                    $tb_loc = "medicine_location";
                    $tb_loc_desc = "med_affiche_location";
                    // PRICE
                    $tb_price = "medicine_price";
                    // QUANITY
                    $tb_qt = "medicine_quantity";

                // SESSION MEDICINE ID
                $_SESSION["products"] = ["id" => $medicine_id,
                                        "images" => $images,
                                        "link_img" => $link_img,
                                        "categories" => $categories,
                                        "tb_id" => $tb_id,
                                        "columns_id" => $columns_id,
                                        "tb_app" => $tb_app,
                                        "tb_used_app_desc" => $tb_used_app_desc,
                                        "tb_class" => $tb_class,
                                        "tb_used_class_desc" => $tb_used_class_desc,
                                        "tb_loc" => $tb_loc,
                                        "tb_loc_desc" => $tb_loc_desc,
                                        "tb_price" => $tb_price,
                                        "tb_qt" => $tb_qt,
                                    ];

                header("Location: ../../Layout/Products_view/view_in_products.php");
            }
    }
}
?>