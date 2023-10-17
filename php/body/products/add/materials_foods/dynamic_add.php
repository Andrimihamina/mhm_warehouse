<?php
if(!empty($_POST)){
    /*
    IDENTIFICATION
    */
    include_once("../../../../../php/body/products/add/materials_foods/identification.php");

    // SI ID EST BIEN ENTREEE
    if($mat_foo_id !=""){
    /*
    CHECKING 
    */
    include_once("../../../../../php/body/products/add/materials_foods/checking.php");
     /*
    USED
    */
    include_once("../../../../../php/body/products/add/materials_foods/used.php");
    /*
    LOCATION
    */
    include_once("../../../../../php/body/products/add/materials_foods/location.php");
    /*
    PRICE
    */
    include_once("../../../../../php/body/products/add/materials_foods/price.php");
    /*
    FROM
    */
    include_once("../../../../../php/body/products/add/materials_foods/from.php");
    /*
    FROM
    */
    include_once("../../../../../php/body/products/add/materials_foods/authorization.php");
    /*
    Quantity
    */
    include_once("../../../../../php/body/products/add/materials_foods/quantity.php");

     //On va stocke dans $_SESSION les inforamations de l'utilisateur
     $_SESSION["mat_foo"] = [
        "id_code_mat_foo" => $id_code_mat_foo,
    ];

     header("Location: ../../view/view_mat_foo");


    }
    
}
// ALL THE $_POST EST VIDE
?>