<?php
include_once ("../../env/dns_warehouse.php");
// LOCATION 0
     $id_locations_0 = $prod["id_mat_log"];  
     if($id_locations_0 !="" and  $id_locations_0 !=0){
     $sql_edit_locations_0 = "SELECT * FROM mat_log_id 
                                        JOIN mat_log_location ON mat_log_location.id_mat_log = mat_log_id.id  
                                        JOIN mat_location_log ON mat_log_location.location = mat_location_log.id_location  
                                        WHERE mat_log_id.id = '$id_locations_0'";
     $requete_edit_locations_0= $db->query($sql_edit_locations_0);
     $edits_locations_0 = $requete_edit_locations_0->fetchAll();

     $location_0 = $edits_locations_0[0]["location_descriptions"];
     }else{$location_0 = "Choose...";}
// LOCATION 1
     $id_locations_1= $prod["id_mat_log"];  
     if($id_locations_1!="" and  $id_locations_1!=0){
     $sql_edit_locations_1= "SELECT * FROM mat_log_id 
                                        JOIN mat_log_location ON mat_log_location.id_mat_log = mat_log_id.id  
                                        JOIN mat_sublocation_log ON mat_log_location.sub_location = mat_sublocation_log.id_sub_loc  
                                        WHERE mat_log_id.id = '$id_locations_1'";
     $requete_edit_locations_1= $db->query($sql_edit_locations_1);
     $edits_locations_1= $requete_edit_locations_1->fetchAll();

     $location_1= $edits_locations_1[0]["sublocation_descriptions"];
     }else{$location_1= "Choose...";}
// LOCATION 2
     $id_locations_2= $prod["id_mat_log"];  
     if($id_locations_2!="" and  $id_locations_2!=0){
     $sql_edit_locations_2= "SELECT * FROM mat_log_id 
                                        JOIN mat_log_location ON mat_log_location.id_mat_log = mat_log_id.id  
                                        JOIN mat_subsublocation_log ON mat_log_location.sub_sub_location = mat_subsublocation_log.id_subsubloc  
                                        WHERE mat_log_id.id = '$id_locations_2'";
     $requete_edit_locations_2= $db->query($sql_edit_locations_2);
     $edits_locations_2= $requete_edit_locations_2->fetchAll();

     $location_2= $edits_locations_2[0]["subsublocation_descriptions"];
     }else{$location_2= "Choose...";}
?>