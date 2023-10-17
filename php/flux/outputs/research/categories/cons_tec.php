<?php
    if($categories == "cos_tec_done-"){
        //CATEGORIES
        $categories = "Consumables Technicals";

       //IDENTITY
        $id = str_replace("cos_tec_done-", "", $var_id);
        $sql_cons_tec = "SELECT * FROM `cons_tec_id` WHERE `id` = $id";
        $requete_cons_tec= $db->query($sql_cons_tec);
        $affiche_cons_tec = $requete_cons_tec->fetch();

        // ID
        $id_abrev_code = $affiche_cons_tec["id_code_cons_tec"];
        $descriptions = $affiche_cons_tec ["Descriptions"];
        
        //QUANTITE ADD
        $cons_tec_qt =  "cos_tec_qt-". $id;
        $quantity_out = $_POST[$cons_tec_qt];

        // RESPONSIBLES
        $name_adding = $_SESSION["user"]["username"];

        // STOCK
        $sql_qt = "SELECT * FROM `cons_tec_quantity` WHERE `id_cons_tec` = $id";
        $requete_qt= $db->query($sql_qt);
        $affiche_qt = $requete_qt->fetch();
        // CURRENTLY STOCK
        $CurQt = $affiche_qt["stock"];
        // RESPONSIBLE OUTPUT WILL SEE IT

        $service_out = 3;

        if("$quantity_out" > "$CurQt"){
            $_SESSION["error_stock"] = ["Quantity not enouhg"];
            header("Location: ../../Layout/Flux/outputs_register.php");
            exit;}
        
        require("../../sql/flux/outputs/register.php");
        }
  
 
?>