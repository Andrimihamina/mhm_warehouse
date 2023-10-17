<?php
    if($categories == "mat_tec_done-"){
        //CATEGORIES
        $categories = "Materials Technicals";

       //IDENTITY
        $id = str_replace("mat_tec_done-", "", $var_id);
        $sql_mat_tec = "SELECT * FROM `mat_tec_id` WHERE `id` = $id";
        $requete_mat_tec= $db->query($sql_mat_tec);
        $affiche_mat_tec = $requete_mat_tec->fetch();

        // ID
        $id_abrev_code = $affiche_mat_tec["id_code_mat_tec"];
        $descriptions = $affiche_mat_tec ["Descriptions"];
        
        //QUANTITE ADD
        $mat_tec_qt =  "mat_tec_qt-". $id;
        $quantity_out = $_POST[$mat_tec_qt];

        // RESPONSIBLES
        $name_adding = $_SESSION["user"]["username"];

        // STOCK
        $sql_qt = "SELECT * FROM `mat_tec_quantity` WHERE `id_mat_tec` = $id";
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