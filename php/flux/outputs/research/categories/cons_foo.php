<?php
    if($categories == "cos_foo_done-"){
        //CATEGORIES
        $categories = "Consumables Foods";

       //IDENTITY
        $id = str_replace("cos_foo_done-", "", $var_id);
        $sql_cons_foo = "SELECT * FROM `cons_foo_id` WHERE `id` = $id";
        $requete_cons_foo= $db->query($sql_cons_foo);
        $affiche_cons_foo = $requete_cons_foo->fetch();

        // ID
        $id_abrev_code = $affiche_cons_foo["id_code_cons_foo"];
        $descriptions = $affiche_cons_foo ["Descriptions"];
        
        //QUANTITE ADD
        $cons_foo_qt =  "cos_foo_qt-". $id;
        $quantity_out = $_POST[$cons_foo_qt];

        // RESPONSIBLES
        $name_adding = $_SESSION["user"]["username"];

        // STOCK
        $sql_qt = "SELECT * FROM `cons_foo_quantity` WHERE `id_cons_foo` = $id";
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