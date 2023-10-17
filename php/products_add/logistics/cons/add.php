<?php
if(!empty($_POST)){
    $_SESSION["error_incomplet"] = [];
    $_SESSION["error_doublons"] = [];

    require_once ("../../env/dns_warehouse.php");
    require_once ("../../env/dns_patient_system.php");
    // ALL VARIABLES
    require_once ("../../php/products_add/logistics/cons/1_a_variables.php");
    require_once ("../../php/products_add/add/1_b_variables.php");
    require_once ("../../php/products_add/add/1_c_variables_froms.php");
    require_once ("../../php/products_add/add/1_d_variables_aut.php");
    // ALL IDENTIFICATIONS
    require_once ("../../php/products_add/logistics/cons/2_a_identifications.php");
    require_once ("../../php/products_add/add/2_b_identifications.php");

    if($_SESSION["error_incomplet"]===[]){
        // ABREVIATIONS
        require_once ("../../php/products_add/logistics/cons/3_a_abreviations.php");
        require_once ("../../php/products_add/add/3_b_abreviations.php");
        
        // DESCRIPTIONS
        require_once ("../../php/products_add/logistics/cons/2_c_identifications.php");
        // USED FOR
        require_once ("../../php/products_add/logistics/cons/4_a_used_for.php");
        // LOCATIONS
        require_once ("../../php/products_add/logistics/cons/5_a_location.php");
        require_once ("../../php/products_add/add/5_b_location.php");
        // PRICES
        require_once ("../../php/products_add/add/6_prices.php");

        // CHECKING
        require_once ("../../php/products_add/logistics/cons/7_checking.php");
            if($checkrows_id > 0)
            {$_SESSION["error_doublons"][] = "This Items is alredy register";}
            else {                  
                // CONS MED ID 
                require_once ("../../sql/functions/products_add/logistics/cons/identification.php");
                // USED FOR 
                require_once ("../../sql/functions/products_add/logistics/cons/used_for.php"); 
                // LOCATIONS
                require_once ("../../sql/functions/products_add/logistics/cons/location.php"); 
                // PRICES
                require_once ("../../sql/functions/products_add/logistics/cons/prices.php"); 
                // FROMS
                require_once ("../../sql/functions/products_add/logistics/cons/froms.php"); 
                // AUTHORIZATIONS
                require_once ("../../sql/functions/products_add/logistics/cons/authorization.php"); 
                // QUANTITY
                require_once ("../../sql/functions/products_add/logistics/cons/quantity.php"); 
                
                // SESSION NEEDED
                $categories = "Logistics Consumables";
                    // ID TABLES
                    $tb_id = "cons_log_id"; $columns_id = "id_cons_log"; $images = "image"; $link_img = "cons_log_img";
                    // USED
                    $tb_app = "cons_log_used";
                    $tb_used_app_desc ="used_for";
                    $tb_class = "cons_log_used";
                    $tb_used_class_desc = "used_for";
                    // LOCATION
                    $tb_loc = "cons_log_location";
                    $tb_loc_desc = "cons_log_loc";
                    // PRICE
                    $tb_price = "cons_log_price";
                    // QUANITY
                    $tb_qt = "cons_log_quantity";

                // SESSION MEDICINE ID
                $_SESSION["products"] = ["id" => $cons_id,
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

                header("Location: ../../Layout/Products_view/view_in_products_cons.php");
            }
    }
}
?>