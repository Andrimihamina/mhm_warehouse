<?php
    if($categories == "mat_itc_done-"){
        //CATEGORIES
        $categories = "Materials IT & C";

       //IDENTITY
        $id = str_replace("mat_itc_done-", "", $var_id);
        $sql_mat_itc = "SELECT * FROM `mat_itc_id` WHERE `id` = $id";
        $requete_mat_itc= $db->query($sql_mat_itc);
        $affiche_mat_itc = $requete_mat_itc->fetch();

        // ID
        $id_abrev_code = $affiche_mat_itc["id_code_mat_itc"];
        $descriptions = $affiche_mat_itc ["Descriptions"];
        
        //QUANTITE ADD
        $mat_itc_qt =  "mat_itc_qt-". $id;
        $quantity_out = $_POST[$mat_itc_qt];

        // RESPONSIBLES
        $name_adding = $_SESSION["user"]["username"];

        // STOCK
        $sql_qt = "SELECT * FROM `mat_itc_quantity` WHERE `id_mat_itc` = $id";
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