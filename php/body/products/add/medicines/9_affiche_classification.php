<?php
     require_once("../../../../../php/dns/connect.php");

      /*
   ============== CLASSIFICATION 0========================================
   */
  if($_POST["classification_0"]!= ""){
     $sql_affiche_classificiation_0= "SELECT * FROM `med_classification` WHERE `id_class` = $classification_0";
   
     //On excute directement la requete
     $requete_affiche_classificiation_0= $db->query($sql_affiche_classificiation_0);
   
     //On recupere les donnees (fetch ou fetchall)
     $affiche_classificiation_0 = $requete_affiche_classificiation_0->fetchAll();
   
    $affiche_classificiation_0= $affiche_classificiation_0[0]["classifications_descriptions"];
     }else{
        $affiche_classificiation_0 = "NULL";
     }
   
       /*
   ============== CLASSIFICATION 1========================================
   */
  if($_POST["classification_1"]!= ""){
   $sql_affiche_classificiation_1= "SELECT * FROM `med_sub_classifications` WHERE `id_med_sub_class` = $classification_1";
 
   //On excute directement la requete
   $requete_affiche_classificiation_1= $db->query($sql_affiche_classificiation_1);
 
   //On recupere les donnees (fetch ou fetchall)
   $affiche_classificiation_1 = $requete_affiche_classificiation_1->fetchAll();
 
  $affiche_classificiation_1 = $affiche_classificiation_1[0]["med_subclassification_description"];
   }else{
      $affiche_classificiation_1 = "NULL";
   }

   /*
   ============== CLASSIFICATION 2========================================
   */
  if($_POST["classification_2"]!= ""){
   $sql_affiche_classificiation_2= "SELECT * FROM `med_sub_classifications` WHERE `id_med_sub_class` = $classification_2";
 
   //On excute directement la requete
   $requete_affiche_classificiation_2= $db->query($sql_affiche_classificiation_2);
 
   //On recupere les donnees (fetch ou fetchall)
   $affiche_classificiation_2 = $requete_affiche_classificiation_2->fetchAll();
 
  $affiche_classificiation_2 = $affiche_classificiation_2[0]["med_subclassification_description"];
   }else{
      $affiche_classificiation_2 = "NULL";
   }
?>