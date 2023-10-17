<?php
//On traite le formulaire
if(!empty($_POST)){
    //POST n'est pas vide, on verifier que toutes les donnes sont presents
    if(
        isset($_POST["location_definitions"], $_POST["location_descriptions"])
        && !empty($_POST["location_definitions"]) && !empty($_POST["location_descriptions"])
    ){
        
            //Le formulaire est complet
            //On recupere les donnes en les protegeant (failles XSS)
            //On retire toute balise du titre
            $location_definitions= strip_tags($_POST["location_definitions"]);
            $_SESSION["error"] =[];

            $location_descriptions= strip_tags($_POST["location_descriptions"]);
            $_SESSION["error"] =[];

            if($_SESSION["error"]===[]){
            //On peut les enregistrer
            //on se connecte a la base
            require_once "../../../../../php/dns/connect.php";
            
            // On verifie si l'unites est deja enregistre
            $check_locations= mysqli_query($dbc,"SELECT * FROM `med_location` WHERE `location_descriptions` ='$location_descriptions'");
            $checkrows_locations=mysqli_num_rows($check_locations);

            if($checkrows_locations > 0)
            {$_SESSION["error"][] = "This location is alredy register";}
            else
            {

            //On ecrit la requete
            $sql_settings_location= "INSERT INTO `med_location` (`location_descriptions`, `location_definitions`) VALUES ('$location_descriptions', '$location_definitions')";

            //On prerare la requete
            $query_settings_locations = $db->prepare($sql_settings_location);

            //On execute la requete
            $query_settings_locations->execute();

            //On recupere l'id de l'article
            $id_loc = $db->lastInsertId();

            //On connectera l'utilisateur

             //On va stocke dans $_SESSION les inforamations de l'utilisateur
             $_SESSION["locations"] = [
                "id_class" => $id_loc,
                "location_desciptions" => $location_descriptions,
                "location_definitions" => $location_definitions,
            ];

            header("Location: index.php");
    }
}
}
else
{$_SESSION["error"] = ["The file isn't complet"];}
}

?>