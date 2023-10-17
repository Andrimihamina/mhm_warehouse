<?php
if(!empty($_POST)){
    $_SESSION["error_incomplet"] = [];
    $_SESSION["error_doublons"] = [];

    require_once ("../../env/dns_warehouse.php");
    require_once ("../../env/dns_patient_system.php");
    // ALL VARIABLES
    require_once ("../../php/products_edit/logistics/materials/identifications/1_a_variables.php");
    // ALL IDENTIFICATIONS
    require_once ("../../php/products_edit/logistics/materials/identifications/2_a_identifications.php");

    if($_SESSION["error_incomplet"]===[]){
        // DESCRIPTIONS
        require_once ("../../php/products_edit/logistics/materials/identifications/2_c_identifications.php");

                // materials ID
                require_once ("../../sql/functions/products_edit/logistics/materials/mat_id.php");
                
                header("Location: ../../Layout/Products_edit/edit_mat_log_a_identifications.php");   
            }
    }
?>