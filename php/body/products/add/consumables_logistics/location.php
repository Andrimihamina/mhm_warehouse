<?php
//On traite le formulaire
if(!empty($_POST)){
  
  include_once("../../../../../php/body/products/add/consumables_logistics/affiche_location.php");

  if($affiche_location_0 !="NULL"){
      $affiche_location_0 = $affiche_location_0;
      $affiche_location_0_bd = $location_0;
  }else{
      $affiche_location_0 = "";
      $affiche_location_0_bd = "NULL";
  }

  if($affiche_location_1 !="NULL"){
    $affiche_location_1 = $affiche_location_1;
    $affiche_location_1_bd = $location_1;
  }else{
      $affiche_location_1 = "";
      $affiche_location_1_bd = "NULL";
  }

  if($affiche_location_2 !="NULL"){
    $affiche_location_2 = $affiche_location_2;
    $affiche_location_2_bd = $location_2;
  }else{
      $affiche_location_2 = "";
      $affiche_location_2_bd = "NULL";
  }

  /*
  =========================== REGARDER LE CATEGORIES DE SORTIE ================================================
  */
  
    $location = $affiche_location_0 ." " .  $affiche_location_1 . " ". $affiche_location_2;
          // print_r($Name);

    // ENLEVER LES DOUBLE ESPACE
    $location = str_replace('  ', ' ', $location);

    $sql_location = "INSERT INTO `cons_log_location` 
    (`id`, 
    `id_cons_log`,  
    `cons_log_loc`, 
    `location`, 
    `sub_location`, 
    `sub_sub_location`) VALUES 
    (NULL, 
    /*IDENTITY*/
    '$cons_log_id', 
    /*LOCATION*/ 
    '$location', 
    '$affiche_location_0_bd', 
    '$affiche_location_1_bd', 
    '$affiche_location_2_bd')";

      //On prerare la requete
      $query_cons_log_location= $db->prepare($sql_location);
      //On execute la requete
    $query_cons_log_location->execute(); 
    
}


