<?php

    if($categories == "cos_log_done-"){
        //CATEGORIES
        $categories = "CONS LOGISTIC"; 
       //IDENTITY
        $id_cons_log = str_replace("cos_log_done-", "", $var_id);
        
        $sql_cons_log = "SELECT * FROM `cons_log_id` WHERE `id` = $id_cons_log";
                        
        //On excute directement la requete
        $requete_cons_log= $db->query($sql_cons_log);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_cons_log = $requete_cons_log->fetch();

        $id_abrev_code = $affiche_cons_log["id_code_cons_log"];
        $descriptions = $affiche_cons_log ["Descriptions"];
        
        
        //QUANTITE ADD
        $cons_log_qt =  "cos_log_qt-" . $id_cons_log;

        $quantity_out = $_POST[$cons_log_qt];

        $name_adding = $_SESSION["user"]["username"];

        //INSERTION
        if($quantity_out !=""){

            /*
                Quantte in stock
            */
            $sql_cons_log_qt = "SELECT * FROM `cons_log_quantity` WHERE `id_cons_log` = $id_cons_log";
                        
            //On excute directement la requete
            $requete_cons_log_qt= $db->query($sql_cons_log_qt);

            //On recupere les donnees (fetch ou fetchall)
            $affiche__cons_log_qt = $requete_cons_log_qt->fetch();

            $cons_log_qt = $affiche__cons_log_qt["stock"];

            // INDIQUE LE RESPONSABLE QUI MITS OUT
            // Medical
            $service_out = 1;

            //COMPARASON DU QT OUT SU QT STOCK
            if("$cons_log_qt" >= "$quantity_out"){

        $sql_cons_log = "INSERT INTO `flux_out` 
        (`id_flux_out`, `created_date`,
        `nbr_chr`,`id_out`,  
        `priority`, 
        `services`, 
        `patients_number`,
        `categories`,
        `service_out`, 
        `id_code`, `id_abrev_code`, `descriptions`, 
        `quantity_out`,
        `orderer`, 
        `done_order`,
        `done_resp_storage`, 
        `name_resp_storage`) VALUES 
        (NULL, current_timestamp(), 
        '$nbr_chr', '$id_code_out', 
        '$priority', 
        '$services', 
        '$patient_number',
        '$categories', 
        '$service_out',
        '$id_cons_log', '$id_abrev_code', '$descriptions', 
        '$quantity_out', 
        '$name_adding',
        '0',
        '0',
        '0')";

        //On prerare la requete
        $query_cons_log= $db->prepare($sql_cons_log);
        //On execute la requete
        $query_cons_log->execute();

        header("Location: index.php");

            }//QUANTITE OUT > QT STOCK
            else
            {$_SESSION["error"] = ["Quantity not enouhg"];}      

    }//Quantte n'est pas vide

    }//CONSUMABLE
  
 
?>