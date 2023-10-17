<?php
        if($id_cons == "MAT-ITC"){

            $id_abrev = $_GET['idProduit'];

            // CATEGORIES
            $categories = "MATERIAL IT & COMMUNICATION";
           
            // NAME

            require_once("../env/dns_warehouse.php");

            $sql_affiche_name = "SELECT * FROM `mat_itc_id` WHERE `id_code_mat_itc` = '$id_abrev'";
            
                
                $requete_affiche_name= $db->query($sql_affiche_name);
            
            
                $affiche_name= $requete_affiche_name->fetch();
                
            $Name = $affiche_name["Descriptions"];
            $id_mat_itc = $affiche_name["id"];

            // USED FOR

            $sql_affiche_used_for = "SELECT * FROM `mat_itc_used` WHERE `id_mat_itc` = '$id_mat_itc'";
            
                
                $requete_affiche_used_for = $db->query($sql_affiche_used_for);
            
            
                $affiche_used_for= $requete_affiche_used_for->fetch();
                
            $Used_for = $affiche_used_for["used_for"];
          
            // PRICES

            $sql_affiche_price = "SELECT * FROM `mat_itc_price` WHERE `id_mat_itc` = '$id_mat_itc'";
            
                
                $requete_affiche_price  = $db->query($sql_affiche_price );
            
            
                $affiche_price = $requete_affiche_price ->fetch();
                
            $Prices_quantity = $affiche_price ["price_quantity"];
            $Prices_Box_name = $affiche_price ["box_name"];
            $Prices = $affiche_price ["price"];

            // LOCATION
            
            $sql_affiche_location= "SELECT * FROM `mat_itc_location` WHERE `id_mat_itc` = '$id_mat_itc'";
            
                
                $requete_affiche_location = $db->query($sql_affiche_location );
            
            
                $affiche_location = $requete_affiche_location ->fetch();
                
            $Location = $affiche_location ["mat_itc_loc"];

            // QT STOCK

            $sql_affiche_qt = "SELECT * FROM `mat_itc_quantity` WHERE `id_mat_itc` = '$id_mat_itc'";
            
                
                $requete_affiche_qt = $db->query($sql_affiche_qt );
            
            
                $affiche_qt = $requete_affiche_qt ->fetch();
                
            $Qt = $affiche_qt ["stock"];

            // IMAGE

            $image = $affiche_name["mat_itc_image"];

            $link_image =  "../../warehouse_img/img/mat_itc_img/" . "$image";

        }//CONSUMABLES

?>