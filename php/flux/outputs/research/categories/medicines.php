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
        $quantity_out = $_POST[$med_med_qt];

        // RESPONSIBLES
        $name_adding = $_SESSION["user"]["username"];

        // STOCK
        $sql_qt = "SELECT * FROM `medicine_quantity` WHERE `id_med` = $id";
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