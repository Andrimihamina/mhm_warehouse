<?php
        if($id_cons == "MAT-MED"){

            $id_abrev = $_GET['idProduit'];

            // CATEGORIES
            $categories = "MATERIAL MEDICAL";
           
            // NAME

            require_once("../env/dns_warehouse.php");

            $sql_affiche_name = "SELECT * FROM `mat_med_id` WHERE `id_code_mat_med` = '$id_abrev'";
            
                
                $requete_affiche_name= $db->query($sql_affiche_name);
            
            
                $affiche_name= $requete_affiche_name->fetch();
                
            $Name = $affiche_name["Descriptions"];
            $id_mat_med = $affiche_name["id"];

            // USED FOR

            $sql_affiche_used_for = "SELECT * FROM `mat_med_used` WHERE `id_mat_med` = '$id_mat_med'";
            
                
                $requete_affiche_used_for = $db->query($sql_affiche_used_for);
            
            
                $affiche_used_for= $requete_affiche_used_for->fetch();
                
            $Used_for = $affiche_used_for["used_for_mat_med"];
          
            // PRICES

            $sql_affiche_price = "SELECT * FROM `mat_med_price` WHERE `id_mat_med` = '$id_mat_med'";
            
                
                $requete_affiche_price  = $db->query($sql_affiche_price );
            
            
                $affiche_price = $requete_affiche_price ->fetch();
                
            $Prices_quantity = $affiche_price ["price_quantity"];
            $Prices_Box_name = $affiche_price ["box_name"];
            $Prices = $affiche_price ["price"];

            // LOCATION

            $sql_affiche_location= "SELECT * FROM `mat_med_location` WHERE `id_mat_med` = '$id_mat_med'";
            
                
                $requete_affiche_location = $db->query($sql_affiche_location );
            
            
                $affiche_location = $requete_affiche_location ->fetch();
                
            $Location = $affiche_location ["mat_med_loc"];

            // QT STOCK

            $sql_affiche_qt = "SELECT * FROM `mat_med_quantity` WHERE `id_mat_med` = '$id_mat_med'";
            
                
                $requete_affiche_qt = $db->query($sql_affiche_qt );
            
            
                $affiche_qt = $requete_affiche_qt ->fetch();
                
            $Qt = $affiche_qt ["stock"];

            // IMAGE

            $image = $affiche_name["mat_med_image"];

            $link_image =  "../../warehouse_img/img/mat_med_img/" . "$image";

        }//CONSUMABLES

?>