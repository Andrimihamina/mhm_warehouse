<?php
    
    if($categories == "mat_foo_done-"){
        //CATEGORIES
        $categories = "MATERIALS LOGISTIC";
       //IDENTITY
        $id = str_replace("mat_foo_done-", "", $var_id);
        $sql_mat_foo = "SELECT * FROM `mat_foo_id` WHERE `id` = '$id'";
        $requete_mat_foo= $db->query($sql_mat_foo);
        $affiche_mat_foo = $requete_mat_foo->fetch();

        // ID
        $id_abrev_code = $affiche_mat_foo["id_code_mat_foo"];
        $descriptions = $affiche_mat_foo ["Descriptions"];
        
        //QUANTITE ADD
        $mat_foo_qt =  "mat_foo_qt-" . $id;
        $quantity_added = $_POST[$mat_foo_qt];

        //PRICE PAR QUANTITY
        $mat_foo_pr =  "mat_foo_pr-" . $id;
        $purchase_price = $_POST[$mat_foo_pr];

        // RESPONSIBLE
        $name_adding = $_SESSION["user"]["username"];

        require("../../sql/flux/inputs/register.php");
    }
 
?>