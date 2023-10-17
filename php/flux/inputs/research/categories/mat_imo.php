<?php
    
    if($categories == "mat_imo_done-"){
        //CATEGORIES
        $categories = "MATERIALS REAL ESTATE";
       //IDENTITY
        $id = str_replace("mat_imo_done-", "", $var_id);
        $sql_mat_imo = "SELECT * FROM `mat_imo_id` WHERE `id` = '$id'";
        $requete_mat_imo= $db->query($sql_mat_imo);
        $affiche_mat_imo = $requete_mat_imo->fetch();

        // ID
        $id_abrev_code = $affiche_mat_imo["id_code_mat_imo"];
        $descriptions = $affiche_mat_imo ["Descriptions"];
        
        //QUANTITE ADD
        $mat_imo_qt =  "mat_imo_qt-" . $id;
        $quantity_added = $_POST[$mat_imo_qt];

        //PRICE PAR QUANTITY
        $mat_imo_pr =  "mat_imo_pr-" . $id;
        $purchase_price = $_POST[$mat_imo_pr];

        // RESPONSIBLES
        $name_adding = $_SESSION["user"]["username"];

        require("../../sql/flux/inputs/register.php");
    }
 
?>