<?php
//On traite le formulaire
if(!empty($_POST)){
    //POST n'est pas vide, on verifier que toutes les donnes sont presents
    if(
        isset($_POST["services_descriptions"], $_POST["services_definitions"])
        && !empty($_POST["services_descriptions"]) && !empty($_POST["services_definitions"])
    ){
            //Le formulaire est complet
            //On recupere les donnes en les protegeant (failles XSS)
            //On retire toute balise du titre
            $services_descriptions= strip_tags($_POST["services_descriptions"]);
            $_SESSION["error"] =[];

            $services_definitions= strip_tags($_POST["services_definitions"]);
            $_SESSION["error"] =[];

            if($_SESSION["error"]===[]){
            //On peut les enregistrer
            //on se connecte a la base
            require_once "../../../../../php/dns/connect.php";
            
            // On verifie si l'unites est deja enregistre
            $check= mysqli_query($dbc,"SELECT * FROM `services` WHERE `services_descriptions` ='$services_descriptions'");
            $checkrows=mysqli_num_rows($check);

            if($checkrows > 0)
            {$_SESSION["error"][] = "This units is alredy register";}
            else
            {

            /* INSERTION D'UNE NOUVELLE TABLE SUR LE TABLE MHM RESP
            $sql_table_insertion = "ALTER TABLE `mhm_resp` ADD `$services_descriptions` INT NOT NULL";
            $query_table_insertion = $db->prepare($sql_table_insertion);
            $query_table_insertion ->execute();
            */

            //On ecrit la requete
            $sql= "INSERT INTO `services` (`services_descriptions`, `services_definitions`) VALUES ('$services_descriptions', '$services_definitions')";
            //On prerare la requete
            $query = $db->prepare($sql);
            //On execute la requete
            $query->execute();

            //On recupere l'id de l'article
            $id_services = $db->lastInsertId();



            /*=================
                     SERVICE RESPOSABILITE
                                ======================*/
            $sql_service_respponsibility = "INSERT INTO `service_responsibility`(
                `id_service_resp`,
                `id_service`,
                `services`)
                VALUES
                (NULL, 
                '$id_services',
                '$services_descriptions')";
            //On prerare la requete
            $query_service_respponsibility = $db->prepare($sql_service_respponsibility);
            //On execute la requete
            $query_service_respponsibility->execute();


            //On connectera l'utilisateur

             //On va stocke dans $_SESSION les inforamations de l'utilisateur
             $_SESSION["services"] = [
                "id_services" => $id_services,
                "services_descriptions" => $services_descriptions,
                "services_definitions" => $services_definitions,
            ];

            header("Location: index.php");
    }
}
}
else
{$_SESSION["error"] = ["The file isn't complet"];}
}
?>