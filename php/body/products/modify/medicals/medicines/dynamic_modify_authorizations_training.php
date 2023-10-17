<?php
foreach( $_POST as $cle =>$value )
{
    if ($value == "modify"){
        $var_id = "$cle";

        $id = str_replace("id-", "", $var_id);

if(!empty($_POST)){

    //POST n'est pas vide, on verifier que toutes les donnes sont presents

    // IN
            //training_internal_admin
            $training_internal_admin = isSet($_POST["training_internal_admin-$id"]) ? 1 : 0;
            //training_internal_medical
            $training_internal_medical = isSet($_POST["training_internal_medical-$id"]) ? 1 : 0;
            //training_internal_social
            $training_internal_social = isSet($_POST["training_internal_social-$id"]) ? 1 : 0; 
            //training_internal_technical
            $training_internal_technical = isSet($_POST["training_internal_technical-$id"]) ? 1 : 0; 
    // EXT
            //training_external_admin
            $training_external_admin = isSet($_POST["training_external_admin-$id"]) ? 1 : 0;
            //training_external_medical
            $training_external_medical = isSet($_POST["training_external_medical-$id"]) ? 1 : 0;
            //training_external_social
            $training_external_social = isSet($_POST["training_external_social-$id"]) ? 1 : 0;
            //training_external_technical
            $training_external_technical = isSet($_POST["training_external_technical-$id"]) ? 1 : 0;
        
            /*
            ======================== INSERTION FROM =============
            */
            $sql_medicine_auth_mobile_med = "UPDATE `medicine_authorizations_active` SET  `training_internal_admin` = '$training_internal_admin', `training_internal_medical` = '$training_internal_medical', `training_internal_social` = '$training_internal_social', `training_internal_technical` = '$training_internal_technical', `training_external_admin` = '$training_external_admin', `training_external_medical` = '$training_external_medical', `training_external_social` = '$training_external_social', `training_external_technical` = '$training_external_technical' WHERE `medicine_authorizations_active`.`id_med` = '$id'";
            //On prerare la requete
            $query_medicine_auth_mobile_med = $db->prepare($sql_medicine_auth_mobile_med);
            //On execute la requete
            $query_medicine_auth_mobile_med->execute();
           

                }

                

            }    
            
}


?>