<?php
    
    if($categories == "cos_log_done-"){
        //CATEGORIES
        $categories = "CONS LOGISTIC";
       //IDENTITY
        $id_cons_log = str_replace("cos_log_done-", "", $var_id);
        
        $sql_cons_log = "SELECT * FROM `cons_log_id` WHERE `id` = '$id_cons_log'";
                        
        //On excute directement la requete
        $requete_cons_log= $db->query($sql_cons_log);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_cons_log = $requete_cons_log->fetch();

        $id_abrev_code = $affiche_cons_log["id_code_cons_log"];
        $descriptions = $affiche_cons_log ["Descriptions"];
        
        //QUANTITE ADD
        $cons_log_qt =  "cons_log_qt-" . $id_cons_log;

        $quantity_added = $_POST[$cons_log_qt];

        //PRICE PAR QUANTITY
        $cons_log_pr =  "cons_log_pr-" . $id_cons_log;

        $purchase_price = $_POST[$cons_log_pr];

        $name_adding = $_SESSION["user"]["username"];



        //INSERTION
        if($quantity_added !="" ){
            if($purchase_price !=""){
        $sql_cons_log = "INSERT INTO `flux_in` 
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
        '$id_cons_log', '$id_abrev_code', '$descriptions', 
        '$quantity_added', '$purchase_price', 
        '$name_adding', 
        '0')";

        //On prerare la requete
        $query_cons_log = $db->prepare($sql_cons_log);
        //On execute la requete
        $query_cons_log->execute();

        header("Location: index.php");

        }//Price n'est pas vide
    }//Quantte n'est pas vide
    }//MATERIALS
 
?>