<?php

    if($categories == "cos_tec_done-"){
        //CATEGORIES
        $categories = "CONS TECHNICAL"; 
       //IDENTITY
        $id_cons_tec = str_replace("cos_tec_done-", "", $var_id);
        
        $sql_cons_tec = "SELECT * FROM `cons_tec_id` WHERE `id` = $id_cons_tec";
                        
        //On excute directement la requete
        $requete_cons_tec= $db->query($sql_cons_tec);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_cons_tec = $requete_cons_tec->fetch();

        $id_abrev_code = $affiche_cons_tec["id_code_cons_tec"];
        $descriptions = $affiche_cons_tec ["Descriptions"];
        
        
        //QUANTITE ADD
        $cons_tec_qt =  "cos_tec_qt-" . $id_cons_tec;

        $quantity_out = $_POST[$cons_tec_qt];

        $name_adding = $_SESSION["user"]["username"];

        //INSERTION
        if($quantity_out !=""){

            /*
                Quantte in stock
            */
            $sql_cons_tec_qt = "SELECT * FROM `cons_tec_quantity` WHERE `id_cons_tec` = $id_cons_tec";
                        
            //On excute directement la requete
            $requete_cons_tec_qt= $db->query($sql_cons_tec_qt);

            //On recupere les donnees (fetch ou fetchall)
            $affiche__cons_tec_qt = $requete_cons_tec_qt->fetch();

            $cons_tec_qt = $affiche__cons_tec_qt["stock"];

            // INDIQUE LE RESPONSABLE QUI MITS OUT
            // Medical
            $service_out = 1;

            //COMPARASON DU QT OUT SU QT STOCK
            if("$cons_tec_qt" >= "$quantity_out"){

        $sql_cons_tec = "INSERT INTO `flux_out` 
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
        '$id_cons_tec', '$id_abrev_code', '$descriptions', 
        '$quantity_out', 
        '$name_adding',
        '0',
        '0',
        '0')";

        //On prerare la requete
        $query_cons_tec= $db->prepare($sql_cons_tec);
        //On execute la requete
        $query_cons_tec->execute();

        header("Location: index.php");

            }//QUANTITE OUT > QT STOCK
            else
            {$_SESSION["error"] = ["Quantity not enouhg"];}      

    }//Quantte n'est pas vide

    }//CONSUMABLE
  
 
?>