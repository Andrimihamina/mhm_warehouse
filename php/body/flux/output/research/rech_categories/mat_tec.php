<?php

    if($categories == "mat_tec_done-"){
        //CATEGORIES
        $categories = "MAT LOGISTIC";
       //IDENTITY
        $id_mat_tec = str_replace("mat_tec_done-", "", $var_id);
        
        $sql_mat_tec = "SELECT * FROM `mat_tec_id` WHERE `id` = $id_mat_tec";
                        
        //On excute directement la requete
        $requete_mat_tec= $db->query($sql_mat_tec);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_mat_tec = $requete_mat_tec->fetch();

        $id_abrev_code = $affiche_mat_tec["id_code_mat_tec"];
        $descriptions = $affiche_mat_tec ["Descriptions"];
        
        
        //QUANTITE ADD
        $mat_tec_qt =  "mat_tec_qt-" . $id_mat_tec;

        $quantity_out = $_POST[$mat_tec_qt];

        $name_adding = $_SESSION["user"]["username"];

        //INSERTION
        if($quantity_out !=""){

            /*
                Quantte in stock
            */
            $sql_mat_tec_qt = "SELECT * FROM `mat_tec_quantity` WHERE `id_mat_tec` = $id_mat_tec";
                        
            //On excute directement la requete
            $requete_mat_tec_qt= $db->query($sql_mat_tec_qt);

            //On recupere les donnees (fetch ou fetchall)
            $affiche__mat_tec_qt = $requete_mat_tec_qt->fetch();

            $mat_tec_qt = $affiche__mat_tec_qt["stock"];

            // INDIQUE LE RESPONSABLE QUI MITS OUT
            // Medical
            $service_out = 1;

            //COMPARASON DU QT OUT SU QT STOCK
            if("$mat_tec_qt" >= "$quantity_out"){

        $sql_mat_tec = "INSERT INTO `flux_out` 
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
        '$id_mat_tec', '$id_abrev_code', '$descriptions', 
        '$quantity_out', 
        '$name_adding',
        '0',
        '0',
        '0')";

        //On prerare la requete
        $query_mat_tec= $db->prepare($sql_mat_tec);
        //On execute la requete
        $query_mat_tec->execute();

        header("Location: index.php");

            }//QUANTITE OUT > QT STOCK
            else
            {$_SESSION["error"] = ["Quantity not enouhg"];}      

    }//Quantte n'est pas vide

    }//CONSUMABLE
  
 
?>