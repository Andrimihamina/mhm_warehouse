<?php
    
    if($categories == "mat_log_done-"){
        //CATEGORIES
        $categories = "MAT LOGISTIC";
       //IDENTITY
        $id_mat_log = str_replace("mat_log_done-", "", $var_id);
        
        $sql_mat_log = "SELECT * FROM `mat_log_id` WHERE `id` = '$id_mat_log'";
                        
        //On excute directement la requete
        $requete_mat_log= $db->query($sql_mat_log);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_mat_log = $requete_mat_log->fetch();

        $id_abrev_code = $affiche_mat_log["id_code_mat_log"];
        $descriptions = $affiche_mat_log ["Descriptions"];
        
        //QUANTITE ADD
        $mat_log_qt =  "mat_log_qt-" . $id_mat_log;

        $quantity_added = $_POST[$mat_log_qt];

        //PRICE PAR QUANTITY
        $mat_log_pr =  "mat_log_pr-" . $id_mat_log;

        $purchase_price = $_POST[$mat_log_pr];

        $name_adding = $_SESSION["user"]["username"];



        //INSERTION
        if($quantity_added !="" ){
            if($purchase_price !=""){
        $sql_mat_log = "INSERT INTO `flux_in` 
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
        '$id_mat_log', '$id_abrev_code', '$descriptions', 
        '$quantity_added', '$purchase_price', 
        '$name_adding', 
        '0')";

        //On prerare la requete
        $query_mat_log = $db->prepare($sql_mat_log);
        //On execute la requete
        $query_mat_log->execute();

        header("Location: index.php");

        }//Price n'est pas vide
    }//Quantte n'est pas vide
    }//CONSUMABLE
 
?>