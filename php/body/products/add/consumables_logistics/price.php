<?php
//On traite le formulaire
if(!empty($_POST)){
  
  include_once("../../../../../php/body/products/add/medicines/14_affiche_box.php");

  if($affiche_box !="NULL"){
      $affiche_box = $affiche_box;
      $affiche_box_bd = $affiche_box;
  }else{
      $affiche_box = "";
      $affiche_box_bd = "NULL";
  }


  $price_quantity = $_POST["price_quantity"];

  $price = $_POST["price"];

    $sql_location = "INSERT INTO `cons_log_price` (
      `id`, 
      `id_cons_log`,
      `price_quantity`, 
      `box`, 
      `box_name`, 
      `price`) VALUES (NULL, 
      /*IDENTITY*/
      '$cons_log_id', 
      /*LOCATION*/ 
      '$price_quantity', 
      '$box', 
      '$affiche_box_bd', 
      '$price')";

      //On prerare la requete
      $query_cons_log_location= $db->prepare($sql_location);
      //On execute la requete
    $query_cons_log_location->execute(); 
    
}


