<?php
     /*==========MEDICINE================================ */

    if($abbrev_value == "MED" and $abbrev_value_indentif  != "MED-COS"){

        $code_out = str_replace("$id", "", $cles);
        
        //CODE OUT
        //ID du code flux PAS DANS LE $_POST
        $code_flux_out = "code-out-" . $code_out;
        /*
        print_r($code_flux_out);
        */
        //ID DU FLUX OUT
        $id_flux_out = $_POST["$code_flux_out"];
        /*
        echo "<pre>";
        print_r($id_flux_out);
        echo "</pre>";
        */

        //QUANTITY ENTER
        // name QT in sanS $_POSZT
        $qt_out = "qt" ."-". $id  . $code_out;
        /*
        print_r($qt_out);
        */
        //QUANTITE DU MEDICINE ENTRANT
        $qt_med_out = $_POST["$qt_out"];
        /*
        echo "<pre>";
        print_r($qt_med_out);
        echo "</pre>";
        */

        //IDENTIFICATION DU MEDICINE SANS $_POST
        $identifiant = $id . $code_out;
        /*
        echo "<pre>";
        print_r($identifiant); 
        echo "</pre>";
        */
        //IDENTIFIANT DU MEDICINE IN
        $identifiant =$_POST["$identifiant"];
        /*
        print_r($identifiant);
        */

        //NOM DE L'ENREGISTREUR
        $name_resp_stock = $_SESSION["user"]["username"];
/*  
CONCECTION A LA BDD
*/
        //ADD LE NOM DU RESPONSABLE STOCK
         $sql_resp_stock = "UPDATE `flux_out` SET `name_resp_storage` = '$name_resp_stock' WHERE `flux_out`.`id_flux_out` = '$id_flux_out'";
         $query_resp_stock= $db->prepare($sql_resp_stock);
             //On execute la requete
         $query_resp_stock->execute();

        //ON UPDADE LE DONE RESPONSIBLE DU STORAGE
        $sql_flux_out_update = "UPDATE `flux_out` SET `done_resp_storage` = '1' WHERE `flux_out`.`id_flux_out` = '$id_flux_out'";
        $query_flux_out_update= $db->prepare($sql_flux_out_update);
            //On execute la requete
        $query_flux_out_update->execute();

        //ON UPDATE LE QUANTITE DANS LE FLUX OUTPUT
        $sql_flux_out_update_qt = "UPDATE `flux_out` SET `quantity_out` = '$qt_med_out' WHERE `flux_out`.`id_flux_out` = '$id_flux_out'";
        $query_flux_out_update_qt= $db->prepare($sql_flux_out_update_qt);
            //On execute la requete
        $query_flux_out_update_qt->execute();

       /*
        UPDATE LA QUANTITE DANS LE QUANTITE MEDICINE
        */
        // ID MED
        $sql_id = "SELECT * FROM `medicine_id` WHERE `id_code_med` = '$identifiant'";
                        
                //On excute directement la requete
                $requete_id= $db->query($sql_id);
                //On recupere les donnees (fetch ou fetchall)
                $affiche_id = $requete_id->fetch();
            
                $id_med = $affiche_id['id'];
        /*
            Recherche le stock actuelle
        */                        
        $sql_stock = "SELECT * FROM `medicine_quantity` WHERE `id_med` = '$id_med'";
                        
                //On excute directement la requete
                $requete_stock= $db->query($sql_stock);
                //On recupere les donnees (fetch ou fetchall)
                $affiche_quantite = $requete_stock->fetch();
            
            $stock_actuelle = $affiche_quantite["stock"];
            //SOUSTRACTION DE LA STOCK ACTUELLE ET LE STOCK PRESENTE DE STOCK
            $soustract = $stock_actuelle - $qt_med_out;

        $sql_flux_out_update_qt_stock = "UPDATE `medicine_quantity` SET `stock` = '$soustract' WHERE `medicine_quantity`.`id_med` = '$id_med'";
                $query_flux_out_update_qt_stock= $db->prepare($sql_flux_out_update_qt_stock);
                //On execute la requete
                $query_flux_out_update_qt_stock->execute();

            // Recherche le stock in actuelle                       
            $stock_out_actuelle = $affiche_quantite["stock_out"];
            //ADDITION DE LA QUANTER DE STOCK SORTIE
            $add_out_stock = $stock_out_actuelle + $qt_med_out;

        $sql_flux_out_update_qt_stock_in = "UPDATE `medicine_quantity` SET `stock_out` = '$add_out_stock' WHERE `medicine_quantity`.`id_med` = '$id_med'";
                $query_flux_out_update_qt_stock_in= $db->prepare($sql_flux_out_update_qt_stock_in);
                //On execute la requete
                $query_flux_out_update_qt_stock_in->execute();

        /*
        UPDATE LA QUANTITE DANS LE QUANTITE MEDICINE PATIENT SYSTEM
        */

        $sql_stock_patient_system_inventory = "SELECT * FROM `inventories` WHERE `item_id` = '$id_med'";
                        
                //On excute directement la requete
                $requete_stock_patient_system_inventory = $db_p->query($sql_stock_patient_system_inventory);
                //On recupere les donnees (fetch ou fetchall)
                $affiche_quantite_patient_system_inventory = $requete_stock_patient_system_inventory->fetch();

                $stock_actuelle_patient_system_inventory = $affiche_quantite_patient_system_inventory["general"];

        //SOUSTRACTION DE LA STOCK ACTUELLE ET LE STOCK PRESENTE DE STOCK
        $soustract_patient_system = $stock_actuelle_patient_system_inventory - $qt_med_out;

        $sql_flux_out_update_qt_general = "UPDATE `inventories` SET `general` = '$soustract_patient_system' WHERE `inventories`.`id_med` = '$id_med'";
        $query_flux_out_update_qt_general = $db_p ->prepare($sql_flux_out_update_qt_general);
        //On execute la requete
        $query_flux_out_update_qt_general->execute();

        // ADD LA QT AU SERVICE
        include("../../../../../php/body/flux/output/resp_stock/categories/patients_system_service_medicines.php");

/*          
=======RETOURNER AU SUPPLIER========================
*/   

}
?>