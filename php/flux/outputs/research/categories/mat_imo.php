<?php
    if($categories == "mat_imo_done-"){
        //CATEGORIES
        $categories = "Materials Real Estate";

       //IDENTITY
        $id = str_replace("mat_imo_done-", "", $var_id);
        $sql_mat_imo = "SELECT * FROM `mat_imo_id` WHERE `id` = $id";
        $requete_mat_imo= $db->query($sql_mat_imo);
        $affiche_mat_imo = $requete_mat_imo->fetch();

        // ID
        $id_abrev_code = $affiche_mat_imo["id_code_mat_imo"];
        $descriptions = $affiche_mat_imo ["Descriptions"];
        
        //QUANTITE ADD
        $mat_imo_qt =  "mat_imo_qt-". $id;
        $quantity_out = $_POST[$mat_imo_qt];

        // RESPONSIBLES
        $name_adding = $_SESSION["user"]["username"];

        // STOCK
        $sql_qt = "SELECT * FROM `mat_imo_quantity` WHERE `id_mat_imo` = $id";
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