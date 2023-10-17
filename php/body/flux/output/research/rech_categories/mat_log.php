<?php

    if($categories == "mat_log_done-"){
        //CATEGORIES
        $categories = "MAT LOGISTIC";
       //IDENTITY
        $id_mat_log = str_replace("mat_log_done-", "", $var_id);
        
        $sql_mat_log = "SELECT * FROM `mat_log_id` WHERE `id` = $id_mat_log";
                        
        //On excute directement la requete
        $requete_mat_log= $db->query($sql_mat_log);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_mat_log = $requete_mat_log->fetch();

        $id_abrev_code = $affiche_mat_log["id_code_mat_log"];
        $descriptions = $affiche_mat_log ["Descriptions"];
        
        
        //QUANTITE ADD
        $mat_log_qt =  "mat_log_qt-" . $id_mat_log;

        $quantity_out = $_POST[$mat_log_qt];

        $name_adding = $_SESSION["user"]["username"];

        //INSERTION
        if($quantity_out !=""){

            /*
                Quantte in stock
            */
            $sql_mat_log_qt = "SELECT * FROM `mat_log_quantity` WHERE `id_mat_log` = $id_mat_log";
                        
            //On excute directement la requete
            $requete_mat_log_qt= $db->query($sql_mat_log_qt);

            //On recupere les donnees (fetch ou fetchall)
            $affiche__mat_log_qt = $requete_mat_log_qt->fetch();

            $mat_log_qt = $affiche__mat_log_qt["stock"];

            // INDIQUE LE RESPONSABLE QUI MITS OUT
            // Medical
            $service_out = 1;

            //COMPARASON DU QT OUT SU QT STOCK
            if("$mat_log_qt" >= "$quantity_out"){

        $sql_mat_log = "INSERT INTO `flux_out` 
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
        '$id_mat_log', '$id_abrev_code', '$descriptions', 
        '$quantity_out', 
        '$name_adding',
        '0',
        '0',
        '0')";

        //On prerare la requete
        $query_mat_log= $db->prepare($sql_mat_log);
        //On execute la requete
        $query_mat_log->execute();

        header("Location: index.php");

            }//QUANTITE OUT > QT STOCK
            else
            {$_SESSION["error"] = ["Quantity not enouhg"];}      

    }//Quantte n'est pas vide

    }//CONSUMABLE
  
 
?>