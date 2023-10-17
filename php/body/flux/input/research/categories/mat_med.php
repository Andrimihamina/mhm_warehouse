<?php
    
    if($categories == "mat_med_done-"){
        //CATEGORIES
        $categories = "MAT MEDICAL";
       //IDENTITY
        $id_mat_med = str_replace("mat_med_done-", "", $var_id);
        
        $sql_mat_med = "SELECT * FROM `mat_med_id` WHERE `id` = '$id_mat_med'";
                        
        //On excute directement la requete
        $requete_mat_med= $db->query($sql_mat_med);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_mat_med = $requete_mat_med->fetch();

        $id_abrev_code = $affiche_mat_med["id_code_mat_med"];
        $descriptions = $affiche_mat_med ["Descriptions"];
        
        //QUANTITE ADD
        $mat_med_qt =  "mat_med_qt-" . $id_mat_med;

        $quantity_added = $_POST[$mat_med_qt];

        //PRICE PAR QUANTITY
        $mat_med_pr =  "mat_med_pr-" . $id_mat_med;

        $purchase_price = $_POST[$mat_med_pr];

        $name_adding = $_SESSION["user"]["username"];



        //INSERTION
        if($quantity_added !="" ){
            if($purchase_price !=""){
        $sql_mat_med = "INSERT INTO `flux_in` 
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
        '$id_mat_med', '$id_abrev_code', '$descriptions', 
        '$quantity_added', '$purchase_price', 
        '$name_adding', 
        '0')";

        //On prerare la requete
        $query_mat_med = $db->prepare($sql_mat_med);
        //On execute la requete
        $query_mat_med->execute();

        header("Location: index.php");

        }//Price n'est pas vide
    }//Quantte n'est pas vide
    }//CONSUMABLE
 
?>