<?php
include_once ("../../env/dns_warehouse.php");
// LOCATION 0
     $id_locations_0 = $prod_med["location_0"];  
     if($id_locations_0 !="" and  $id_locations_0 !=0){
     $sql_edit_locations_0 = "SELECT * FROM medicine_location JOIN med_location ON medicine_location.location_0 = med_location.id_location  WHERE medicine_location.location_0 = '$id_locations_0'";
     $requete_edit_locations_0= $db->query($sql_edit_locations_0);
     $edits_locations_0 = $requete_edit_locations_0->fetchAll();

     $location_0 = $edits_locations_0[0]["location_descriptions"];
     }else{$location_0 = "Choose...";}
// LOCATION 1
     $id_locations_1= $prod_med["location_1"];  
     if($id_locations_1!="" and  $id_locations_1!=0){
     $sql_edit_locations_1= "SELECT * FROM medicine_location JOIN med_sublocation ON medicine_location.location_1= med_sublocation.id_sub_loc  WHERE medicine_location.location_1= '$id_locations_1'";
     $requete_edit_locations_1= $db->query($sql_edit_locations_1);
     $edits_locations_1= $requete_edit_locations_1->fetchAll();

     $location_1= $edits_locations_1[0]["sublocation_descriptions"];
     }else{$location_1= "Choose...";}
// LOCATION 2
     $id_locations_2= $prod_med["location_2"];  
     if($id_locations_2!="" and  $id_locations_2!=0){
     $sql_edit_locations_2= "SELECT * FROM medicine_location JOIN med_subsublocation ON medicine_location.location_2= med_subsublocation.id_subsubloc  WHERE medicine_location.location_2= '$id_locations_2'";
     $requete_edit_locations_2= $db->query($sql_edit_locations_2);
     $edits_locations_2= $requete_edit_locations_2->fetchAll();

     $location_2= $edits_locations_2[0]["subsublocation_descriptions"];
     }else{$location_2= "Choose...";}
?>