<?php

    if($categories == "mat_imo_done-"){
        //CATEGORIES
        $categories = "MAT REAL ESTATE";
       //IDENTITY
        $id_mat_imo = str_replace("mat_imo_done-", "", $var_id);
        
        $sql_mat_imo = "SELECT * FROM `mat_imo_id` WHERE `id` = $id_mat_imo";
                        
        //On excute directement la requete
        $requete_mat_imo= $db->query($sql_mat_imo);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_mat_imo = $requete_mat_imo->fetch();

        $id_abrev_code = $affiche_mat_imo["id_code_mat_imo"];
        $descriptions = $affiche_mat_imo ["Descriptions"];
        
        
        //QUANTITE ADD
        $mat_imo_qt =  "mat_imo_qt-" . $id_mat_imo;

        $quantity_out = $_POST[$mat_imo_qt];

        $name_adding = $_SESSION["user"]["username"];

        //INSERTION
        if($quantity_out !=""){

            /*
                Quantte in stock
            */
            $sql_mat_imo_qt = "SELECT * FROM `mat_imo_quantity` WHERE `id_mat_imo` = $id_mat_imo";
                        
            //On excute directement la requete
            $requete_mat_imo_qt= $db->query($sql_mat_imo_qt);

            //On recupere les donnees (fetch ou fetchall)
            $affiche__mat_imo_qt = $requete_mat_imo_qt->fetch();

            $mat_imo_qt = $affiche__mat_imo_qt["stock"];

            // INDIQUE LE RESPONSABLE QUI MITS OUT
            // Medical
            $service_out = 1;

            //COMPARASON DU QT OUT SU QT STOCK
            if("$mat_imo_qt" >= "$quantity_out"){

        $sql_mat_imo = "INSERT INTO `flux_out` 
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
        '$id_mat_imo', '$id_abrev_code', '$descriptions', 
        '$quantity_out', 
        '$name_adding',
        '0',
        '0',
        '0')";

        //On prerare la requete
        $query_mat_imo= $db->prepare($sql_mat_imo);
        //On execute la requete
        $query_mat_imo->execute();

        header("Location: index.php");

            }//QUANTITE OUT > QT STOCK
            else
            {$_SESSION["error"] = ["Quantity not enouhg"];}      

    }//Quantte n'est pas vide

    }//CONSUMABLE
  
 
?>