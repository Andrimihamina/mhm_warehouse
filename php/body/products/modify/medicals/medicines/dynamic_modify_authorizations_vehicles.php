<?php
foreach( $_POST as $cle =>$value )
{
    if ($value == "modify"){
        $var_id = "$cle";

        $id = str_replace("id-", "", $var_id);

if(!empty($_POST)){

    //POST n'est pas vide, on verifier que toutes les donnes sont presents

            //vehicles_isuzu_bleu
            $vehicles_isuzu_bleu = isSet($_POST["vehicles_isuzu_bleu-$id"]) ? 1 : 0;
            //vehicles_isuzu_green
            $vehicles_isuzu_green = isSet($_POST["vehicles_isuzu_green-$id"]) ? 1 : 0;
            //vehicles_galopper
            $vehicles_galopper = isSet($_POST["vehicles_galopper-$id"]) ? 1 : 0; 
            //vehicles_daihatsu
            $vehicles_daihatsu = isSet($_POST["vehicles_daihatsu-$id"]) ? 1 : 0;
            //vehicles_prado
            $vehicles_prado = isSet($_POST["vehicles_prado-$id"]) ? 1 : 0;
            //vehicles_starex
            $vehicles_starex = isSet($_POST["vehicles_starex-$id"]) ? 1 : 0;
            //vehicles_sprinter
            $vehicles_sprinter = isSet($_POST["vehicles_sprinter-$id"]) ? 1 : 0;
            //vehicles_motorbike_honda
            $vehicles_motorbike_honda = isSet($_POST["vehicles_motorbike_honda-$id"]) ? 1 : 0;
            //vehicles_scooter_bleu
            $vehicles_scooter_bleu = isSet($_POST["vehicles_scooter_bleu-$id"]) ? 1 : 0;
            //vehicles_others
            $vehicles_others = isSet($_POST["vehicles_others-$id"]) ? 1 : 0;
           
   
            /*
            ======================== INSERTION FROM =============
            */
            $sql_medicine_auth = "UPDATE `medicine_authorizations_passive` SET `vehicles_isuzu_bleu` = '$vehicles_isuzu_bleu', `vehicles_isuzu_green` = '$vehicles_isuzu_green', `vehicles_galopper` = '$vehicles_galopper', `vehicles_daihatsu` = '$vehicles_daihatsu', `vehicles_prado` = '$vehicles_prado', `vehicles_starex` = '$vehicles_starex', `vehicles_sprinter` = '$vehicles_sprinter', `vehicles_motorbike_honda` = '$vehicles_motorbike_honda', `vehicles_scooter_bleu` = '$vehicles_scooter_bleu', `vehicles_others` = '$vehicles_others' WHERE `medicine_authorizations_passive`.`id_med` = '$id'";
            
            //On prerare la requete
            $query_medicine_auth = $db->prepare($sql_medicine_auth);
            //On execute la requete
            $query_medicine_auth->execute();
           

                }

                

            }    
            
}


?>