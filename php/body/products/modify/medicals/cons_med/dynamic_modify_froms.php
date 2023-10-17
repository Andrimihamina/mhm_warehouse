<?php
foreach( $_POST as $cle =>$value )
{
    if ($value == "modify"){
        $var_id = "$cle";

        $id = str_replace("id-", "", $var_id);

if(!empty($_POST)){

    //POST n'est pas vide, on verifier que toutes les donnes sont presents

            //GERMANY
            $froms_germany = isSet($_POST["froms_germany-$id"]) ? 1 : 0;
            //MADAGASKAR
            $froms_madagaskar = isSet($_POST["froms_madagaskar-$id"]) ? 1 : 0;

            /*
            ======================== INSERTION FROM =============
            */
            $sql_medicine_from = "UPDATE `cons_med_from` SET `germany` = '$froms_germany', `madagaskar` = '$froms_madagaskar' WHERE `cons_med_from`.`id_cons_med` = $id";

            //On prerare la requete
            $query_medicine_from = $db->prepare($sql_medicine_from);
            //On execute la requete
            $query_medicine_from->execute();
           

                }

                

            }    
            
}


?>