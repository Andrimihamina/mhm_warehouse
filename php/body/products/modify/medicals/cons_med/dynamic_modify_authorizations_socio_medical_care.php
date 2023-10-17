<?php
foreach( $_POST as $cle =>$value )
{
    if ($value == "modify"){
        $var_id = "$cle";

        $id = str_replace("id-", "", $var_id);

if(!empty($_POST)){

    //POST n'est pas vide, on verifier que toutes les donnes sont presents

    // OUTPATIENTS
            //sponsorships_medical_support
            $sponsorships_medical_support = isSet($_POST["sponsorships_medical_support-$id"]) ? 1 : 0;
            //sponsorships_milk_program
            $sponsorships_milk_program = isSet($_POST["sponsorships_milk_program-$id"]) ? 1 : 0;
            //sponsorships_familles
            $sponsorships_familles = isSet($_POST["sponsorships_familles-$id"]) ? 1 : 0; 
            //sponsorships_preganancies
            $sponsorships_preganancies = isSet($_POST["sponsorships_preganancies-$id"]) ? 1 : 0; 
            //sponsorships_mhm_staff_kids
            $sponsorships_mhm_staff_kids = isSet($_POST["sponsorships_mhm_staff_kids-$id"]) ? 1 : 0;
            //sponsorships_healthy_foods
            $sponsorships_healthy_foods = isSet($_POST["sponsorships_healthy_foods-$id"]) ? 1 : 0;
            //sponsorships_mhm_staff_familles
            $sponsorships_mhm_staff_familles = isSet($_POST["sponsorships_mhm_staff_familles-$id"]) ? 1 : 0;
            //sponsorships_kids
            $sponsorships_kids = isSet($_POST["sponsorships_kids-$id"]) ? 1 : 0;
            //sponsorships_school
            $sponsorships_school = isSet($_POST["sponsorships_school-$id"]) ? 1 : 0;
            
            /*
            ======================== INSERTION FROM =============
            */
            $sql_medicine_auth_mobile_med = "UPDATE `cons_med_aut_active` SET `sponsorships_medical_support` = '$sponsorships_medical_support', `sponsorships_milk_program` = '$sponsorships_milk_program', `sponsorships_familles` = '$sponsorships_familles', `sponsorships_mhm_staff_kids` = '$sponsorships_mhm_staff_kids', `sponsorships_healthy_foods` = '$sponsorships_healthy_foods', `sponsorships_mhm_staff_familles` = '$sponsorships_mhm_staff_familles', `sponsorships_preganancies` = '$sponsorships_preganancies', `sponsorships_kids` = '$sponsorships_kids', `sponsorships_school` = '$sponsorships_school' WHERE `cons_med_aut_active`.`id_cons_med` = '$id'";
            //On prerare la requete
            $query_medicine_auth_mobile_med = $db->prepare($sql_medicine_auth_mobile_med);
            //On execute la requete
            $query_medicine_auth_mobile_med->execute();
           

                }

                

            }    
            
}


?>