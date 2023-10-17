<?php
foreach( $_POST as $cle =>$value )
{
    if ($value == "modify"){
        $var_id = "$cle";

        $id = str_replace("id-", "", $var_id);

if(!empty($_POST)){

    //POST n'est pas vide, on verifier que toutes les donnes sont presents

            //Operation_Cleaning
            $Operation_Cleaning = isSet($_POST["Operation_Cleaning-$id"]) ? 1 : 0;
            //Operation_Cooking
            $Operation_Cooking = isSet($_POST["Operation_Cooking-$id"]) ? 1 : 0;
            //Operation_Laundry
            $Operation_Laundry = isSet($_POST["Operation_Laundry-$id"]) ? 1 : 0; 
             /*
            ======================== INSERTION FROM =============
            */
            $sql_medicine_auth = "UPDATE `cons_med_aut_passive` SET `Operation_Cleaning` = '$Operation_Cleaning', `Operation_Cooking` = '$Operation_Cooking', `Operation_Laundry` = '$Operation_Laundry' WHERE `cons_med_aut_passive`.`id_cons_med` = '$id'";
            
            //On prerare la requete
            $query_medicine_auth = $db->prepare($sql_medicine_auth);
            //On execute la requete
            $query_medicine_auth->execute();

                }

                

            }    
            
}


?>