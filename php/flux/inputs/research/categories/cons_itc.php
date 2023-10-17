<?php  
    if($categories == "cos_itc_done-"){
        //CATEGORIES
        $categories = "CONSUMABLES ITC";
        //IDENTITY
        $id = str_replace("cos_itc_done-", "", $var_id);
        $sql_cons_itc = "SELECT * FROM `cons_itc_id` WHERE `id` = '$id'";
        $requete_cons_itc= $db->query($sql_cons_itc);
        $affiche_cons_itc = $requete_cons_itc->fetch();

        // ID
        $id_abrev_code = $affiche_cons_itc["id_code_cons_itc"];
        $descriptions = $affiche_cons_itc ["Descriptions"];
        
        //QUANTITE ADD
        $cons_itc_qt =  "cons_itc_qt-" . $id;
        $quantity_added = $_POST[$cons_itc_qt];

        //PRICE PAR QUANTITY
        $cons_itc_pr =  "cons_itc_pr-" . $id;
        $purchase_price = $_POST[$cons_itc_pr];

        // RESPONSIBLE
        $name_adding = $_SESSION["user"]["username"];

        require("../../sql/flux/inputs/register.php");
    }
?>