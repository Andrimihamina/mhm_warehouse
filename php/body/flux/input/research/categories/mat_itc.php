<?php
    
    if($categories == "mat_itc_done-"){
        //CATEGORIES
        $categories = "MAT ITC";
       //IDENTITY
        $id_mat_itc = str_replace("mat_itc_done-", "", $var_id);
        
        $sql_mat_itc = "SELECT * FROM `mat_itc_id` WHERE `id` = '$id_mat_itc'";
                        
        //On excute directement la requete
        $requete_mat_itc= $db->query($sql_mat_itc);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_mat_itc = $requete_mat_itc->fetch();

        $id_abrev_code = $affiche_mat_itc["id_code_mat_itc"];
        $descriptions = $affiche_mat_itc ["Descriptions"];
        
        //QUANTITE ADD
        $mat_itc_qt =  "mat_itc_qt-" . $id_mat_itc;

        $quantity_added = $_POST[$mat_itc_qt];

        //PRICE PAR QUANTITY
        $mat_itc_pr =  "mat_itc_pr-" . $id_mat_itc;

        $purchase_price = $_POST[$mat_itc_pr];

        $name_adding = $_SESSION["user"]["username"];



        //INSERTION
        if($quantity_added !="" ){
            if($purchase_price !=""){
        $sql_mat_itc = "INSERT INTO `flux_in` 
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
        '$id_mat_itc', '$id_abrev_code', '$descriptions', 
        '$quantity_added', '$purchase_price', 
        '$name_adding', 
        '0')";

        //On prerare la requete
        $query_mat_itc = $db->prepare($sql_mat_itc);
        //On execute la requete
        $query_mat_itc->execute();

        header("Location: index.php");

        }//Price n'est pas vide
    }//Quantte n'est pas vide
    }//CONSUMABLE
 
?>