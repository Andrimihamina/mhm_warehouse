<?php
    if($categories == "mat_med_done-"){
        //CATEGORIES
        $categories = "Materials Medicals";

       //IDENTITY
        $id = str_replace("mat_med_done-", "", $var_id);
        $sql_mat_med = "SELECT * FROM `mat_med_id` WHERE `id` = $id";
        $requete_mat_med= $db->query($sql_mat_med);
        $affiche_mat_med = $requete_mat_med->fetch();

        // ID
        $id_abrev_code = $affiche_mat_med["id_code_mat_med"];
        $descriptions = $affiche_mat_med ["Descriptions"];
        
        //QUANTITE ADD
        $mat_med_qt =  "mat_med_qt-". $id;
        $quantity_out = $_POST[$mat_med_qt];

        // RESPONSIBLES
        $name_adding = $_SESSION["user"]["username"];

        // STOCK
        $sql_qt = "SELECT * FROM `mat_med_quantity` WHERE `id_mat_med` = $id";
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