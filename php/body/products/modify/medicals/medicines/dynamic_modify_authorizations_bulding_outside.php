<?php
foreach( $_POST as $cle =>$value )
{
    if ($value == "modify"){
        $var_id = "$cle";

        $id = str_replace("id-", "", $var_id);

if(!empty($_POST)){

    //POST n'est pas vide, on verifier que toutes les donnes sont presents

            //bulding_outside_technical
            $bulding_outside_technical = isSet($_POST["bulding_outside_technical-$id"]) ? 1 : 0;
            //bulding_outside_canteen
            $bulding_outside_canteen = isSet($_POST["bulding_outside_canteen-$id"]) ? 1 : 0;
            //bulding_outside_yard
            $bulding_outside_yard = isSet($_POST["bulding_outside_yard-$id"]) ? 1 : 0; 
            //bulding_outside_villa_kb
            $bulding_outside_villa_kb = isSet($_POST["bulding_outside_villa_kb-$id"]) ? 1 : 0;
            //bulding_outside_security
            $bulding_outside_security = isSet($_POST["bulding_outside_security-$id"]) ? 1 : 0;

           
   
            /*
            ======================== INSERTION FROM =============
            */
            $sql_medicine_auth = "UPDATE `medicine_authorizations_passive` SET `bulding_outside_technical` = '$bulding_outside_technical', `bulding_outside_canteen` = '$bulding_outside_canteen', `bulding_outside_yard` = '$bulding_outside_yard', `bulding_outside_villa_kb` = '$bulding_outside_villa_kb', `bulding_outside_security` = '$bulding_outside_security' WHERE `medicine_authorizations_passive`.`id_med` = '$id'";
            
            //On prerare la requete
            $query_medicine_auth = $db->prepare($sql_medicine_auth);
            //On execute la requete
            $query_medicine_auth->execute();
           

                }

                

            }    
            
}


?>