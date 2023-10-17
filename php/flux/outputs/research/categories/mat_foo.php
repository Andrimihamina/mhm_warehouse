<?php
    if($categories == "mat_foo_done-"){
        //CATEGORIES
        $categories = "Materials Foods";

       //IDENTITY
        $id = str_replace("mat_foo_done-", "", $var_id);
        $sql_mat_foo = "SELECT * FROM `mat_foo_id` WHERE `id` = $id";
        $requete_mat_foo= $db->query($sql_mat_foo);
        $affiche_mat_foo = $requete_mat_foo->fetch();

        // ID
        $id_abrev_code = $affiche_mat_foo["id_code_mat_foo"];
        $descriptions = $affiche_mat_foo ["Descriptions"];
        
        //QUANTITE ADD
        $mat_foo_qt =  "mat_foo_qt-". $id;
        $quantity_out = $_POST[$mat_foo_qt];

        // RESPONSIBLES
        $name_adding = $_SESSION["user"]["username"];

        // STOCK
        $sql_qt = "SELECT * FROM `mat_foo_quantity` WHERE `id_mat_foo` = $id";
        $requete_qt= $db->query($sql_qt);
        $affiche_qt = $requete_qt->fetch();
        // CURRENTLY STOCK
        $CurQt = $affiche_qt["stock"];
        // RESPONSIBLE OUTPUT WILL SEE IT

        $service_out = 5;

        if("$quantity_out" > "$CurQt"){
            $_SESSION["error_stock"] = ["Quantity not enouhg"];
            header("Location: ../../Layout/Flux/outputs_register.php");
            exit;}
        
        require("../../sql/flux/outputs/register.php");
        }
  
 
?>