<?php
    if($categories == "cos_log_done-"){
        //CATEGORIES
        $categories = "CONSUMABLE LOGISTIC";
       //IDENTITY
        $id = str_replace("cos_log_done-", "", $var_id);
        $sql_cons_log = "SELECT * FROM `cons_log_id` WHERE `id` = '$id'";
        $requete_cons_log= $db->query($sql_cons_log);
        $affiche_cons_log = $requete_cons_log->fetch();

        // ID
        $id_abrev_code = $affiche_cons_log["id_code_cons_log"];
        $descriptions = $affiche_cons_log ["Descriptions"];
        
        //QUANTITE ADD
        $cons_log_qt =  "cons_log_qt-" . $id;
        $quantity_added = $_POST[$cons_log_qt];

        //PRICE PAR QUANTITY
        $cons_log_pr =  "cons_log_pr-" . $id;
        $purchase_price = $_POST[$cons_log_pr];

        // RESPONSIBLE
        $name_adding = $_SESSION["user"]["username"];

        require("../../sql/flux/inputs/register.php");
    }
 
?>