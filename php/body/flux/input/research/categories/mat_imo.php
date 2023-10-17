<?php
    
    if($categories == "mat_imo_done-"){
        //CATEGORIES
        $categories = "MAT REAL ESTATE";
       //IDENTITY
        $id_mat_imo = str_replace("mat_imo_done-", "", $var_id);
        
        $sql_mat_imo = "SELECT * FROM `mat_imo_id` WHERE `id` = '$id_mat_imo'";
                        
        //On excute directement la requete
        $requete_mat_imo= $db->query($sql_mat_imo);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_mat_imo = $requete_mat_imo->fetch();

        $id_abrev_code = $affiche_mat_imo["id_code_mat_imo"];
        $descriptions = $affiche_mat_imo ["Descriptions"];
        
        //QUANTITE ADD
        $mat_imo_qt =  "mat_imo_qt-" . $id_mat_imo;

        $quantity_added = $_POST[$mat_imo_qt];

        //PRICE PAR QUANTITY
        $mat_imo_pr =  "mat_imo_pr-" . $id_mat_imo;

        $purchase_price = $_POST[$mat_imo_pr];

        $name_adding = $_SESSION["user"]["username"];



        //INSERTION
        if($quantity_added !="" ){
            if($purchase_price !=""){
        $sql_mat_imo = "INSERT INTO `flux_in` 
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
        '$id_mat_imo', '$id_abrev_code', '$descriptions', 
        '$quantity_added', '$purchase_price', 
        '$name_adding', 
        '0')";

        //On prerare la requete
        $query_mat_imo = $db->prepare($sql_mat_imo);
        //On execute la requete
        $query_mat_imo->execute();

        header("Location: index.php");

        }//Price n'est pas vide
    }//Quantte n'est pas vide
    }//CONSUMABLE
 
?>