<?php

    if($categories == "mat_med_done-"){
        //CATEGORIES
        $categories = "MAT MEDICAL";
       //IDENTITY
        $id_mat_med = str_replace("mat_med_done-", "", $var_id);
        
        $sql_mat_med = "SELECT * FROM `mat_med_id` WHERE `id` = $id_mat_med";
                        
        //On excute directement la requete
        $requete_mat_med= $db->query($sql_mat_med);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_mat_med = $requete_mat_med->fetch();

        $id_abrev_code = $affiche_mat_med["id_code_mat_med"];
        $descriptions = $affiche_mat_med ["Descriptions"];
        
        
        //QUANTITE ADD
        $mat_med_qt =  "mat_med_qt-" . $id_mat_med;

        $quantity_out = $_POST[$mat_med_qt];

        $name_adding = $_SESSION["user"]["username"];

        //INSERTION
        if($quantity_out !=""){

            /*
                Quantte in stock
            */
            $sql_mat_med_qt = "SELECT * FROM `mat_med_quantity` WHERE `id_mat_med` = $id_mat_med";
                        
            //On excute directement la requete
            $requete_mat_med_qt= $db->query($sql_mat_med_qt);

            //On recupere les donnees (fetch ou fetchall)
            $affiche__mat_med_qt = $requete_mat_med_qt->fetch();

            $mat_med_qt = $affiche__mat_med_qt["stock"];

            // INDIQUE LE RESPONSABLE QUI MITS OUT
            // Medical
            $service_out = 1;

            //COMPARASON DU QT OUT SU QT STOCK
            if("$mat_med_qt" >= "$quantity_out"){

        $sql_mat_med = "INSERT INTO `flux_out` 
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
        '$id_mat_med', '$id_abrev_code', '$descriptions', 
        '$quantity_out', 
        '$name_adding',
        '0',
        '0',
        '0')";

        //On prerare la requete
        $query_mat_med= $db->prepare($sql_mat_med);
        //On execute la requete
        $query_mat_med->execute();

        header("Location: index.php");

            }//QUANTITE OUT > QT STOCK
            else
            {$_SESSION["error"] = ["Quantity not enouhg"];}      

    }//Quantte n'est pas vide

    }//CONSUMABLE
  
 
?>