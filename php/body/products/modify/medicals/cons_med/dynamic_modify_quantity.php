<?php
foreach( $_POST as $cle =>$value )
{
    if ($value == "modify"){
        $var_id = "$cle";

        $id = str_replace("id-", "", $var_id);

if(!empty($_POST)){

    //POST n'est pas vide, on verifier que toutes les donnes sont presents
             
            $quantity_minimal = strip_tags($_POST["quantity_minimal-$id"]);
            $_SESSION["error"] =[];
            $quantity_avarage = strip_tags($_POST["quantity_avarage-$id"]);
            $_SESSION["error"] =[];
            $stock = strip_tags($_POST["stock-$id"]);
            $_SESSION["error"] =[];
           
            if($stock != "")
                {
                   
            /*UPDATE*/
            $sql_medicine_stock= "UPDATE `cons_med_quantity` SET `quantity_minimal` = '$quantity_minimal', `quantity_avarage` = '$quantity_avarage', `stock` = '$stock' WHERE `cons_med_quantity`.`id_cons_med` = '$id'";

            //On prerare la requete
            $query_medicine_stock= $db->prepare($sql_medicine_stock);
            //On execute la requete
           $query_medicine_stock->execute();

                }
                
            } 
            
        }
            
}


?>