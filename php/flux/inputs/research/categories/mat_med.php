<?php
    
    if($categories == "mat_med_done-"){
        //CATEGORIES
        $categories = "MAT MEDICAL";
       //IDENTITY
        $id = str_replace("mat_med_done-", "", $var_id);
        $sql_mat_med = "SELECT * FROM `mat_med_id` WHERE `id` = '$id'";
        $requete_mat_med= $db->query($sql_mat_med);
        $affiche_mat_med = $requete_mat_med->fetch();

        // ID
        $id_abrev_code = $affiche_mat_med["id_code_mat_med"];
        $descriptions = $affiche_mat_med ["Descriptions"];
        
        //QUANTITE ADD
        $mat_med_qt =  "mat_med_qt-" . $id;
        $quantity_added = $_POST[$mat_med_qt];

        //PRICE PAR QUANTITY
        $mat_med_pr =  "mat_med_pr-" . $id;
        $purchase_price = $_POST[$mat_med_pr];

        // RESONSIBLES
        $name_adding = $_SESSION["user"]["username"];

        require("../../sql/flux/inputs/register.php");
    }
 
?>