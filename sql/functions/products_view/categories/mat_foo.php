<?php
        if($id_cons == "MAT-FOO"){

            $id_abrev = $_GET['idProduit'];

            // CATEGORIES
            $categories = "Foods Materials";
           
            // DESCRIPTIONS
            $sql_affiche_name = "SELECT * FROM `mat_foo_id` WHERE `id_code_mat_foo` = '$id_abrev'";
            $requete_affiche_name= $db->query($sql_affiche_name);
            $affiche_name= $requete_affiche_name->fetch();
                $Descriptions = $affiche_name["Descriptions"];
                $id_mat_foo = $affiche_name["id"];

            // USED FOR
            $sql_affiche_used_for = "SELECT * FROM `mat_foo_used` WHERE `id_mat_foo` = '$id_mat_foo'";
            $requete_affiche_used_for = $db->query($sql_affiche_used_for);
            $affiche_used_for= $requete_affiche_used_for->fetch();
                $Used_for = $affiche_used_for["used_for"];
          
            // PRICES
            $sql_affiche_price = "SELECT * FROM `mat_foo_price` WHERE `id_mat_foo` = '$id_mat_foo'";
            $requete_affiche_price  = $db->query($sql_affiche_price );            
            $affiche_price = $requete_affiche_price ->fetch();    
                $Prices_quantity = $affiche_price ["price_quantity"];
                $Prices_Box_name = $affiche_price ["box_name"];
                $Prices = $affiche_price ["price"];

            // LOCATION
            $sql_affiche_location= "SELECT * FROM `mat_foo_location` WHERE `id_mat_foo` = '$id_mat_foo'";
            $requete_affiche_location = $db->query($sql_affiche_location );
            $affiche_location = $requete_affiche_location ->fetch();
                $Location = $affiche_location ["mat_foo_loc"];

            // QT STOCK
            $sql_affiche_qt = "SELECT * FROM `mat_foo_quantity` WHERE `id_mat_foo` = '$id_mat_foo'";
            $requete_affiche_qt = $db->query($sql_affiche_qt );            
            $affiche_qt = $requete_affiche_qt ->fetch();  
                $Qt = $affiche_qt ["stock"];

            // IMAGE
            $image = $affiche_name["mat_foo_image"];
                $link_image =  "../../../warehouse_img/img/mat_foo_img/" . "$image";

        }//CONSUMABLES

?>