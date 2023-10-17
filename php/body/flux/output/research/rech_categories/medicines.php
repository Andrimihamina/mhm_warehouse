<?php

    if($categories == "med_med_done-"){
        //CATEGORIES
        $categories = "Medicines";
       //IDENTITY
        $id_med = str_replace("med_med_done-", "", $var_id);
        
        $sql_med_med = "SELECT * FROM `medicine_id` WHERE `id` = $id_med";
                        
        //On excute directement la requete
        $requete_med_med= $db->query($sql_med_med);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_med_med = $requete_med_med->fetch();

        $id_abrev_code = $affiche_med_med["id_code_med"];
        $descriptions = $affiche_med_med ["Descriptions"];
        
        
        //QUANTITE ADD
        $med_med_qt =  "med_med_qt-" . $id_med;

        $quantity_out = $_POST[$med_med_qt];

        $name_adding = $_SESSION["user"]["username"];

        //INSERTION
        if($quantity_out !=""){

            /*
                Quantte in stock
            */
            $sql_med_qt = "SELECT * FROM `medicine_quantity` WHERE `id_med` = $id_med";
                        
            //On excute directement la requete
            $requete_med_qt= $db->query($sql_med_qt);

            //On recupere les donnees (fetch ou fetchall)
            $affiche_med_qt = $requete_med_qt->fetch();

            $med_qt = $affiche_med_qt["stock"];

            // INDIQUE LE RESPONSABLE QUI MITS OUT
            // Medical
            $service_out = 1;

            //COMPARASON DU QT OUT SU QT STOCK
            if("$med_qt" >= "$quantity_out"){

        $sql_medicine = "INSERT INTO `flux_out` 
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
        '$id_med', '$id_abrev_code', '$descriptions', 
        '$quantity_out', 
        '$name_adding',
        '0',
        '0',
        '0')";

        //On prerare la requete
        $query_medicine = $db->prepare($sql_medicine);
        //On execute la requete
        $query_medicine->execute();

        header("Location: index.php");

            }//QUANTITE OUT > QT STOCK
            else
            {$_SESSION["error"] = ["Quantity not enouhg"];}      

    }//Quantte n'est pas vide

    }//CONSUMABLE
  
 
?>