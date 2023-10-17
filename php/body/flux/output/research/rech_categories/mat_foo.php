<?php

    if($categories == "mat_foo_done-"){
        //CATEGORIES
        $categories = "MAT FOODS";
       //IDENTITY
        $id_mat_foo = str_replace("mat_foo_done-", "", $var_id);
        
        $sql_mat_foo = "SELECT * FROM `mat_foo_id` WHERE `id` = $id_mat_foo";
                        
        //On excute directement la requete
        $requete_mat_foo= $db->query($sql_mat_foo);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_mat_foo = $requete_mat_foo->fetch();

        $id_abrev_code = $affiche_mat_foo["id_code_mat_foo"];
        $descriptions = $affiche_mat_foo ["Descriptions"];
        
        
        //QUANTITE ADD
        $mat_foo_qt =  "mat_foo_qt-" . $id_mat_foo;

        $quantity_out = $_POST[$mat_foo_qt];

        $name_adding = $_SESSION["user"]["username"];

        //INSERTION
        if($quantity_out !=""){

            /*
                Quantte in stock
            */
            $sql_mat_foo_qt = "SELECT * FROM `mat_foo_quantity` WHERE `id_mat_foo` = $id_mat_foo";
                        
            //On excute directement la requete
            $requete_mat_foo_qt= $db->query($sql_mat_foo_qt);

            //On recupere les donnees (fetch ou fetchall)
            $affiche__mat_foo_qt = $requete_mat_foo_qt->fetch();

            $mat_foo_qt = $affiche__mat_foo_qt["stock"];

            // INDIQUE LE RESPONSABLE QUI MITS OUT
            // Medical
            $service_out = 1;

            //COMPARASON DU QT OUT SU QT STOCK
            if("$mat_foo_qt" >= "$quantity_out"){

        $sql_mat_foo = "INSERT INTO `flux_out` 
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
        '$id_mat_foo', '$id_abrev_code', '$descriptions', 
        '$quantity_out', 
        '$name_adding',
        '0',
        '0',
        '0')";

        //On prerare la requete
        $query_mat_foo= $db->prepare($sql_mat_foo);
        //On execute la requete
        $query_mat_foo->execute();

        header("Location: index.php");

            }//QUANTITE OUT > QT STOCK
            else
            {$_SESSION["error"] = ["Quantity not enouhg"];}      

    }//Quantte n'est pas vide

    }//CONSUMABLE
  
 
?>