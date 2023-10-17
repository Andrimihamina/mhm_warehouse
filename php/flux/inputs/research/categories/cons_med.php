<?php  
    if($categories == "cos_med_done-"){
        //CATEGORIES
        $categories = "CONSUMABLES MEDICAL";
        //IDENTITY
        $id = str_replace("cos_med_done-", "", $var_id);
        $sql_cons_med = "SELECT * FROM `cons_med_id` WHERE `id` = '$id'";
        $requete_cons_med= $db->query($sql_cons_med);
        $affiche_cons_med = $requete_cons_med->fetch();

        // ID
        $id_abrev_code = $affiche_cons_med["id_code_cons_med"];
        $descriptions = $affiche_cons_med ["Descriptions"];
        
        //QUANTITE ADD
        $cons_med_qt =  "cons_med_qt-" . $id;
        $quantity_added = $_POST[$cons_med_qt];

        //PRICE PAR QUANTITY
        $cons_med_pr =  "cons_med_pr-" . $id;
        $purchase_price = $_POST[$cons_med_pr];

        // RESPONSIBLES
        $name_adding = $_SESSION["user"]["username"];

        require("../../sql/flux/inputs/register.php");
    }
?>