<?php

//On traite le formulaire
if(!empty($_POST)){

  /*
  echo "<pre>";
    if(!empty($_POST)){
      print_r($_POST);
    }
  echo "</pre>";
  
  $_POST N'EST PAS VIDE
  */
 
  /*
  =========================== REGARDER LE CATEGORIES DE SORTIE ================================================
  */

  // Quelle est la categories du CONSUMABLE
  $categories = $_POST["cat_categories"];

  // print_r($categories);

  $Bandages = "Categories Bandages";
  $Adhesives = "Categories Adhesives";
  $Drapes = "Categories Drapes";
  $Gauze = "Categories Gauze";
  $Gloves = "Categories Gloves";
  $Catheters = "Categories Catheters";
  $Needles = "Categories Needles";
  $Sutures = "Categories Sutures";
  $Syringes = "Categories Syringes";
  $Mask = "Categories Mask";
  $Tubes = "Categories Tubes";
  $Clothes = "Categories Clothes";
  $Bags = "Categories Bags";
  $Categories_Others = "Categories Others";

  
switch($categories){
/*
=========================================================== ADHESIVE ===================================================================
*/
  case "$Adhesives" :
  // print_r( "$Adhesives");
    include_once("../../../../../php/body/products/add/consumables_medicals/cons_med_adhesives.php");
        break;

/*
=========================================================== BANDAGE ===================================================================
*/
  case "$Bandages" :
  // print_r( "Bandages");
    include_once("../../../../../php/body/products/add/consumables_medicals/cons_med_bandages.php");
      break; 
/*
=========================================================== DRAPES ===================================================================
*/
    // Drapes
    case "$Drapes" :
    //  echo "Drapes";
      include_once("../../../../../php/body/products/add/consumables_medicals/cons_med_drapes.php");
        break; 
/*
=========================================================== GAUZES ===================================================================
*/
    // GAUZES
    case "$Gauze" :
    // echo "Gauzes";
      include_once("../../../../../php/body/products/add/consumables_medicals/cons_med_gauzes.php");
        break;
/*
=========================================================== GLOVES ===================================================================
*/
    // GLoVES
    case "$Gloves" :
    // echo "Gloves";
      include_once("../../../../../php/body/products/add/consumables_medicals/cons_med_gloves.php");
        break;
/*
=========================================================== CATHETERS ===================================================================
*/
   // CATHETERS
    case "$Catheters" :
    // echo "Catheters";
      include_once("../../../../../php/body/products/add/consumables_medicals/cons_med_catheters.php");
        break;
/*
=========================================================== NEEDLES ===================================================================
*/
    // NEEDLES
    case "$Needles" :
      // echo "Needles";
      include_once("../../../../../php/body/products/add/consumables_medicals/cons_med_needles.php");
        break;  
/*
=========================================================== SUTURES ===================================================================
*/
    // SUTURES
    case "$Sutures" :
    // echo "Sutures";
      include_once("../../../../../php/body/products/add/consumables_medicals/cons_med_sutures.php");
        break;
/*
=========================================================== SYRINGES ===================================================================
*/
   // SYRINGES
    case "$Syringes" :
    // echo "Syringes";
      include_once("../../../../../php/body/products/add/consumables_medicals/cons_med_syringes.php");
        break;
/*
=========================================================== MASK ===================================================================
*/
    // MASK
    case "$Mask" :
    // echo "Mask";
      include_once("../../../../../php/body/products/add/consumables_medicals/cons_med_masks.php");
        break;
/*
=========================================================== TUBES ===================================================================
*/        
    // TUBES
    case "$Tubes" :
    // echo "Tubes";
      include_once("../../../../../php/body/products/add/consumables_medicals/cons_med_tubes.php");
        break;
/*
=========================================================== CLOTHES ===================================================================
*/
   // CLOTHES
    case "$Clothes" :
    // echo "Clothes";
      include_once("../../../../../php/body/products/add/consumables_medicals/cons_med_clothes.php");
        break;
/*
=========================================================== BAGS ===================================================================
*/
    // BAGS
    case "$Bags" :
      // echo "Bags";
      include_once("../../../../../php/body/products/add/consumables_medicals/cons_med_bags.php");
        break; 
/*
=========================================================== OTHERS ===================================================================
*/
    // OTHERS
    case "$Categories_Others" :
     echo "Others";
     
      include_once("../../../../../php/body/products/add/consumables_medicals/cons_med_others.php");
        break;
}

    // SI ID EST BIEN ENTREEE
    if($cons_med_id !=""){
        /*
        |---------------------USED FOR
        */
        include_once("../../../../../php/body/products/add/consumables_medicals/used.php");
        /*
        |---------------------LOCATION
        */
        include_once("../../../../../php/body/products/add/consumables_medicals/location.php");
        /*
        |---------------------PRICE
        */
        include_once("../../../../../php/body/products/add/consumables_medicals/price.php");
        /*
        |---------------------FROM
        */
        include_once("../../../../../php/body/products/add/consumables_medicals/from.php");
        /*
        |---------------------AUTHORIZATION
        */
        include_once("../../../../../php/body/products/authorizations/dynamic_authorization_cons_med.php");
         /*
        |---------------------QUANTITY
        */
        include_once("../../../../../php/body/products/add/consumables_medicals/quantity.php");

        /*
        |---------------------PATIENT SYSTEM ITEMS
        */
        include_once("../../../../../php/body/products/add/consumables_medicals/add_patient_system.php");

        /*
        |---------------------PATIENT SYSTEM INVENTORY
        */
        include_once("../../../../../php/body/products/add/consumables_medicals/inventory.php");



         //On va stocke dans $_SESSION les inforamations de l'utilisateur
         $_SESSION["cons_med"] = [
          "id_code_cons_med" => $id_code_cons_med,
      ];

         header("Location: ../../view/view_cons_med");
    }
        
}
// ALL THE $_POST EST VIDE
?>