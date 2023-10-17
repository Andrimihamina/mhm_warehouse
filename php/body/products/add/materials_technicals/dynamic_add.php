<?php
if(!empty($_POST)){
    /*
    IDENTIFICATION
    */
    include_once("../../../../../php/body/products/add/materials_technicals/identification.php");

    // SI ID EST BIEN ENTREEE
    if($mat_tec_id !=""){
    /*
    CHECKING 
    */
    include_once("../../../../../php/body/products/add/materials_technicals/checking.php");
     /*
    USED
    */
    include_once("../../../../../php/body/products/add/materials_technicals/used.php");
    /*
    LOCATION
    */
    include_once("../../../../../php/body/products/add/materials_technicals/location.php");
    /*
    PRICE
    */
    include_once("../../../../../php/body/products/add/materials_technicals/price.php");
    /*
    FROM
    */
    include_once("../../../../../php/body/products/add/materials_technicals/from.php");
    /*
    FROM
    */
    include_once("../../../../../php/body/products/add/materials_technicals/authorization.php");
    /*
    Quantity
    */
    include_once("../../../../../php/body/products/add/materials_technicals/quantity.php");

     //On va stocke dans $_SESSION les inforamations de l'utilisateur
     $_SESSION["mat_tec"] = [
        "id_code_mat_tec" => $id_code_mat_tec,
    ];

     header("Location: ../../view/view_mat_tec");


    }
    
}
// ALL THE $_POST EST VIDE
?>