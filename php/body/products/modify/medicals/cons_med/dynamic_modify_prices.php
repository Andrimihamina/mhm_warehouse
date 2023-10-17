<?php
foreach( $_POST as $cle =>$value )
{
    if ($value == "modify"){
        $var_id = "$cle";

        $id = str_replace("id-", "", $var_id);

if(!empty($_POST)){

    //POST n'est pas vide, on verifier que toutes les donnes sont presents
             
            $price = strip_tags($_POST["pr-$id"]);
            $_SESSION["error"] =[];
           
            if($price != "")
                {
                   
            /*UPDATE*/
            $sql_medicine_prices= "UPDATE `cons_med_price` SET `price` = '$price' WHERE `cons_med_price`.`id_cons_med` = '$id'";

            //On prerare la requete
            $query_medicine_price= $db->prepare($sql_medicine_prices);
            //On execute la requete
           $query_medicine_price->execute();

                }
            }   
        }
            
}


?>