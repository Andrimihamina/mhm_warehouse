<?php
    
    if($categories == "cos_med_done-"){
        //CATEGORIES
        $categories = "CONS MEDICAL";
       //IDENTITY
        $id_cons_med = str_replace("cos_med_done-", "", $var_id);
        
        $sql_cons_med = "SELECT * FROM `cons_med_id` WHERE `id` = '$id_cons_med'";
                        
        //On excute directement la requete
        $requete_cons_med= $db->query($sql_cons_med);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_cons_med = $requete_cons_med->fetch();

        $id_abrev_code = $affiche_cons_med["id_code_cons_med"];
        $descriptions = $affiche_cons_med ["Descriptions"];
        
        //QUANTITE ADD
        $cons_med_qt =  "cons_med_qt-" . $id_cons_med;

        $quantity_added = $_POST[$cons_med_qt];

        //PRICE PAR QUANTITY
        $cons_med_pr =  "cons_med_pr-" . $id_cons_med;

        $purchase_price = $_POST[$cons_med_pr];

        $name_adding = $_SESSION["user"]["username"];



        //INSERTION
        if($quantity_added !="" ){
            if($purchase_price !=""){
        $sql_cons_med = "INSERT INTO `flux_in` 
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
        '$id_cons_med', '$id_abrev_code', '$descriptions', 
        '$quantity_added', '$purchase_price', 
        '$name_adding', 
        '0')";

        //On prerare la requete
        $query_cons_med = $db->prepare($sql_cons_med);
        //On execute la requete
        $query_cons_med->execute();

        header("Location: index.php");

        }//Price n'est pas vide
    }//Quantte n'est pas vide
    }//MATERIALS
 
?>