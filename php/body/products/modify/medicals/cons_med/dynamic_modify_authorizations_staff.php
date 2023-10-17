<?php
foreach( $_POST as $cle =>$value )
{
    if ($value == "modify"){
        $var_id = "$cle";

        $id = str_replace("id-", "", $var_id);

if(!empty($_POST)){

    //POST n'est pas vide, on verifier que toutes les donnes sont presents

            //HR
            $HR = isSet($_POST["HR-$id"]) ? 1 : 0;
   
            /*
            ======================== INSERTION FROM =============
            */
            $sql_medicine_auth = "UPDATE `cons_med_aut_passive` SET `HR` = '$HR' WHERE `cons_med_aut_passive`.`id_cons_med` = '$id'";
            
            //On prerare la requete
            $query_medicine_auth = $db->prepare($sql_medicine_auth);
            //On execute la requete
            $query_medicine_auth->execute();
           

                }

                

            }    
            
}


?>