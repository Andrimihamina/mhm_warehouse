<?php
foreach( $_POST as $cle =>$value )
{
    if ($value == "modify"){
        $var_id = "$cle";

        $id = str_replace("id-", "", $var_id);

if(!empty($_POST)){

    //POST n'est pas vide, on verifier que toutes les donnes sont presents

            //technical_storage
            $technical_storage = isSet($_POST["technical_storage-$id"]) ? 1 : 0;
            //medical_storage
            $medical_storage = isSet($_POST["medical_storage-$id"]) ? 1 : 0;
            //no_medical_storage
            $no_medical_storage = isSet($_POST["no_medical_storage-$id"]) ? 1 : 0;
   
            /*
            ======================== INSERTION FROM =============
            */
            $sql_medicine_auth = "UPDATE `medicine_authorizations_temporary` SET `technical_storage` = '$technical_storage', `medical_storage` = '$medical_storage', `no_medical_storage` = '$no_medical_storage' WHERE `medicine_authorizations_temporary`.`id_med` = '$id'";
            
            //On prerare la requete
            $query_medicine_auth = $db->prepare($sql_medicine_auth);
            //On execute la requete
            $query_medicine_auth->execute();
           

                }

                

            }    
            
}


?>