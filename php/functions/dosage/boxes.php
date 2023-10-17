<?php
include_once("../../../../../php/dns/connect.php");

   //BOX
   $sql_box= "SELECT * FROM `med_box`  ORDER BY `box_description` ASC";

   //On execute la requete
   $requete_box = $db->query($sql_box);

   //On recupere les donnes
        $boxes = $requete_box->fetchAll();
   
   //On ecrit le contenue de la page
?>