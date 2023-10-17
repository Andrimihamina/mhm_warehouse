<?php

    if($categories == "cos_med_done-"){
        //CATEGORIES
        $categories = "CONS MEDICAL";
       //IDENTITY
        $id_cons_med = str_replace("cos_med_done-", "", $var_id);
        
        $sql_cons_med = "SELECT * FROM `cons_med_id` WHERE `id` = $id_cons_med";
                        
        //On excute directement la requete
        $requete_cons_med= $db->query($sql_cons_med);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_cons_med = $requete_cons_med->fetch();

        $id_abrev_code = $affiche_cons_med["id_code_cons_med"];
        $descriptions = $affiche_cons_med ["Descriptions"];
        
        
        //QUANTITE ADD
        $cons_med_qt =  "cos_med_qt-" . $id_cons_med;

        $quantity_out = $_POST[$cons_med_qt];

        $name_adding = $_SESSION["user"]["username"];

        //INSERTION
        if($quantity_out !=""){

            /*
                Quantte in stock
            */
            $sql_cons_med_qt = "SELECT * FROM `cons_med_quantity` WHERE `id_cons_med` = $id_cons_med";
                        
            //On excute directement la requete
            $requete_cons_med_qt= $db->query($sql_cons_med_qt);

            //On recupere les donnees (fetch ou fetchall)
            $affiche__cons_med_qt = $requete_cons_med_qt->fetch();

            $cons_med_qt = $affiche__cons_med_qt["stock"];

            // INDIQUE LE RESPONSABLE QUI MITS OUT
            // Medical
            $service_out = 1;

            //COMPARASON DU QT OUT SU QT STOCK
            if("$cons_med_qt" >= "$quantity_out"){

        $sql_cons_med = "INSERT INTO `flux_out` 
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
        '$id_cons_med', '$id_abrev_code', '$descriptions', 
        '$quantity_out', 
        '$name_adding',
        '0',
        '0',
        '0')";

        //On prerare la requete
        $query_cons_med= $db->prepare($sql_cons_med);
        //On execute la requete
        $query_cons_med->execute();

        header("Location: index.php");

            }//QUANTITE OUT > QT STOCK
            else
            {$_SESSION["error"] = ["Quantity not enouhg"];}      

    }//Quantte n'est pas vide

    }//CONSUMABLE
  
 
?>