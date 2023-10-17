<?php
if(!empty($_POST)){
    /*
    IDENTIFICATION
    */
    include_once("../../../../../php/body/products/add/materials_itc/identification.php");

    // SI ID EST BIEN ENTREEE
    if($mat_itc_id !=""){
    /*
    CHECKING 
    */
    include_once("../../../../../php/body/products/add/materials_itc/checking.php");
     /*
    USED
    */
    include_once("../../../../../php/body/products/add/materials_itc/used.php");
    /*
    LOCATION
    */
    include_once("../../../../../php/body/products/add/materials_itc/location.php");
    /*
    PRICE
    */
    include_once("../../../../../php/body/products/add/materials_itc/price.php");
    /*
    FROM
    */
    include_once("../../../../../php/body/products/add/materials_itc/from.php");
    /*
    FROM
    */
    include_once("../../../../../php/body/products/add/materials_itc/authorization.php");
    /*
    Quantity
    */
    include_once("../../../../../php/body/products/add/materials_itc/quantity.php");

     //On va stocke dans $_SESSION les inforamations de l'utilisateur
     $_SESSION["mat_itc"] = [
        "id_code_mat_itc" => $id_code_mat_itc,
    ];

     header("Location: ../../view/view_mat_itc");


    }
    
}
// ALL THE $_POST EST VIDE
?>