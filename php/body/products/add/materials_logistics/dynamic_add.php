<?php
if(!empty($_POST)){
    /*
    IDENTIFICATION
    */
    include_once("../../../../../php/body/products/add/materials_logistics/identification.php");

    // SI ID EST BIEN ENTREEE
    if($mat_log_id !=""){
    /*
    CHECKING 
    */
    include_once("../../../../../php/body/products/add/materials_logistics/checking.php");
     /*
    USED
    */
    include_once("../../../../../php/body/products/add/materials_logistics/used.php");
    /*
    LOCATION
    */
    include_once("../../../../../php/body/products/add/materials_logistics/location.php");
    /*
    PRICE
    */
    include_once("../../../../../php/body/products/add/materials_logistics/price.php");
    /*
    FROM
    */
    include_once("../../../../../php/body/products/add/materials_logistics/from.php");
    /*
    FROM
    */
    include_once("../../../../../php/body/products/add/materials_logistics/authorization.php");
    /*
    Quantity
    */
    include_once("../../../../../php/body/products/add/materials_logistics/quantity.php");

     //On va stocke dans $_SESSION les inforamations de l'utilisateur
     $_SESSION["mat_log"] = [
        "id_code_mat_log" => $id_code_mat_log,
    ];

     header("Location: ../../view/view_mat_log");


    }
    
}
// ALL THE $_POST EST VIDE
?>