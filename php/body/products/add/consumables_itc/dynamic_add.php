<?php

//On traite le formulaire
if(!empty($_POST)){
    // IDENTIFICATIONS
    include_once("../../../../../php/body/products/add/consumables_itc/identification.php");

    // SI ID EST BIEN ENTREEE
    if($cons_itc_id !=""){
        /*
        |---------------------USED FOR
        */
        include_once("../../../../../php/body/products/add/consumables_itc/used.php");
        /*
        |---------------------LOCATION
        */
        include_once("../../../../../php/body/products/add/consumables_itc/location.php");
        /*
        |---------------------PRICE
        */
        include_once("../../../../../php/body/products/add/consumables_itc/price.php");
        /*
        |---------------------FROM
        */
        include_once("../../../../../php/body/products/add/consumables_itc/from.php");
        /*
        |---------------------AUTHORIZATION
        */
        include_once("../../../../../php/body/products/authorizations/dynamic_authorization_cons_itc.php");
         /*
        |---------------------QUANTITY
        */
        include_once("../../../../../php/body/products/add/consumables_itc/quantity.php");



         //On va stocke dans $_SESSION les inforamations de l'utilisateur
         $_SESSION["cons_itc"] = [
          "id_code_cons_itc" => $id_code_cons_itc,
      ];

        header("Location: ../../view/view_cons_itc");
    }
        
}
// ALL THE $_POST EST VIDE
?>