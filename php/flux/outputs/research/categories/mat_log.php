<?php
    if($categories == "mat_log_done-"){
        //CATEGORIES
        $categories = "Materials Logistics";

       //IDENTITY
        $id = str_replace("mat_log_done-", "", $var_id);
        $sql_mat_log = "SELECT * FROM `mat_log_id` WHERE `id` = $id";
        $requete_mat_log= $db->query($sql_mat_log);
        $affiche_mat_log = $requete_mat_log->fetch();

        // ID
        $id_abrev_code = $affiche_mat_log["id_code_mat_log"];
        $descriptions = $affiche_mat_log ["Descriptions"];
        
        //QUANTITE ADD
        $mat_log_qt =  "mat_log_qt-". $id;
        $quantity_out = $_POST[$mat_log_qt];

        // RESPONSIBLES
        $name_adding = $_SESSION["user"]["username"];

        // STOCK
        $sql_qt = "SELECT * FROM `mat_log_quantity` WHERE `id_mat_log` = $id";
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