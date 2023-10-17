<?php
if(!empty($_POST)){
    /*
    IDENTIFICATION
    */
    include_once("../../../../../php/body/products/add/materials_medicals/identification.php");

    // SI ID EST BIEN ENTREEE
    if($mat_med_id !=""){
    /*
    CHECKING 
    */
    include_once("../../../../../php/body/products/add/materials_medicals/checking.php");
     /*
    USED
    */
    include_once("../../../../../php/body/products/add/materials_medicals/used.php");
    /*
    LOCATION
    */
    include_once("../../../../../php/body/products/add/materials_medicals/location.php");
    /*
    PRICE
    */
    include_once("../../../../../php/body/products/add/materials_medicals/price.php");
    /*
    FROM
    */
    include_once("../../../../../php/body/products/add/materials_medicals/from.php");
    /*
    FROM
    */
    include_once("../../../../../php/body/products/add/materials_medicals/authorization.php");
    /*
    Quantity
    */
    include_once("../../../../../php/body/products/add/materials_medicals/quantity.php");

     //On va stocke dans $_SESSION les inforamations de l'utilisateur
     $_SESSION["mat_med"] = [
        "id_code_mat_med" => $id_code_mat_med,
    ];

       header("Location: ../../view/view_mat_med");


    }
    
}
// ALL THE $_POST EST VIDE
?>