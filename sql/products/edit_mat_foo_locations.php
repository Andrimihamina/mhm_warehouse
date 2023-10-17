<?php
include_once ("../../env/dns_warehouse.php");
// LOCATION 0
     $id_locations_0 = $prod["id_mat_foo"];  
     if($id_locations_0 !="" and  $id_locations_0 !=0){
     $sql_edit_locations_0 = "SELECT * FROM mat_foo_id 
                                        JOIN mat_foo_location ON mat_foo_location.id_mat_foo = mat_foo_id.id  
                                        JOIN mat_location_foo ON mat_foo_location.location = mat_location_foo.id_location  
                                        WHERE mat_foo_id.id = '$id_locations_0'";
     $requete_edit_locations_0= $db->query($sql_edit_locations_0);
     $edits_locations_0 = $requete_edit_locations_0->fetchAll();

     $location_0 = $edits_locations_0[0]["location_descriptions"];
     }else{$location_0 = "Choose...";}
// LOCATION 1
     $id_locations_1= $prod["id_mat_foo"];  
     if($id_locations_1!="" and  $id_locations_1!=0){
     $sql_edit_locations_1= "SELECT * FROM mat_foo_id 
                                        JOIN mat_foo_location ON mat_foo_location.id_mat_foo = mat_foo_id.id  
                                        JOIN mat_sublocation_foo ON mat_foo_location.sub_location = mat_sublocation_foo.id_sub_loc  
                                        WHERE mat_foo_id.id = '$id_locations_1'";
     $requete_edit_locations_1= $db->query($sql_edit_locations_1);
     $edits_locations_1= $requete_edit_locations_1->fetchAll();

     $location_1= $edits_locations_1[0]["sublocation_descriptions"];
     }else{$location_1= "Choose...";}
// LOCATION 2
     $id_locations_2= $prod["id_mat_foo"];  
     if($id_locations_2!="" and  $id_locations_2!=0){
     $sql_edit_locations_2= "SELECT * FROM mat_foo_id 
                                        JOIN mat_foo_location ON mat_foo_location.id_mat_foo = mat_foo_id.id  
                                        JOIN mat_subsublocation_foo ON mat_foo_location.sub_sub_location = mat_subsublocation_foo.id_subsubloc  
                                        WHERE mat_foo_id.id = '$id_locations_2'";
     $requete_edit_locations_2= $db->query($sql_edit_locations_2);
     $edits_locations_2= $requete_edit_locations_2->fetchAll();

     $location_2= $edits_locations_2[0]["subsublocation_descriptions"];
     }else{$location_2= "Choose...";}
?>