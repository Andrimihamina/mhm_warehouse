<?php

//On traite le formulaire
if(!empty($_POST)){
    // IDENTIFICATIONS
    include_once("../../../../../php/body/products/add/consumables_logistics/identification.php");

    // SI ID EST BIEN ENTREEE
    if($cons_log_id !=""){
        /*
        |---------------------USED FOR
        */
        include_once("../../../../../php/body/products/add/consumables_logistics/used.php");
        /*
        |---------------------LOCATION
        */
        include_once("../../../../../php/body/products/add/consumables_logistics/location.php");
        /*
        |---------------------PRICE
        */
        include_once("../../../../../php/body/products/add/consumables_logistics/price.php");
        /*
        |---------------------FROM
        */
        include_once("../../../../../php/body/products/add/consumables_logistics/from.php");
        /*
        |---------------------AUTHORIZATION
        */
        include_once("../../../../../php/body/products/authorizations/dynamic_authorization_cons_log.php");
         /*
        |---------------------QUANTITY
        */
        include_once("../../../../../php/body/products/add/consumables_logistics/quantity.php");



         //On va stocke dans $_SESSION les inforamations de l'utilisateur
         $_SESSION["cons_log"] = [
          "id_code_cons_log" => $id_code_cons_log,
      ];

        header("Location: ../../view/view_cons_log");
    }
        
}
// ALL THE $_POST EST VIDE
?>