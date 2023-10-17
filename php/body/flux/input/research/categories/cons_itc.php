<?php
    
    if($categories == "cos_itc_done-"){
        //CATEGORIES
        $categories = "CONS ITC";
       //IDENTITY
        $id_cons_itc = str_replace("cos_itc_done-", "", $var_id);
        
        $sql_cons_itc = "SELECT * FROM `cons_itc_id` WHERE `id` = '$id_cons_itc'";
                        
        //On excute directement la requete
        $requete_cons_itc= $db->query($sql_cons_itc);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_cons_itc = $requete_cons_itc->fetch();

        $id_abrev_code = $affiche_cons_itc["id_code_cons_itc"];
        $descriptions = $affiche_cons_itc ["Descriptions"];
        
        //QUANTITE ADD
        $cons_itc_qt =  "cons_itc_qt-" . $id_cons_itc;

        $quantity_added = $_POST[$cons_itc_qt];

        //PRICE PAR QUANTITY
        $cons_itc_pr =  "cons_itc_pr-" . $id_cons_itc;

        $purchase_price = $_POST[$cons_itc_pr];

        $name_adding = $_SESSION["user"]["username"];



        //INSERTION
        if($quantity_added !="" ){
            if($purchase_price !=""){
        $sql_cons_itc = "INSERT INTO `flux_in` 
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
        '$id_cons_itc', '$id_abrev_code', '$descriptions', 
        '$quantity_added', '$purchase_price', 
        '$name_adding', 
        '0')";

        //On prerare la requete
        $query_cons_itc = $db->prepare($sql_cons_itc);
        //On execute la requete
        $query_cons_itc->execute();

        header("Location: index.php");

        }//Price n'est pas vide
    }//Quantte n'est pas vide
    }//MATERIALS
 
?>