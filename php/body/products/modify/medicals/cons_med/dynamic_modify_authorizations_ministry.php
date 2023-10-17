<?php
foreach( $_POST as $cle =>$value )
{
    if ($value == "modify"){
        $var_id = "$cle";

        $id = str_replace("id-", "", $var_id);

if(!empty($_POST)){

    //POST n'est pas vide, on verifier que toutes les donnes sont presents

            //social_chaplincy
            $social_chaplincy = isSet($_POST["social_chaplincy-$id"]) ? 1 : 0;
            //social_kids_club
            $social_kids_club = isSet($_POST["social_kids_club-$id"]) ? 1 : 0;
            //social_playmobil
            $social_playmobil = isSet($_POST["social_playmobil-$id"]) ? 1 : 0; 
            //social_prayer
            $social_prayer = isSet($_POST["social_prayer-$id"]) ? 1 : 0; 
            //social_sensibilizations
            $social_sensibilizations = isSet($_POST["social_sensibilizations-$id"]) ? 1 : 0;
            
            /*
            ======================== INSERTION FROM =============
            */
            $sql_medicine_auth_mobile_med = "UPDATE `cons_med_aut_active` SET `social_chaplincy` = '$social_chaplincy', `social_kids_club` = '$social_kids_club', `social_playmobil` = '$social_playmobil', `social_prayer` = '$social_prayer', `social_sensibilizations` = '$social_sensibilizations' WHERE `cons_med_aut_active`.`id_cons_med` = '$id'";
            //On prerare la requete
            $query_medicine_auth_mobile_med = $db->prepare($sql_medicine_auth_mobile_med);
            //On execute la requete
            $query_medicine_auth_mobile_med->execute();
           

                }

                

            }    
            
}


?>