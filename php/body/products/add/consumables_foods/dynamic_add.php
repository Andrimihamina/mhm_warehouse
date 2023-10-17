<?php

//On traite le formulaire
if(!empty($_POST)){
    // IDENTIFICATIONS
    include_once("../../../../../php/body/products/add/consumables_foods/identification.php");

    // SI ID EST BIEN ENTREEE
    if($cons_foo_id !=""){
        /*
        |---------------------USED FOR
        */
        include_once("../../../../../php/body/products/add/consumables_foods/used.php");
        /*
        |---------------------LOCATION
        */
        include_once("../../../../../php/body/products/add/consumables_foods/location.php");
        /*
        |---------------------PRICE
        */
        include_once("../../../../../php/body/products/add/consumables_foods/price.php");
        /*
        |---------------------FROM
        */
        include_once("../../../../../php/body/products/add/consumables_foods/from.php");
        /*
        |---------------------AUTHORIZATION
        */
        include_once("../../../../../php/body/products/authorizations/dynamic_authorization_cons_foo.php");
         /*
        |---------------------QUANTITY
        */
        include_once("../../../../../php/body/products/add/consumables_foods/quantity.php");



         //On va stocke dans $_SESSION les inforamations de l'utilisateur
         $_SESSION["cons_foo"] = [
          "id_code_cons_foo" => $id_code_cons_foo,
      ];

        header("Location: ../../view/view_cons_foo");
    }
        
}
// ALL THE $_POST EST VIDE
?>