<?php
foreach( $_POST as $cle =>$value )
{
    if ($value == "modify"){
        $var_id = "$cle";

        $id = str_replace("id-", "", $var_id);

if(!empty($_POST)){

    //POST n'est pas vide, on verifier que toutes les donnes sont presents

            //admin_admin
            $admin_admin = isSet($_POST["admin_admin-$id"]) ? 1 : 0;
            //admin_logistic
            $admin_logistic = isSet($_POST["admin_logistic-$id"]) ? 1 : 0;
            //admin_finance
            $admin_finance = isSet($_POST["admin_finance-$id"]) ? 1 : 0; 
            //admin_it
            $admin_it = isSet($_POST["admin_it-$id"]) ? 1 : 0;
            //admin_qm
            $admin_qm = isSet($_POST["admin_qm-$id"]) ? 1 : 0;
            //admin_communication
            $admin_communication = isSet($_POST["admin_communication-$id"]) ? 1 : 0;
           
   
            /*
            ======================== INSERTION FROM =============
            */
            $sql_medicine_auth = "UPDATE `cons_med_aut_passive` SET `admin_admin` = '$admin_admin', `admin_logistic` = '$admin_logistic', `admin_finance` = '$admin_finance', `admin_it` = '$admin_it', `admin_qm` = '$admin_qm', `admin_communication` = '$admin_communication' WHERE `cons_med_aut_passive`.`id_cons_med` = '$id'";
            
            //On prerare la requete
            $query_medicine_auth = $db->prepare($sql_medicine_auth);
            //On execute la requete
            $query_medicine_auth->execute();
           

                }

                

            }    
            
}


?>