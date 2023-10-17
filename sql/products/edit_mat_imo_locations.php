<?php
include_once ("../../env/dns_warehouse.php");
// LOCATION 0
     $id_locations_0 = $prod["id_mat_imo"];  
     if($id_locations_0 !="" and  $id_locations_0 !=0){
     $sql_edit_locations_0 = "SELECT * FROM mat_imo_id 
                                        JOIN mat_imo_location ON mat_imo_location.id_mat_imo = mat_imo_id.id  
                                        JOIN mat_location_imo ON mat_imo_location.location = mat_location_imo.id_location  
                                        WHERE mat_imo_id.id = '$id_locations_0'";
     $requete_edit_locations_0= $db->query($sql_edit_locations_0);
     $edits_locations_0 = $requete_edit_locations_0->fetchAll();

     $location_0 = $edits_locations_0[0]["location_descriptions"];
     }else{$location_0 = "Choose...";}
// LOCATION 1
     $id_locations_1= $prod["id_mat_imo"];  
     if($id_locations_1!="" and  $id_locations_1!=0){
     $sql_edit_locations_1= "SELECT * FROM mat_imo_id 
                                        JOIN mat_imo_location ON mat_imo_location.id_mat_imo = mat_imo_id.id  
                                        JOIN mat_sublocation_imo ON mat_imo_location.sub_location = mat_sublocation_imo.id_sub_loc  
                                        WHERE mat_imo_id.id = '$id_locations_1'";
     $requete_edit_locations_1= $db->query($sql_edit_locations_1);
     $edits_locations_1= $requete_edit_locations_1->fetchAll();

     $location_1= $edits_locations_1[0]["sublocation_descriptions"];
     }else{$location_1= "Choose...";}
// LOCATION 2
     $id_locations_2= $prod["id_mat_imo"];  
     if($id_locations_2!="" and  $id_locations_2!= 0){
     $sql_edit_locations_2= "SELECT * FROM mat_imo_id 
                                        JOIN mat_imo_location ON mat_imo_location.id_mat_imo = mat_imo_id.id  
                                        JOIN mat_subsublocation_imo ON mat_imo_location.sub_sub_location = mat_subsublocation_imo.id_subsubloc  
                                        WHERE mat_imo_id.id = '$id_locations_2'";
     $requete_edit_locations_2= $db->query($sql_edit_locations_2);
     $edits_locations_2= $requete_edit_locations_2->fetchAll();

     $location_2= $edits_locations_2[0]["subsublocation_descriptions"];
     }else{$location_2= "Choose...";}
?>