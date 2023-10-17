<?php
     require_once("../../../../../php/dns/connect.php");
      /*
   ============== BOX NAME ========================================
   */
  if($_POST["box"]!= ""){
   
   $box = $_POST["box"];

   $sql_affiche_box= "SELECT * FROM `med_box` WHERE `id_box` = $box";
 
   //On excute directement la requete
   $requete_affiche_box= $db->query($sql_affiche_box);
 
   //On recupere les donnees (fetch ou fetchall)
   $affiche_box = $requete_affiche_box->fetchAll();
 
  $affiche_box= $affiche_box[0]["box_description"];
   }else{
      $affiche_box = "NULL";
   }
   
 ?>