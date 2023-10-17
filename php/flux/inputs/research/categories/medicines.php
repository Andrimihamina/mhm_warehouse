<?php
    
    if($categories == "med_med_done-"){
        //CATEGORIES
        $categories = "Medicines";
       //IDENTITY
        $id = str_replace("med_med_done-", "", $var_id);
        $sql_med_med = "SELECT * FROM `medicine_id` WHERE `id` = $id";
        $requete_med_med= $db->query($sql_med_med);
        $affiche_med_med = $requete_med_med->fetch();

        // ID
        $id_abrev_code = $affiche_med_med["id_code_med"];
        $descriptions = $affiche_med_med ["Descriptions"];
        
        //QUANTITE ADD
        $med_med_qt =  "med_med_qt-" . $id;
        $quantity_added = $_POST[$med_med_qt];

        //PRICE PAR QUANTITY
        $med_med_pr =  "med_med_pr-" . $id;
        $purchase_price = $_POST[$med_med_pr];

        // RESPONSIBLES
        $name_adding = $_SESSION["user"]["username"];

        require("../../sql/flux/inputs/register.php");
    }
 
?>