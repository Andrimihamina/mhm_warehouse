<?php
foreach( $_POST as $cle =>$value )
{
    if ($value == "modify"){
        $var_id = "$cle";

        $id = str_replace("id-", "", $var_id);

if(!empty($_POST)){

    //POST n'est pas vide, on verifier que toutes les donnes sont presents

            //bulding_inside_well_and_water
            $bulding_inside_well_and_water = isSet($_POST["bulding_inside_well_and_water-$id"]) ? 1 : 0;
            //bulding_inside_solar
            $bulding_inside_solar = isSet($_POST["bulding_inside_solar-$id"]) ? 1 : 0;
            //bulding_inside_generator
            $bulding_inside_generator = isSet($_POST["bulding_inside_generator-$id"]) ? 1 : 0; 
            //bulding_inside_operation
            $bulding_inside_operation = isSet($_POST["bulding_inside_operation-$id"]) ? 1 : 0;
            //bulding_inside_equipement
            $bulding_inside_equipement = isSet($_POST["bulding_inside_equipement-$id"]) ? 1 : 0;

           
   
            /*
            ======================== INSERTION FROM =============
            */
            $sql_medicine_auth = "UPDATE `cons_med_aut_passive` SET `bulding_inside_well_and_water` = '$bulding_inside_well_and_water', `bulding_inside_solar` = '$bulding_inside_solar', `bulding_inside_generator` = '$bulding_inside_generator', `bulding_inside_operation` = '$bulding_inside_operation', `bulding_inside_equipement` = '$bulding_inside_equipement' WHERE `cons_med_aut_passive`.`id_cons_med` = '$id'";
            
            //On prerare la requete
            $query_medicine_auth = $db->prepare($sql_medicine_auth);
            //On execute la requete
            $query_medicine_auth->execute();
           

                }

                

            }    
            
}


?>