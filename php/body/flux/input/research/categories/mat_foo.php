<?php
    
    if($categories == "mat_foo_done-"){
        //CATEGORIES
        $categories = "MAT LOGISTIC";
       //IDENTITY
        $id_mat_foo = str_replace("mat_foo_done-", "", $var_id);
        
        $sql_mat_foo = "SELECT * FROM `mat_foo_id` WHERE `id` = '$id_mat_foo'";
                        
        //On excute directement la requete
        $requete_mat_foo= $db->query($sql_mat_foo);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_mat_foo = $requete_mat_foo->fetch();

        $id_abrev_code = $affiche_mat_foo["id_code_mat_foo"];
        $descriptions = $affiche_mat_foo ["Descriptions"];
        
        //QUANTITE ADD
        $mat_foo_qt =  "mat_foo_qt-" . $id_mat_foo;

        $quantity_added = $_POST[$mat_foo_qt];

        //PRICE PAR QUANTITY
        $mat_foo_pr =  "mat_foo_pr-" . $id_mat_foo;

        $purchase_price = $_POST[$mat_foo_pr];

        $name_adding = $_SESSION["user"]["username"];



        //INSERTION
        if($quantity_added !="" ){
            if($purchase_price !=""){
        $sql_mat_foo = "INSERT INTO `flux_in` 
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
        '$id_mat_foo', '$id_abrev_code', '$descriptions', 
        '$quantity_added', '$purchase_price', 
        '$name_adding', 
        '0')";

        //On prerare la requete
        $query_mat_foo = $db->prepare($sql_mat_foo);
        //On execute la requete
        $query_mat_foo->execute();

        header("Location: index.php");

        }//Price n'est pas vide
    }//Quantte n'est pas vide
    }//CONSUMABLE
 
?>