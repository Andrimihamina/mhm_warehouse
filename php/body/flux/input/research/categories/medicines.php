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

        $quantity_added = $_POST[$med_med_qt];

        //PRICE PAR QUANTITY
        $med_med_pr =  "med_med_pr-" . $id_med;

        $purchase_price = $_POST[$med_med_pr];

        $name_adding = $_SESSION["user"]["username"];



        //INSERTION
        if($quantity_added !="" ){
            if($purchase_price !=""){
        $sql_medicine = "INSERT INTO `flux_in` 
        (`id_flux_in`,  `created_date`, 
        `nbr_in`, `id_in`,
        `purchase_date`, `suppliers`, `Proforma_number`, 
        `bill_number`, `bill_scan`, `modus_payement`, `payment_due_date`, 
        `purchase_comments`, 
        `categories`, 
        `id_code`, `id_abrev_code`, `descriptions`, 
        `quantity_added`, `purchase_price`, 
        `name_adding`, 
        `done`) VALUES 
        (NULL, current_timestamp(), 
        '$nbr_in', '$id_code_in', 
        '$purchase_date','$suppliers', '$proforma_number', 
        '$bill_number', '$bill_scan', '$modus_payement', '$payment_due_date', 
        '$purchase_comments', 
        '$categories', 
        '$id_med', '$id_abrev_code', '$descriptions', 
        '$quantity_added', '$purchase_price', 
        '$name_adding', 
        '0')";

        //On prerare la requete
        $query_medicine = $db->prepare($sql_medicine);
        //On execute la requete
        $query_medicine->execute();

        header("Location: index.php");

        }//Price n'est pas vide
    }//Quantte n'est pas vide
    }//CONSUMABLE
 
?>