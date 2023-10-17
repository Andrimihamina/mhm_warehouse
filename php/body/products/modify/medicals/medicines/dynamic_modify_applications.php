<?php
foreach( $_POST as $cle =>$value )
{
    if ($value == "modify"){
        $var_id = "$cle";

        $id = str_replace("id-", "", $var_id);

if(!empty($_POST)){

    //POST n'est pas vide, on verifier que toutes les donnes sont presents
             /*
            =============== APPLICATION ======================
            */
            $application= strip_tags($_POST["ap-$id"]);
            $_SESSION["error"] =[];
           
            if($application != "")
                {
            $sql_appli = "SELECT * FROM `med_application`  WHERE `id_appli` = '$application'";

            //On execute la requete
            $requete_appli = $db->query($sql_appli);

            //On recupere les donnes
                $aciaffiche_appli = $requete_appli->fetch();

                $affiche_application = $aciaffiche_appli["application_descriptions"];               

/*
             Application
             */
            $sql_medicine_application= "UPDATE `medicine_application` SET `med_affiche_application` = '$affiche_application', `med_application` = '$application' WHERE `medicine_application`.`id_med` = '$id'";

            //On prerare la requete
            $query_medicine_application = $db->prepare($sql_medicine_application);
            //On execute la requete
           $query_medicine_application->execute();

                }

            }    
            
}
}

?>