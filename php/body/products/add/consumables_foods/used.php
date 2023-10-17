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
  if(
    isset($_POST["used"])
    && !empty($_POST["used"])
  ){
    // Quelle est la categories du CONSUMABLE
    $used = $_POST["used"];

    $sql_used = "INSERT INTO `cons_foo_used` (
      `id`, 
      /*IDENTITY*/
      `id_cons_foo`, 
      /*DECRIPTION FOR USED*/
      `used_for`) VALUES (
      NULL, 
      /*IDENTITY*/
      '$cons_foo_id', 
      /*DESCRIPITON FOR USED*/
      '$used')";

      //On prerare la requete
      $query_cons_foo_used= $db->prepare($sql_used);
      //On execute la requete
    $query_cons_foo_used->execute(); 
    }
}


