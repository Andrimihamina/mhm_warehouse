<?php
    
    if($categories == "cos_tec_done-"){
        //CATEGORIES
        $categories = "CONS TECHNICAL";
       //IDENTITY
        $id_cons_tec = str_replace("cos_tec_done-", "", $var_id);
        
        $sql_cons_tec = "SELECT * FROM `cons_tec_id` WHERE `id` = '$id_cons_tec'";
                        
        //On excute directement la requete
        $requete_cons_tec= $db->query($sql_cons_tec);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_cons_tec = $requete_cons_tec->fetch();

        $id_abrev_code = $affiche_cons_tec["id_code_cons_tec"];
        $descriptions = $affiche_cons_tec ["Descriptions"];
        
        //QUANTITE ADD
        $cons_tec_qt =  "cons_tec_qt-" . $id_cons_tec;

        $quantity_added = $_POST[$cons_tec_qt];

        //PRICE PAR QUANTITY
        $cons_tec_pr =  "cons_tec_pr-" . $id_cons_tec;

        $purchase_price = $_POST[$cons_tec_pr];

        $name_adding = $_SESSION["user"]["username"];



        //INSERTION
        if($quantity_added !="" ){
            if($purchase_price !=""){
        $sql_cons_tec = "INSERT INTO `flux_in` 
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
        '$id_cons_tec', '$id_abrev_code', '$descriptions', 
        '$quantity_added', '$purchase_price', 
        '$name_adding', 
        '0')";

        //On prerare la requete
        $query_cons_tec = $db->prepare($sql_cons_tec);
        //On execute la requete
        $query_cons_tec->execute();

        header("Location: index.php");

        }//Price n'est pas vide
    }//Quantte n'est pas vide
    }//MATERIALS
 
?>