<?php
    
    if($categories == "mat_tec_done-"){
        //CATEGORIES
        $categories = "MATERIALS TECHNICAL";
       //IDENTITY
        $id = str_replace("mat_tec_done-", "", $var_id);
        $sql_mat_tec = "SELECT * FROM `mat_tec_id` WHERE `id` = '$id'";
        $requete_mat_tec= $db->query($sql_mat_tec);
        $affiche_mat_tec = $requete_mat_tec->fetch();

        // ID
        $id_abrev_code = $affiche_mat_tec["id_code_mat_tec"];
        $descriptions = $affiche_mat_tec ["Descriptions"];
        
        //QUANTITE ADD
        $mat_tec_qt =  "mat_tec_qt-" . $id;
        $quantity_added = $_POST[$mat_tec_qt];

        //PRICE PAR QUANTITY
        $mat_tec_pr =  "mat_tec_pr-" . $id;
        $purchase_price = $_POST[$mat_tec_pr];

        // RESPONSIBLES
        $name_adding = $_SESSION["user"]["username"];

        require("../../sql/flux/inputs/register.php");
    }
 
?>