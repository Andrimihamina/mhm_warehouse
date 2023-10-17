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
            $classification_0 = strip_tags($_POST["main-class-$id"]);
            $_SESSION["error"] =[];
           
            if($classification_0 != "")
                {
                    $sql = "SELECT * FROM `med_classification`  WHERE `id_class` = '$classification_0'";
                    //On execute la requete
                    $requete = $db->query($sql);
                    //On recupere les donnes
                    $classification_0_affiche = $requete->fetch();
                    $classification_0_affiche = $classification_0_affiche["classifications_descriptions"];       
            /*
            =============== SUB CLASS ======================
            */ 
            $classification_1 = strip_tags($_POST["sub-class-$id"]);
            $_SESSION["error"] =[];

                if($classification_1 != "")
                {   
                        $sql_sub = "SELECT * FROM `med_sub_classifications`  WHERE `id_med_sub_class` = '$classification_1'";
                        //On execute la requete
                        $requete_sub = $db->query($sql_sub);
                        //On recupere les donnes
                        $classification_1_affiche = $requete_sub->fetch();
                        $classification_1_affiche = $classification_1_affiche["med_subclassification_description"];
                        }else{$classification_1_affiche ="";}
            /*
            =============== SUB SUB CLASS ======================
            */ 
            $classification_2 = strip_tags($_POST["sub-sub-class-$id"]);
            $_SESSION["error"] =[];

                if($classification_2 != "")
                {   
                        $sql_sub_sub = "SELECT * FROM `med_sub_classifications`  WHERE `id_med_sub_class` = '$classification_2'";
                        //On execute la requete
                        $requete_sub_sub = $db->query($sql_sub_sub);
                        //On recupere les donnes
                        $classification_2_affiche = $requete_sub_sub->fetch();
                        $classification_2_affiche = $classification_2_affiche["med_subclassification_description"];
                        }else{$classification_2_affiche="";}
            
            /*
            =============== CLASSIFCAITION AFFCHE======================
            */ 
            $affiche_classification = $classification_0_affiche ." ". $classification_1_affiche ." " . $classification_2_affiche;

            /*UPDATE*/
            $sql_medicine_classification= "UPDATE `medicine_classification` SET `med_affiche_classification` = '$affiche_classification', `classification_0` = '$classification_0', `classification_1` = '$classification_1', `classification_2` = '$classification_2' WHERE `medicine_classification`.`id_med` = '$id'";

            //On prerare la requete
            $query_medicine_classification= $db->prepare($sql_medicine_classification);
            //On execute la requete
           $query_medicine_classification->execute();

                }

            }    
        }
            
}


?>