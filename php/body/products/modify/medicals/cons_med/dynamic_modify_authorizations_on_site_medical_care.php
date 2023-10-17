<?php
foreach( $_POST as $cle =>$value )
{
    if ($value == "modify"){
        $var_id = "$cle";

        $id = str_replace("id-", "", $var_id);

if(!empty($_POST)){

    //POST n'est pas vide, on verifier que toutes les donnes sont presents

    // OUTPATIENTS
            //outpatients_Joy_Center
            $outpatients_Joy_Center = isSet($_POST["outpatients_Joy_Center-$id"]) ? 1 : 0;
            //outpatients_Emergency
            $outpatients_Emergency = isSet($_POST["outpatients_Emergency-$id"]) ? 1 : 0;
            //outpatients_Grace_Center
            $outpatients_Grace_Center = isSet($_POST["outpatients_Grace_Center-$id"]) ? 1 : 0; 
            //outpatients_occupational_therapy
            $outpatients_occupational_therapy = isSet($_POST["outpatients_occupational_therapy-$id"]) ? 1 : 0;
            //outpatients_general_Doctors
            $outpatients_general_Doctors = isSet($_POST["outpatients_general_Doctors-$id"]) ? 1 : 0;
            //outpatients_pediatric
            $outpatients_pediatric = isSet($_POST["outpatients_pediatric-$id"]) ? 1 : 0;
            //outpatients_dental
            $outpatients_dental = isSet($_POST["outpatients_dental-$id"]) ? 1 : 0;
            //outpatients_dermathology
            $outpatients_dermathology = isSet($_POST["outpatients_dermathology-$id"]) ? 1 : 0;
            //outpatients_Ultrasound
            $outpatients_Ultrasound = isSet($_POST["outpatients_Ultrasound-$id"]) ? 1 : 0;
            //outpatients_obstetrical
            $outpatients_obstetrical = isSet($_POST["outpatients_obstetrical-$id"]) ? 1 : 0;
            //outpatients_Planning_Familial
            $outpatients_Planning_Familial = isSet($_POST["outpatients_Planning_Familial-$id"]) ? 1 : 0;
            //outpatients_Yuck_Room
            $outpatients_Yuck_Room = isSet($_POST["outpatients_Yuck_Room-$id"]) ? 1 : 0; 
            //sterilizations
            $sterilizations = isSet($_POST["sterilizations-$id"]) ? 1 : 0;
            //laboratory
            $laboratory = isSet($_POST["laboratory-$id"]) ? 1 : 0;
            //inpatients_delivery
            $inpatients_delivery = isSet($_POST["inpatients_delivery-$id"]) ? 1 : 0;
            //inpatients_Baby_Room
            $inpatients_Baby_Room = isSet($_POST["inpatients_Baby_Room-$id"]) ? 1 : 0;
            //inpatients_Stork_Center
            $inpatients_Stork_Center = isSet($_POST["inpatients_Stork_Center-$id"]) ? 1 : 0;
            //inpatients_Neonatal_Intensive
            $inpatients_Neonatal_Intensive = isSet($_POST["inpatients_Neonatal_Intensive-$id"]) ? 1 : 0;
            //inpatients_Neonatal_Kangaroo
            $inpatients_Neonatal_Kangaroo = isSet($_POST["inpatients_Neonatal_Kangaroo-$id"]) ? 1 : 0;
            //inpatients_pediatric_one
            $inpatients_pediatric_one = isSet($_POST["inpatients_pediatric_one-$id"]) ? 1 : 0;
            //inpatients_surgeries
            $inpatients_surgeries = isSet($_POST["inpatients_surgeries-$id"]) ? 1 : 0; 
   
            /*
            ======================== INSERTION FROM =============
            */
            $sql_medicine_auth_mobile_med = "UPDATE `cons_med_aut_active` SET `outpatients_Joy_Center` = '$outpatients_Joy_Center ', `outpatients_Emergency` = '$outpatients_Emergency ', `outpatients_Grace_Center` = '$outpatients_Grace_Center', `outpatients_occupational_therapy` = '$outpatients_occupational_therapy', `outpatients_general_Doctors` = '$outpatients_general_Doctors', `outpatients_pediatric` = '$outpatients_pediatric', `outpatients_dental` = '$outpatients_dental', `outpatients_dermathology` = '$outpatients_dermathology', `outpatients_Ultrasound` = '$outpatients_Ultrasound', `outpatients_obstetrical` = '$outpatients_obstetrical', `outpatients_Planning_Familial` = '$outpatients_Planning_Familial', `outpatients_Yuck_Room` = '$outpatients_Yuck_Room', 
            `sterilizations` = '$sterilizations', `laboratory` = '$laboratory', `inpatients_delivery` = '$inpatients_delivery', `inpatients_Baby_Room` = '$inpatients_Baby_Room', `inpatients_Stork_Center` = '$inpatients_Stork_Center', `inpatients_Neonatal_Intensive` = '$inpatients_Neonatal_Intensive', `inpatients_Neonatal_Kangaroo` = '$inpatients_Neonatal_Kangaroo', `inpatients_pediatric_one` = '$inpatients_pediatric_one', `inpatients_surgeries` = '$inpatients_surgeries' WHERE `cons_med_aut_active`.`id_cons_med` = '$id'";
            
            //On prerare la requete
            $query_medicine_auth_mobile_med = $db->prepare($sql_medicine_auth_mobile_med);
            //On execute la requete
            $query_medicine_auth_mobile_med->execute();
           

                }

                

            }    
            
}


?>