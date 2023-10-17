<?php
//On traite le formulaire
if(!empty($_POST)){
    //POST n'est pas vide, on verifier que toutes les donnes sont presents
    if(
        isset($_POST["sublocation_definitions"], $_POST["sublocation_descriptions"])
        && !empty($_POST["sublocation_definitions"]) && !empty($_POST["sublocation_descriptions"])
    ){
        
            //Le formulaire est complet
            //On recupere les donnes en les protegeant (failles XSS)
            //On retire toute balise du titre
            $sublocation_definitions= strip_tags($_POST["sublocation_definitions"]);
            $_SESSION["error"] =[];

            $sublocation_descriptions= strip_tags($_POST["sublocation_descriptions"]);
            $_SESSION["error"] =[];

            if($_SESSION["error"]===[]){
            //On peut les enregistrer
            //on se connecte a la base
            require_once "../../../../../php/dns/connect.php";
            
            // On verifie si l'unites est deja enregistre
            $check_sublocations= mysqli_query($dbc,"SELECT * FROM `med_sublocation` WHERE `sublocation_descriptions` ='$sublocation_descriptions'");
            $checkrows_sublocations=mysqli_num_rows($check_sublocations);

            if($checkrows_sublocations > 0)
            {$_SESSION["error"][] = "This sublocation is alredy register";}
            else
            {

            //On ecrit la requete
            $sql_settings_sublocation= "INSERT INTO `med_sublocation` (`sublocation_descriptions`, `sublocation_definitions`) VALUES ('$sublocation_descriptions', '$sublocation_definitions')";

            //On prerare la requete
            $query_settings_sublocations = $db->prepare($sql_settings_sublocation);

            //On execute la requete
            $query_settings_sublocations->execute();

            //On recupere l'id de l'article
            $id_subloc = $db->lastInsertId();

            //On connectera l'utilisateur

             //On va stocke dans $_SESSION les inforamations de l'utilisateur
             $_SESSION["sublocations"] = [
                "id_subloc" => $id_subloc,
                "sublocation_desciptions" => $sublocation_descriptions,
                "sublocation_definitions" => $sublocation_definitions,
            ];

            header("Location: index.php");
    }
}
}
else
{$_SESSION["error"] = ["The file isn't complet"];}
}

?>