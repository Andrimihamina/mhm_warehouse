<?php
foreach( $_POST as $cle =>$value )
{
    if ($value == "modify"){
        $var_id = "$cle";

        $id = str_replace("id-", "", $var_id);

if(!empty($_POST)){

    //POST n'est pas vide, on verifier que toutes les donnes sont presents

            //technical_technical
            $technical_technical = isSet($_POST["technical_technical-$id"]) ? 1 : 0;
            //technical_Biomed
            $technical_Biomed = isSet($_POST["technical_Biomed-$id"]) ? 1 : 0;
            //technical_Mechanical
            $technical_Mechanical = isSet($_POST["technical_Mechanical-$id"]) ? 1 : 0; 
             /*
            ======================== INSERTION FROM =============
            */
            $sql_medicine_auth = "UPDATE `cons_med_aut_passive` SET `technical_technical` = '$technical_technical', `technical_Biomed` = '$technical_Biomed', `technical_Mechanical` = '$technical_Mechanical' WHERE `cons_med_aut_passive`.`id_cons_med` = '$id'";
            
            //On prerare la requete
            $query_medicine_auth = $db->prepare($sql_medicine_auth);
            //On execute la requete
            $query_medicine_auth->execute();

                }

                

            }    
            
}


?>