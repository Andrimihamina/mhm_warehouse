<?php
     require_once("../../../../../php/dns/connect.php");

      /*
   ============== LOCATION 0========================================
   */
  if($_POST["location_0"]!= "Choose Location"){
      $location_0 =$_POST["location_0"];

     $sql_affiche_location_0= "SELECT * FROM `cos_location` WHERE `id_location` = $location_0";
   
     //On excute directement la requete
     $requete_affiche_location_0= $db->query($sql_affiche_location_0);
   
     //On recupere les donnees (fetch ou fetchall)
     $affiche_location_0 = $requete_affiche_location_0->fetchAll();
   
    $affiche_location_0= $affiche_location_0[0]["location_descriptions"];
     }else{
        $affiche_location_0 = "NULL";
     }
      /*
   ============== LOCATION 1========================================
   */
  if($_POST["location_1"]!= "Choose Sub-Location"){
   $location_1 =$_POST["location_1"];
      
   $sql_affiche_location_1= "SELECT * FROM `cos_sublocation` WHERE `id_sub_loc` = $location_1";
 
   //On excute directement la requete
   $requete_affiche_location_1= $db->query($sql_affiche_location_1);
 
   //On recupere les donnees (fetch ou fetchall)
   $affiche_location_1 = $requete_affiche_location_1->fetchAll();
 
  $affiche_location_1= $affiche_location_1[0]["sublocation_descriptions"];
   }else{
      $affiche_location_1 = "NULL";
   }
      /*
   ============== LOCATION 2========================================
   */
  if($_POST["location_2"]!= "Choose Sub-Sub-Location"){
   $location_2 =$_POST["location_2"];
      
   $sql_affiche_location_2= "SELECT * FROM `cos_subsublocation` WHERE `id_subsubloc` = $location_2";
 
   //On excute directement la requete
   $requete_affiche_location_2= $db->query($sql_affiche_location_2);
 
   //On recupere les donnees (fetch ou fetchall)
   $affiche_location_2 = $requete_affiche_location_2->fetchAll();
 
  $affiche_location_2= $affiche_location_2[0]["subsublocation_descriptions"];
   }else{
      $affiche_location_2 = "NULL";
   }
   
 ?>