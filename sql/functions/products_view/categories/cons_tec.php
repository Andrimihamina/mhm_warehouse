<?php
        if($id_cons == "COS-TEC"){

            $id_abrev = $_GET['idProduit'];

            // CATEGORIES
            $categories = "Technicals Consumables";
           
            // DESCRIPTIONS
            $sql_affiche_name = "SELECT * FROM `cons_tec_id` WHERE `id_code_cons_tec` = '$id_abrev'";
            $requete_affiche_name= $db->query($sql_affiche_name);
            $affiche_name= $requete_affiche_name->fetch();   
                $Descriptions = $affiche_name["Descriptions"];
                $id_cons_tec = $affiche_name["id"];

            // USED FOR
            $sql_affiche_used_for = "SELECT * FROM `cons_tec_used` WHERE `id_cons_tec` = '$id_cons_tec'";
            $requete_affiche_used_for = $db->query($sql_affiche_used_for);
            $affiche_used_for= $requete_affiche_used_for->fetch(); 
                $Used_for = $affiche_used_for["used_for"];
          
            // PRICES
            $sql_affiche_price = "SELECT * FROM `cons_tec_price` WHERE `id_cons_tec` = '$id_cons_tec'";
            $requete_affiche_price  = $db->query($sql_affiche_price );
            $affiche_price = $requete_affiche_price ->fetch();
                $Prices_quantity = $affiche_price ["price_quantity"];
                $Prices_Box_name = $affiche_price ["box_name"];
                $Prices = $affiche_price ["price"];

            // LOCATION
            $sql_affiche_location= "SELECT * FROM `cons_tec_location` WHERE `id_cons_tec` = '$id_cons_tec'";
            $requete_affiche_location = $db->query($sql_affiche_location );
            $affiche_location = $requete_affiche_location ->fetch();    
                $Location = $affiche_location ["cons_tec_loc"];

            // QT STOCK
            $sql_affiche_qt = "SELECT * FROM `cons_tec_quantity` WHERE `id_cons_tec` = '$id_cons_tec'";
            $requete_affiche_qt = $db->query($sql_affiche_qt );
            $affiche_qt = $requete_affiche_qt ->fetch();   
                $Qt = $affiche_qt ["stock"];

            // IMAGE
            $image = $affiche_name["image"];
                $link_image =  "../../../warehouse_img/img/cons_tec_img/" . "$image";

        }//CONSUMABLES

?>