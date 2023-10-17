<?php

    if($categories == "cos_foo_done-"){
        //CATEGORIES
        $categories = "CONS FOODS"; 
       //IDENTITY
        $id_cons_foo = str_replace("cos_foo_done-", "", $var_id);
        
        $sql_cons_foo = "SELECT * FROM `cons_foo_id` WHERE `id` = $id_cons_foo";
                        
        //On excute directement la requete
        $requete_cons_foo= $db->query($sql_cons_foo);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_cons_foo = $requete_cons_foo->fetch();

        $id_abrev_code = $affiche_cons_foo["id_code_cons_foo"];
        $descriptions = $affiche_cons_foo ["Descriptions"];
        
        
        //QUANTITE ADD
        $cons_foo_qt =  "cos_foo_qt-" . $id_cons_foo;

        $quantity_out = $_POST[$cons_foo_qt];

        $name_adding = $_SESSION["user"]["username"];

        //INSERTION
        if($quantity_out !=""){

            /*
                Quantte in stock
            */
            $sql_cons_foo_qt = "SELECT * FROM `cons_foo_quantity` WHERE `id_cons_foo` = $id_cons_foo";
                        
            //On excute directement la requete
            $requete_cons_foo_qt= $db->query($sql_cons_foo_qt);

            //On recupere les donnees (fetch ou fetchall)
            $affiche__cons_foo_qt = $requete_cons_foo_qt->fetch();

            $cons_foo_qt = $affiche__cons_foo_qt["stock"];

            // INDIQUE LE RESPONSABLE QUI MITS OUT
            // Medical
            $service_out = 1;

            //COMPARASON DU QT OUT SU QT STOCK
            if("$cons_foo_qt" >= "$quantity_out"){

        $sql_cons_foo = "INSERT INTO `flux_out` 
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
        '$id_cons_foo', '$id_abrev_code', '$descriptions', 
        '$quantity_out', 
        '$name_adding',
        '0',
        '0',
        '0')";

        //On prerare la requete
        $query_cons_foo= $db->prepare($sql_cons_foo);
        //On execute la requete
        $query_cons_foo->execute();

        header("Location: index.php");

            }//QUANTITE OUT > QT STOCK
            else
            {$_SESSION["error"] = ["Quantity not enouhg"];}      

    }//Quantte n'est pas vide

    }//CONSUMABLE
  
 
?>