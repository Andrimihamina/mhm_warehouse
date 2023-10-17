<?php
foreach( $_POST as $cle =>$value )
{
    if ($value == "modify"){
        $var_id = "$cle";

        $id = str_replace("id-", "", $var_id);

if(!empty($_POST)){

    //POST n'est pas vide, on verifier que toutes les donnes sont presents
             /*
            =============== MAIN CLASS ======================
            */
            $location_0 = strip_tags($_POST["main-loc-$id"]);
            $_SESSION["error"] =[];
           
            if($location_0 !=""){
                $sql = "SELECT * FROM `med_location`  WHERE `id_location` = '$location_0'";
                //On execute la requete
                $requete = $db->query($sql);
                //On recupere les donnes
                $location_0_affiche = $requete->fetch();
                $location_0_affiche = $location_0_affiche["location_descriptions"];
                  
            /*
            =============== SUB CLASS ======================
            */ 
            $location_1 = strip_tags($_POST["sub-loc-$id"]);
            $_SESSION["error"] =[];

                if($location_1 != "")
                {
                    $sql = "SELECT * FROM `med_sublocation`  WHERE `id_sub_loc` = '$location_1'";
                    //On execute la requete
                    $requete = $db->query($sql);
                    //On recupere les donnes
                    $location_1_affiche = $requete->fetch();
                    $location_1_affiche = $location_1_affiche["sublocation_definitions"];
                    }else{$location_1="NULL";
                    $$location_1_affiche ="";}
            /*
            =============== SUB SUB CLASS ======================
            */ 
            $location_2 = strip_tags($_POST["sub-sub-loc-$id"]);
            $_SESSION["error"] =[];

                if($location_2 != "")
                {   
                        $sql = "SELECT * FROM `med_subsublocation`  WHERE `id_subsubloc` = '$location_2'";
                        //On execute la requete
                        $requete = $db->query($sql);
                        //On recupere les donnes
                        $location_2_affiche = $requete->fetch();
                        $location_2_affiche = $location_2_affiche["subsublocation_descriptions"];
                        }else{$location_2="NULL";
                        $location_2_affiche ="";}
            
            /*
            =============== LOCATION AFFCHE======================
            */ 
            $affiche_locations = $location_0_affiche ." ". $location_1_affiche ." " . $location_2_affiche;

            /*UPDATE*/
            $sql_medicine_locations= "UPDATE `medicine_location` SET `med_affiche_location` = '$affiche_locations', `location_0` = '$location_0', `location_1` = '$location_1', `location_2` = '$location_2' WHERE `medicine_location`.`id_med` = '$id'";

            //On prerare la requete
            $query_medicine_locations= $db->prepare($sql_medicine_locations);
            //On execute la requete
           $query_medicine_locations->execute();

                }

            }    
        }
            
}


?>