<?php
    if($categories == "cos_itc_done-"){
        //CATEGORIES
        $categories = "Consumables IT & C";

       //IDENTITY
        $id = str_replace("cos_itc_done-", "", $var_id);
        $sql_cons_itc = "SELECT * FROM `cons_itc_id` WHERE `id` = $id";
        $requete_cons_itc= $db->query($sql_cons_itc);
        $affiche_cons_itc = $requete_cons_itc->fetch();

        // ID
        $id_abrev_code = $affiche_cons_itc["id_code_cons_itc"];
        $descriptions = $affiche_cons_itc ["Descriptions"];
        
        //QUANTITE ADD
        $cons_itc_qt =  "cos_itc_qt-". $id;
        $quantity_out = $_POST[$cons_itc_qt];

        // RESPONSIBLES
        $name_adding = $_SESSION["user"]["username"];

        // STOCK
        $sql_qt = "SELECT * FROM `cons_itc_quantity` WHERE `id_cons_itc` = $id";
        $requete_qt= $db->query($sql_qt);
        $affiche_qt = $requete_qt->fetch();
        // CURRENTLY STOCK
        $CurQt = $affiche_qt["stock"];
        // RESPONSIBLE OUTPUT WILL SEE IT

        $service_out = 4;

        if("$quantity_out" > "$CurQt"){
            $_SESSION["error_stock"] = ["Quantity not enouhg"];
            header("Location: ../../Layout/Flux/outputs_register.php");
            exit;}
        
        require("../../sql/flux/outputs/register.php");
        }
  
 
?>