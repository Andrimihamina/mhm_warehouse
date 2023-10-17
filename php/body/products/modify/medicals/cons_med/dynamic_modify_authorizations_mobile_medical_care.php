<?php
foreach( $_POST as $cle =>$value )
{
    if ($value == "modify"){
        $var_id = "$cle";

        $id = str_replace("id-", "", $var_id);

if(!empty($_POST)){

    //POST n'est pas vide, on verifier que toutes les donnes sont presents

            //ulm
            $ulm = isSet($_POST["ulm-$id"]) ? 1 : 0;
            //midmob
            $midmob = isSet($_POST["midmob-$id"]) ? 1 : 0;
            //detmob
            $detmob = isSet($_POST["detmob-$id"]) ? 1 : 0;
            //ambulance_1
            $ambulance_1 = isSet($_POST["ambulance_1-$id"]) ? 1 : 0;
            //ambulance_2
            $ambulance_2 = isSet($_POST["ambulance_2-$id"]) ? 1 : 0;
            //outreaches_with_parteners
            $outreaches_with_parteners = isSet($_POST["outreaches_with_parteners-$id"]) ? 1 : 0;

            /*
            ======================== INSERTION FROM =============
            */
            $sql_medicine_auth_mobile_med = "UPDATE `cons_med_aut_active` SET `ulm` = '$ulm', `midmob` = '$midmob', `detmob` = '$detmob', `ambulance_1` = '$ambulance_1', `ambulance_2` = '$ambulance_2', `outreaches_with_parteners` = '$outreaches_with_parteners' WHERE `cons_med_aut_active`.`id_cons_med` = '$id'";
            
            //On prerare la requete
            $query_medicine_auth_mobile_med = $db->prepare($sql_medicine_auth_mobile_med);
            //On execute la requete
            $query_medicine_auth_mobile_med->execute();
           

                }

                

            }    
            
}


?>