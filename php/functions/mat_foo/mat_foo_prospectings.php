<?php
include_once("../../../../../php/dns/connect.php");

   //MEDICINE Prospecting
   $sql_medicine_prospecting= "SELECT * FROM `prospecting` WHERE `done` = '0'";

   //On execute la requete
   $requete_medicine_prospecting = $db->query($sql_medicine_prospecting);

   //On recupere les donnes
   $products_medicine_prospecting= $requete_medicine_prospecting->fetchAll();
?>