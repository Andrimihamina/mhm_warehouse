<?php
    
    if($categories == "cos_foo_done-"){
        //CATEGORIES
        $categories = "CONS FOODSs";
       //IDENTITY
        $id_cons_foo = str_replace("cos_foo_done-", "", $var_id);
        
        $sql_cons_foo = "SELECT * FROM `cons_foo_id` WHERE `id` = '$id_cons_foo'";
                        
        //On excute directement la requete
        $requete_cons_foo= $db->query($sql_cons_foo);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_cons_foo = $requete_cons_foo->fetch();

        $id_abrev_code = $affiche_cons_foo["id_code_cons_foo"];
        $descriptions = $affiche_cons_foo ["Descriptions"];
        
        //QUANTITE ADD
        $cons_foo_qt =  "cons_foo_qt-" . $id_cons_foo;

        $quantity_added = $_POST[$cons_foo_qt];

        //PRICE PAR QUANTITY
        $cons_foo_pr =  "cons_foo_pr-" . $id_cons_foo;

        $purchase_price = $_POST[$cons_foo_pr];

        $name_adding = $_SESSION["user"]["username"];



        //INSERTION
        if($quantity_added !="" ){
            if($purchase_price !=""){
        $sql_cons_foo = "INSERT INTO `flux_in` 
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
        '$id_cons_foo', '$id_abrev_code', '$descriptions', 
        '$quantity_added', '$purchase_price', 
        '$name_adding', 
        '0')";

        //On prerare la requete
        $query_cons_foo = $db->prepare($sql_cons_foo);
        //On execute la requete
        $query_cons_foo->execute();

        header("Location: index.php");

        }//Price n'est pas vide
    }//Quantte n'est pas vide
    }//MATERIALS
 
?>