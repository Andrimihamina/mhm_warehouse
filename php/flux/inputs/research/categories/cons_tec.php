<?php
    
    if($categories == "cos_tec_done-"){
        //CATEGORIES
        $categories = "CONSUMBALES TECHNICAL";
       //IDENTITY
        $id = str_replace("cos_tec_done-", "", $var_id);
        $sql_cons_tec = "SELECT * FROM `cons_tec_id` WHERE `id` = '$id'";
        $requete_cons_tec= $db->query($sql_cons_tec);
        $affiche_cons_tec = $requete_cons_tec->fetch();

        // ID
        $id_abrev_code = $affiche_cons_tec["id_code_cons_tec"];
        $descriptions = $affiche_cons_tec ["Descriptions"];
        
        //QUANTITE ADD
        $cons_tec_qt =  "cons_tec_qt-" . $id;
        $quantity_added = $_POST[$cons_tec_qt];

        //PRICE PAR QUANTITY
        $cons_tec_pr =  "cons_tec_pr-" . $id;
        $purchase_price = $_POST[$cons_tec_pr];

        // RESPOBSIBLE
        $name_adding = $_SESSION["user"]["username"];
       
        require("../../sql/flux/inputs/register.php");
    }
 
?>