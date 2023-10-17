<?php
foreach( $_POST as $cle =>$value )
{
    if ($value == "modify"){
        $var_id = "$cle";

        $id = str_replace("id-", "", $var_id);

if(!empty($_POST)){

    //POST n'est pas vide, on verifier que toutes les donnes sont presents

            //o_therapy
            $o_therapy = isSet($_POST["o_therapy-$id"]) ? 1 : 0;
            //german_docs
            $german_docs = isSet($_POST["german_docs-$id"]) ? 1 : 0;
            //eye
            $eye = isSet($_POST["eye-$id"]) ? 1 : 0; 
            //external_dermathology
            $external_dermathology = isSet($_POST["external_dermathology-$id"]) ? 1 : 0;
            //external_others
            $external_others = isSet($_POST["external_others-$id"]) ? 1 : 0;
           
   
            /*
            ======================== INSERTION FROM =============
            */
            $sql_medicine_auth = "UPDATE `cons_med_aut_active` SET `o_therapy` = '$o_therapy ', `german_docs` = '$german_docs ', `eye` = '$eye', `external_dermathology` = '$external_dermathology', `external_others` = '$external_others' WHERE `cons_med_aut_active`.`id_cons_med` = '$id'";
            
            //On prerare la requete
            $query_medicine_auth = $db->prepare($sql_medicine_auth);
            //On execute la requete
            $query_medicine_auth->execute();
           

                }

                

            }    
            
}


?>