<?php

//On traite le formulaire
if(!empty($_POST)){
    //POST n'est pas vide, on verifier que toutes les donnes sont presents
    if(
        isset($_POST["application_definitions"], $_POST["application_descriptions"])
        && !empty($_POST["application_definitions"]) && !empty($_POST["application_descriptions"])
    ){
            //Le formulaire est complet
            //On recupere les donnes en les protegeant (failles XSS)
            //On retire toute balise du titre
            $applications_definitions= strip_tags($_POST["application_definitions"]);
            $_SESSION["error"] =[];

            $application_descriptions= strip_tags($_POST["application_descriptions"]);
            $_SESSION["error"] =[];

            if($_SESSION["error"]===[]){
            //On peut les enregistrer
            //on se connecte a la base
            require_once "../../../../../php/dns/connect.php";
            
            // On verifie si l'unites est deja enregistre
            $check_application= mysqli_query($dbc,"SELECT * FROM `med_application` WHERE `application_descriptions` ='$application_descriptions'");
            $checkrows_application=mysqli_num_rows($check_application);

            if($checkrows_application > 0)
            {$_SESSION["error"][] = "This application is alredy register";}
            else
            {

            //On ecrit la requete
            $sql_settings_applications= "INSERT INTO `med_application` (`application_descriptions`, `application_definitions`) VALUES ('$application_descriptions', '$applications_definitions')";

            //On prerare la requete
            $query_settings_applications = $db->prepare($sql_settings_applications);

            //On execute la requete
            $query_settings_applications->execute();

            //On recupere l'id de l'article
            $id_appli = $db->lastInsertId();

            //On connectera l'utilisateur

             //On va stocke dans $_SESSION les inforamations de l'utilisateur
             $_SESSION["applications"] = [
                "id_appli" => $id_appli,
                "application_desciptions" => $application_desciptions,
                "application_definitions" => $application_definitions,
            ];

            header("Location: index.php");
    }
}
}
else
{$_SESSION["error"] = ["The file isn't complet"];}
}
?>