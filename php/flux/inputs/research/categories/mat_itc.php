<?php
    
    if($categories == "mat_itc_done-"){
        //CATEGORIES
        $categories = "MATERIALS ITC";
       //IDENTITY
        $id = str_replace("mat_itc_done-", "", $var_id);
        $sql_mat_itc = "SELECT * FROM `mat_itc_id` WHERE `id` = '$id'";
        $requete_mat_itc= $db->query($sql_mat_itc);
        $affiche_mat_itc = $requete_mat_itc->fetch();

        // ID
        $id_abrev_code = $affiche_mat_itc["id_code_mat_itc"];
        $descriptions = $affiche_mat_itc ["Descriptions"];
        
        //QUANTITE ADD
        $mat_itc_qt =  "mat_itc_qt-" . $id;
        $quantity_added = $_POST[$mat_itc_qt];

        //PRICE PAR QUANTITY
        $mat_itc_pr =  "mat_itc_pr-" . $id;
        $purchase_price = $_POST[$mat_itc_pr];

        // RESPONSIBLES
        $name_adding = $_SESSION["user"]["username"];

        require("../../sql/flux/inputs/register.php");
    }
 
?>