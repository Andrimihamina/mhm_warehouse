<?php
        if($id_cons == "MAT-IMO"){

            $id_abrev = $_GET['idProduit'];
            $categories = "Real Estate Materials";
           
            // DESCRIPTIONS
            $sql_affiche_name = "SELECT * FROM `mat_imo_id` WHERE `id_code_mat_imo` = '$id_abrev'";
            $requete_affiche_name= $db->query($sql_affiche_name);
            $affiche_name= $requete_affiche_name->fetch();  

                $id_mat_imo = $affiche_name["id"];
                $id = $id_mat_imo;
                $Descriptions = $affiche_name["Descriptions"];
                $id_code = $affiche_name["id_code_mat_imo"];

            // USED FOR
            $sql_affiche_used_for = "SELECT * FROM `mat_imo_used` WHERE `id_mat_imo` = '$id_mat_imo'";
            $requete_affiche_used_for = $db->query($sql_affiche_used_for);            
            $affiche_used_for= $requete_affiche_used_for->fetch();   

                $Used_for = $affiche_used_for["used_for"];
          
            // PRICES
            $sql_affiche_price = "SELECT * FROM `mat_imo_price` WHERE `id_mat_imo` = '$id_mat_imo'";
            $requete_affiche_price  = $db->query($sql_affiche_price );
            $affiche_price = $requete_affiche_price ->fetch(); 

                $Prices_quantity = $affiche_price ["price_quantity"];
                $Prices_Box_name = $affiche_price ["box_name"];
                $Prices = $affiche_price ["price"];

            // LOCATION
            $sql_affiche_location= "SELECT * FROM `mat_imo_location` WHERE `id_mat_imo` = '$id_mat_imo'";
            $requete_affiche_location = $db->query($sql_affiche_location );
            $affiche_location = $requete_affiche_location ->fetch();

                $Location = $affiche_location ["mat_imo_loc"];

                 // MODIF LOCA
                    // MAIN
                    $link_man_loc_1 = "locations_mat_imo/locations/list_locations_1.php"; $link_man_loc_2 = "locations_mat_imo/locations/list_locations_2.php";
                    $id_locations_0 = $affiche_location["location"];
                    if($id_locations_0 !="" &&  $id_locations_0 != 0){
                        $sql_edit_locations_0 = "SELECT * FROM `mat_location_imo` WHERE `id_location` = $id_locations_0";
                        $requete_edit_locations_0= $db->query($sql_edit_locations_0);
                        $edits_locations_0 = $requete_edit_locations_0 -> fetch();
                        $location_00 = $edits_locations_0["location_descriptions"];
                    }else{$location_00 = "Choose...";}
                    // SUB
                    $link_sub_loc_1 = "locations_mat_imo/sublocations/list_sublocations_1.php"; $link_sub_loc_2 = "locations_mat_imo/sublocations/list_sublocations_2.php";
                    $id_locations_1 = $affiche_location["sub_location"];
                    if($id_locations_1 !="" &&  $id_locations_1 != 0){
                        $sql_edit_locations_1 = "SELECT * FROM `mat_sublocation_imo` WHERE `id_sub_loc` = $id_locations_1";
                        $requete_edit_locations_1 = $db->query($sql_edit_locations_1);
                        $edits_locations_1 = $requete_edit_locations_1 -> fetch();
                        $location_11 = $edits_locations_1["sublocation_descriptions"];
                    }else{$location_11 = "Choose...";}
                    
                    // SUB SUB
                    $link_sub_sub_loc_1 = "locations_mat_imo/subsublocations/list_subsublocations_1.php" ; $link_sub_sub_loc_2 ="locations_mat_imo/subsublocations/list_subsublocations_2.php";
                    $id_locations_2 = $affiche_location["sub_sub_location"];
                    if($id_locations_2 !="" And  $id_locations_2 != 0){
                        $sql_edit_locations_2 = "SELECT * FROM `mat_subsublocation_imo` WHERE `id_subsubloc` = $id_locations_2";
                        $requete_edit_locations_2 = $db->query($sql_edit_locations_2);
                        $edits_locations_2 = $requete_edit_locations_2 -> fetch();
                        $location_22 = $edits_locations_2["subsublocation_descriptions"];
                    }else{$location_22 = "Choose...";}

            // QT STOCK
            $sql_affiche_qt = "SELECT * FROM `mat_imo_quantity` WHERE `id_mat_imo` = '$id_mat_imo'";
            $requete_affiche_qt = $db->query($sql_affiche_qt );
            $affiche_qt = $requete_affiche_qt ->fetch();
                $Qt = $affiche_qt ["stock"];
                $quantity_minimal = $affiche_qt ["quantity_minimal"];
                $quantity_avarage = $affiche_qt ["quantity_avarage"];

            // IMAGE
            $image = $affiche_name["mat_imo_image"];
                $link_image =  "../../../warehouse_img/img/mat_imo_img/" . "$image";

        }//CONSUMABLES

?>