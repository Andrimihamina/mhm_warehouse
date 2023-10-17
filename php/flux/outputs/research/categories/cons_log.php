<?php
    if($categories == "cos_log_done-"){
        //CATEGORIES
        $categories = "Consumables Logistics";

       //IDENTITY
        $id = str_replace("cos_log_done-", "", $var_id);
        $sql_cons_log = "SELECT * FROM `cons_log_id` WHERE `id` = $id";
        $requete_cons_log= $db->query($sql_cons_log);
        $affiche_cons_log = $requete_cons_log->fetch();

        // ID
        $id_abrev_code = $affiche_cons_log["id_code_cons_log"];
        $descriptions = $affiche_cons_log ["Descriptions"];
        
        //QUANTITE ADD
        $cons_log_qt =  "cos_log_qt-". $id;
        $quantity_out = $_POST[$cons_log_qt];

        // RESPONSIBLES
        $name_adding = $_SESSION["user"]["username"];

        // STOCK
        $sql_qt = "SELECT * FROM `cons_log_quantity` WHERE `id_cons_log` = $id";
        $requete_qt= $db->query($sql_qt);
        $affiche_qt = $requete_qt->fetch();
        // CURRENTLY STOCK
        $CurQt = $affiche_qt["stock"];
        // RESPONSIBLE OUTPUT WILL SEE IT

        $service_out = 2;

        if("$quantity_out" > "$CurQt"){
            $_SESSION["error_stock"] = ["Quantity not enouhg"];
            header("Location: ../../Layout/Flux/outputs_register.php");
            exit;}
        
        require("../../sql/flux/outputs/register.php");
        }
  
 
?>