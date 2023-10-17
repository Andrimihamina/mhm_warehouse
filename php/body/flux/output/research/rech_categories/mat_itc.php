<?php

    if($categories == "mat_itc_done-"){
        //CATEGORIES
        $categories = "MAT ITC";
       //IDENTITY
        $id_mat_itc = str_replace("mat_itc_done-", "", $var_id);
        
        $sql_mat_itc = "SELECT * FROM `mat_itc_id` WHERE `id` = $id_mat_itc";
                        
        //On excute directement la requete
        $requete_mat_itc= $db->query($sql_mat_itc);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_mat_itc = $requete_mat_itc->fetch();

        $id_abrev_code = $affiche_mat_itc["id_code_mat_itc"];
        $descriptions = $affiche_mat_itc ["Descriptions"];
        
        
        //QUANTITE ADD
        $mat_itc_qt =  "mat_itc_qt-" . $id_mat_itc;

        $quantity_out = $_POST[$mat_itc_qt];

        $name_adding = $_SESSION["user"]["username"];

        //INSERTION
        if($quantity_out !=""){

            /*
                Quantte in stock
            */
            $sql_mat_itc_qt = "SELECT * FROM `mat_itc_quantity` WHERE `id_mat_itc` = $id_mat_itc";
                        
            //On excute directement la requete
            $requete_mat_itc_qt= $db->query($sql_mat_itc_qt);

            //On recupere les donnees (fetch ou fetchall)
            $affiche__mat_itc_qt = $requete_mat_itc_qt->fetch();

            $mat_itc_qt = $affiche__mat_itc_qt["stock"];

            // INDIQUE LE RESPONSABLE QUI MITS OUT
            // Medical
            $service_out = 1;

            //COMPARASON DU QT OUT SU QT STOCK
            if("$mat_itc_qt" >= "$quantity_out"){

        $sql_mat_itc = "INSERT INTO `flux_out` 
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
        '$id_mat_itc', '$id_abrev_code', '$descriptions', 
        '$quantity_out', 
        '$name_adding',
        '0',
        '0',
        '0')";

        //On prerare la requete
        $query_mat_itc= $db->prepare($sql_mat_itc);
        //On execute la requete
        $query_mat_itc->execute();

        header("Location: index.php");

            }//QUANTITE OUT > QT STOCK
            else
            {$_SESSION["error"] = ["Quantity not enouhg"];}      

    }//Quantte n'est pas vide

    }//CONSUMABLE
  
 
?>