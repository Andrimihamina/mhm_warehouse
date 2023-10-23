<?php
        if($id_med == "MED"){

            $id_abrev = $_GET['idProduit'];

            // CATEGORIES
            $categories = "Medicine";
           
            // NAME

            require_once("../env/dns_warehouse.php");

            $sql_affiche_name = "SELECT * FROM `medicine_id` WHERE `id_code_med` = '$id_abrev'";
            
                
                $requete_affiche_name= $db->query($sql_affiche_name);
            
            
                $affiche_name= $requete_affiche_name->fetch();
                
            $Name = $affiche_name["Descriptions"];
            $id_med = $affiche_name["id"];

            // USED FOR

            $sql_affiche_used_for = "SELECT * FROM `medicine_classification` WHERE `id_med` = '$id_med'";
            
                
                $requete_affiche_used_for = $db->query($sql_affiche_used_for);
            
            
                $affiche_used_for= $requete_affiche_used_for->fetch();
                
            $Used_for = $affiche_used_for["med_affiche_classification"];
          
            // PRICES

            $sql_affiche_price = "SELECT * FROM `medicine_price` WHERE `id_med` = '$id_med'";
            
                
                $requete_affiche_price  = $db->query($sql_affiche_price );
            
            
                $affiche_price = $requete_affiche_price ->fetch();
                
            $Prices_quantity = $affiche_price ["price_quantity"];
            $Prices_Box_name = $affiche_price ["box_name"];
            $Prices = $affiche_price ["price"];

            // LOCATION

            $sql_affiche_location= "SELECT * FROM `medicine_location` WHERE `id_med` = '$id_med'";
            
                
                $requete_affiche_location = $db->query($sql_affiche_location );
            
            
                $affiche_location = $requete_affiche_location ->fetch();
                
            $Location = $affiche_location ["med_affiche_location"];

            // QT STOCK

            $sql_affiche_qt = "SELECT * FROM `medicine_quantity` WHERE `id_med` = '$id_med'";
            
                
                $requete_affiche_qt = $db->query($sql_affiche_qt );
            
            
                $affiche_qt = $requete_affiche_qt ->fetch();
                
            $Qt = $affiche_qt ["stock"];

            // IMAGE

            $image = $affiche_name["med_img"];

            $link_image =  "../../../warehouse_img/img/med_img/" . "$image";

        }//CONSUMABLES

?>