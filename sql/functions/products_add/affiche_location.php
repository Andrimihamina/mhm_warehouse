<?php
//  LOCATION 0========================================
if($location_0 != "Choose..."){
   $sql_affiche_location_0= "SELECT * FROM `$tbl_location_1` WHERE `$colums_location_1` = $location_0";
   $requete_affiche_location_0= $db->query($sql_affiche_location_0);
   $affiche_location_0 = $requete_affiche_location_0->fetchAll();
   
   $affiche_location_0= $affiche_location_0[0]["location_descriptions"];
}else{$affiche_location_0 = NULL; $location_0 = NULL;}

// LOCATION 1
if($location_1 != "Choose..."){  
   $sql_affiche_location_1= "SELECT * FROM `$tbl_location_2` WHERE `$colums_location_2` = $location_1";
   $requete_affiche_location_1= $db->query($sql_affiche_location_1);
   $affiche_location_1 = $requete_affiche_location_1->fetchAll();
 
   $affiche_location_1= $affiche_location_1[0]["sublocation_descriptions"];
}else{$affiche_location_1 = NULL; $location_1 = NULL;}

// LOCATION 2
if($location_2!= "Choose..."){
   $sql_affiche_location_2= "SELECT * FROM `$tbl_location_3` WHERE `$colums_location_3` = $location_2";
   $requete_affiche_location_2= $db->query($sql_affiche_location_2);
   $affiche_location_2 = $requete_affiche_location_2->fetchAll();
 
   $affiche_location_2= $affiche_location_2[0]["subsublocation_descriptions"];
}else{$affiche_location_2 = NULL; $location_2 = NULL;}
   
 ?>