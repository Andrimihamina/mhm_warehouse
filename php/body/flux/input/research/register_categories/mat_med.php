<?php

    /*
    ============MAT MED================================
    */

        if($abbrev_value_indentif == "MAT-MED-"){

            // CODE FLUX
            $code_flux = str_replace("$id_cons", "", $cles);

            //ID du code flux
            $code_flux_in = "code-flux-" . $code_flux;

            // QT in
            $qt_in = "qt" ."-". $id_cons  . $code_flux;

            //Price in
            $pr_in = "pr" ."-". $id_cons . $code_flux;

            $identifiant = $id_cons . $code_flux;
            /*
            echo "<pre>";
            print_r($code_flux_in); 
            echo "=";
            print_r($_POST["$code_flux_in"]);
            echo "</pre>";
            */
            //ID DU FLUX IN
            $id_flux_in = $_POST["$code_flux_in"];
            /*
            echo "<pre>";
            print_r($qt_in);
            echo "=";
            print_r($_POST["$qt_in"]);
            echo "</pre>";
            */
            //QUANTITE DU MEDICINE ENTRANT
            $qt_med_in = $_POST["$qt_in"];
            /*
            echo "<pre>";
            print_r($pr_in);
            echo "=";
            print_r($_POST["$pr_in"]);
            echo "</pre>";
            */
            //PRICE DU MEDICINE ENTRANT
            $pr_med_in = $_POST["$pr_in"];
            /*
            echo "<pre>";
            print_r($identifiant);
            echo "=";
            print_r($_POST["$identifiant"]);
            echo "</pre>";
            */
            //IDENTIFIANT DU MEDICINE IN
            $identifiant =$_POST["$identifiant"];
/*
CONCECTION A LA BDD
*/

        $sql_flux_in_update = "UPDATE `flux_in` SET `done` = '1' WHERE `flux_in`.`id_flux_in` = '$id_flux_in'";
        $query_flux_in_update= $db->prepare($sql_flux_in_update);
            //On execute la requete
        $query_flux_in_update->execute();

        $sql_flux_in_update_qt = "UPDATE `flux_in` SET `quantity_added` = '$qt_med_in' WHERE `flux_in`.`id_flux_in` = '$id_flux_in'";
        $query_flux_in_update_qt= $db->prepare($sql_flux_in_update_qt);
            //On execute la requete
        $query_flux_in_update_qt->execute();

        $sql_flux_in_update_pr = "UPDATE `flux_in` SET `purchase_price` = '$pr_med_in' WHERE `flux_in`.`id_flux_in` = '$id_flux_in'";
        $query_flux_in_update_pr= $db->prepare($sql_flux_in_update_pr);
            //On execute la requete
        $query_flux_in_update_pr->execute();

        /*
        UPDATE LA QUANTITE DANS LE QUANTITE MAT MED
        */
        $sql_id = "SELECT * FROM `mat_med_id` WHERE `id_code_mat_med` = '$identifiant'";
                        
        //On excute directement la requete
        $requete_id= $db->query($sql_id);
    
        //On recupere les donnees (fetch ou fetchall)
        $affiche_id= $requete_id->fetch();
        
        $id_mat_med = $affiche_id["id"];

        /*
            Recherche le stock actuelle
        */                        
        $sql_stock = "SELECT * FROM `mat_med_quantity` WHERE `id_mat_med` = '$id_mat_med'";
                        
                //On excute directement la requete
                $requete_stock= $db->query($sql_stock);
            
                //On recupere les donnees (fetch ou fetchall)
                $affiche_quantite = $requete_stock->fetch();

            $stock_actuelle = $affiche_quantite["stock"];
            //ADDITION DE L'ADMINISTRATION DE STOCK
            $addstock = $stock_actuelle + $qt_med_in;

        $sql_flux_in_update_qt_stock = "UPDATE `mat_med_quantity` SET `stock` = '$addstock' WHERE `mat_med_quantity`.`id_mat_med` = '$id_mat_med'";
                $query_flux_in_update_qt_stock= $db->prepare($sql_flux_in_update_qt_stock);
                    //On execute la requete
                $query_flux_in_update_qt_stock->execute();
        
            // Recherche le stock in actuelle
            $stock_in_actuelle = $affiche_quantite["stock_in"];
            //ADDITION DE L'ADMINISTRATION DE STOCK
            $add_in_stock = $stock_in_actuelle + $qt_med_in;

        $sql_flux_in_update_qt_stock_in = "UPDATE `mat_med_quantity` SET `stock_in` = '$add_in_stock' WHERE `mat_med_quantity`.`id_mat_med` = '$id_mat_med'";
                $query_flux_in_update_qt_stock_in= $db->prepare($sql_flux_in_update_qt_stock_in);
                //On execute la requete
                $query_flux_in_update_qt_stock_in->execute();
            
/*          
=======RETOURNER AU SUPPLIER========================
*/   
            
          
        }//CONSUMABLES 

?>