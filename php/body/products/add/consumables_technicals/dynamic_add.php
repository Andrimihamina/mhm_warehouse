<?php

//On traite le formulaire
if(!empty($_POST)){
    // IDENTIFICATIONS
    include_once("../../../../../php/body/products/add/consumables_technicals/identification.php");

    // SI ID EST BIEN ENTREEE
    if($cons_tec_id !=""){
        /*
        |---------------------USED FOR
        */
        include_once("../../../../../php/body/products/add/consumables_technicals/used.php");
        /*
        |---------------------LOCATION
        */
        include_once("../../../../../php/body/products/add/consumables_technicals/location.php");
        /*
        |---------------------PRICE
        */
        include_once("../../../../../php/body/products/add/consumables_technicals/price.php");
        /*
        |---------------------FROM
        */
        include_once("../../../../../php/body/products/add/consumables_technicals/from.php");
        /*
        |---------------------AUTHORIZATION
        */
        include_once("../../../../../php/body/products/authorizations/dynamic_authorization_cons_tec.php");
         /*
        |---------------------QUANTITY
        */
        include_once("../../../../../php/body/products/add/consumables_technicals/quantity.php");



         //On va stocke dans $_SESSION les inforamations de l'utilisateur
         $_SESSION["cons_tec"] = [
          "id_code_cons_tec" => $id_code_cons_tec,
      ];

         header("Location: ../../view/view_cons_tec");
    }
        
}
// ALL THE $_POST EST VIDE
?>