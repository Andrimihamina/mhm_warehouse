<?php
include_once ("../../env/dns_warehouse.php");
// LOCATION 0
     $id_locations_0 = $prod["location"];  
     if($id_locations_0 !="" and  $id_locations_0 !=0){
     $sql_edit_locations_0 = "SELECT * FROM cons_log_location JOIN cos_log_location ON cons_log_location.location = cos_log_location.id_location  WHERE cons_log_location.location = '$id_locations_0'";
     $requete_edit_locations_0= $db->query($sql_edit_locations_0);
     $edits_locations_0 = $requete_edit_locations_0->fetchAll();

     $location_0 = $edits_locations_0[0]["location_descriptions"];
     }else{$location_0 = "Choose...";}
// LOCATION 1
     $id_locations_1= $prod["sub_location"];  
     if($id_locations_1!="" and  $id_locations_1!=0){
     $sql_edit_locations_1= "SELECT * FROM cons_log_location JOIN cos_log_sublocation ON cons_log_location.sub_location= cos_log_sublocation.id_sub_loc  WHERE cons_log_location.sub_location= '$id_locations_1'";
     $requete_edit_locations_1= $db->query($sql_edit_locations_1);
     $edits_locations_1= $requete_edit_locations_1->fetchAll();

     $location_1 = $edits_locations_1[0]["sublocation_descriptions"];
     }else{$location_1 = "Choose...";}
// LOCATION 2
     $id_locations_2= $prod["sub_sub_location"];  
     if($id_locations_2!="" and  $id_locations_2!=0){
     $sql_edit_locations_2= "SELECT * FROM cons_log_location JOIN cos_log_subsublocation ON cons_log_location.sub_sub_location= cos_log_subsublocation.id_subsubloc  WHERE cons_log_location.sub_sub_location= '$id_locations_2'";
     $requete_edit_locations_2= $db->query($sql_edit_locations_2);
     $edits_locations_2= $requete_edit_locations_2->fetchAll();
 
     $location_2 = $edits_locations_2[0]["subsublocation_descriptions"];
     }else{$location_2 = "Choose...";}
?>