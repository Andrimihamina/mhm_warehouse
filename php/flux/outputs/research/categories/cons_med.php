<?php
    if($categories == "cos_med_done-"){
        //CATEGORIES
        $categories = "Consumables Medicals";

       //IDENTITY
        $id = str_replace("cos_med_done-", "", $var_id);
        $sql_cons_med = "SELECT * FROM `cons_med_id` WHERE `id` = $id";
        $requete_cons_med= $db->query($sql_cons_med);
        $affiche_cons_med = $requete_cons_med->fetch();

        // ID
        $id_abrev_code = $affiche_cons_med["id_code_cons_med"];
        $descriptions = $affiche_cons_med ["Descriptions"];
        
        //QUANTITE ADD
        $cons_med_qt =  "cos_med_qt-". $id;
        $quantity_out = $_POST[$cons_med_qt];

        // RESPONSIBLES
        $name_adding = $_SESSION["user"]["username"];

        // STOCK
        $sql_qt = "SELECT * FROM `cons_med_quantity` WHERE `id_cons_med` = $id";
        $requete_qt= $db->query($sql_qt);
        $affiche_qt = $requete_qt->fetch();
        // CURRENTLY STOCK
        $CurQt = $affiche_qt["stock"];
        // RESPONSIBLE OUTPUT WILL SEE IT

        $service_out = 1;

        if("$quantity_out" > "$CurQt"){
            $_SESSION["error_stock"] = ["Quantity not enouhg"];
            header("Location: ../../Layout/Flux/outputs_register.php");
            exit;}
        
        require("../../sql/flux/outputs/register.php");
        }
  
 
?>