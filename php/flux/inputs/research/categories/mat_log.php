<?php
    
    if($categories == "mat_log_done-"){
        //CATEGORIES
        $categories = "MAT LOGISTIC";
       //IDENTITY
        $id = str_replace("mat_log_done-", "", $var_id);
        $sql_mat_log = "SELECT * FROM `mat_log_id` WHERE `id` = '$id'";
        $requete_mat_log= $db->query($sql_mat_log);
        $affiche_mat_log = $requete_mat_log->fetch();

        // ID
        $id_abrev_code = $affiche_mat_log["id_code_mat_log"];
        $descriptions = $affiche_mat_log ["Descriptions"];
        
        //QUANTITE ADD
        $mat_log_qt =  "mat_log_qt-" . $id;
        $quantity_added = $_POST[$mat_log_qt];

        //PRICE PAR QUANTITY
        $mat_log_pr =  "mat_log_pr-" . $id;
        $purchase_price = $_POST[$mat_log_pr];

        // RESPONSIBLES
        $name_adding = $_SESSION["user"]["username"];


        require("../../sql/flux/inputs/register.php");
    }
 
?>