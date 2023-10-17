<?php
    
    if($categories == "mat_tec_done-"){
        //CATEGORIES
        $categories = "MAT TECHNICAL";
       //IDENTITY
        $id_mat_tec = str_replace("mat_tec_done-", "", $var_id);
        
        $sql_mat_tec = "SELECT * FROM `mat_tec_id` WHERE `id` = '$id_mat_tec'";
                        
        //On excute directement la requete
        $requete_mat_tec= $db->query($sql_mat_tec);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_mat_tec = $requete_mat_tec->fetch();

        $id_abrev_code = $affiche_mat_tec["id_code_mat_tec"];
        $descriptions = $affiche_mat_tec ["Descriptions"];
        
        //QUANTITE ADD
        $mat_tec_qt =  "mat_tec_qt-" . $id_mat_tec;

        $quantity_added = $_POST[$mat_tec_qt];

        //PRICE PAR QUANTITY
        $mat_tec_pr =  "mat_tec_pr-" . $id_mat_tec;

        $purchase_price = $_POST[$mat_tec_pr];

        $name_adding = $_SESSION["user"]["username"];



        //INSERTION
        if($quantity_added !="" ){
            if($purchase_price !=""){
        $sql_mat_tec = "INSERT INTO `flux_in` 
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
        '$id_mat_tec', '$id_abrev_code', '$descriptions', 
        '$quantity_added', '$purchase_price', 
        '$name_adding', 
        '0')";

        //On prerare la requete
        $query_mat_tec = $db->prepare($sql_mat_tec);
        //On execute la requete
        $query_mat_tec->execute();

        header("Location: index.php");

        }//Price n'est pas vide
    }//Quantte n'est pas vide
    }//CONSUMABLE
 
?>