<?php
if(!empty($_POST)){
    /*
    IDENTIFICATION
    */
    include_once("../../../../../php/body/products/add/materials_immo/identification.php");

    // SI ID EST BIEN ENTREEE
    if($mat_imo_id !=""){
    /*
    CHECKING 
    */
    include_once("../../../../../php/body/products/add/materials_immo/checking.php");
     /*
    USED
    */
    include_once("../../../../../php/body/products/add/materials_immo/used.php");
    /*
    LOCATION
    */
    include_once("../../../../../php/body/products/add/materials_immo/location.php");
    /*
    PRICE
    */
    include_once("../../../../../php/body/products/add/materials_immo/price.php");
    /*
    FROM
    */
    include_once("../../../../../php/body/products/add/materials_immo/from.php");
    /*
    FROM
    */
    include_once("../../../../../php/body/products/add/materials_immo/authorization.php");
    /*
    Quantity
    */
    include_once("../../../../../php/body/products/add/materials_immo/quantity.php");

     //On va stocke dans $_SESSION les inforamations de l'utilisateur
     $_SESSION["mat_imo"] = [
        "id_code_mat_imo" => $id_code_mat_imo,
    ];

     header("Location: ../../view/view_mat_imo");


    }
    
}
// ALL THE $_POST EST VIDE
?>