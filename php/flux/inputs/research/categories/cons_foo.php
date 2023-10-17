<?php
    if($categories == "cos_foo_done-"){
        //CATEGORIES
        $categories = "CONSUMABLES FOODS";
       //IDENTITY
        $id = str_replace("cos_foo_done-", "", $var_id);
        $sql_cons_foo = "SELECT * FROM `cons_foo_id` WHERE `id` = '$id'";       
        $requete_cons_foo= $db->query($sql_cons_foo);
        $affiche_cons_foo = $requete_cons_foo->fetch();

        // ID
        $id_abrev_code = $affiche_cons_foo["id_code_cons_foo"];
        $descriptions = $affiche_cons_foo ["Descriptions"];
        
        //QUANTITE ADD
        $cons_foo_qt =  "cons_foo_qt-" . $id;
        $quantity_added = $_POST[$cons_foo_qt];

        //PRICE PAR QUANTITY
        $cons_foo_pr =  "cons_foo_pr-" . $id;
        $purchase_price = $_POST[$cons_foo_pr];

        // ID RESPONSIBLE
        $name_adding = $_SESSION["user"]["username"];  

        require("../../sql/flux/inputs/register.php");
    }
 
?>