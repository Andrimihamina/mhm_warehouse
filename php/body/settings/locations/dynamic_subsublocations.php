<?php
//On traite le formulaire
if(!empty($_POST)){
    //POST n'est pas vide, on verifier que toutes les donnes sont presents
    if(
        isset($_POST["subsublocation_definitions"], $_POST["subsublocation_descriptions"])
        && !empty($_POST["subsublocation_definitions"]) && !empty($_POST["subsublocation_descriptions"])
    ){
        
            //Le formulaire est complet
            //On recupere les donnes en les protegeant (failles XSS)
            //On retire toute balise du titre
            $subsublocation_definitions= strip_tags($_POST["subsublocation_definitions"]);
            $_SESSION["error"] =[];

            $subsublocation_descriptions= strip_tags($_POST["subsublocation_descriptions"]);
            $_SESSION["error"] =[];

            if($_SESSION["error"]===[]){
            //On peut les enregistrer
            //on se connecte a la base
            require_once "../../../../../php/dns/connect.php";
            
            // On verifie si l'unites est deja enregistre
            $check_subsublocations= mysqli_query($dbc,"SELECT * FROM `med_subsublocation` WHERE `subsublocation_descriptions` ='$subsublocation_descriptions'");
            $checkrows_subsublocations=mysqli_num_rows($check_subsublocations);

            if($checkrows_subsublocations > 0)
            {$_SESSION["error"][] = "This subsublocation is alredy register";}
            else
            {

            //On ecrit la requete
            $sql_settings_subsublocation= "INSERT INTO `med_subsublocation` (`subsublocation_descriptions`, `subsublocation_definitions`) VALUES ('$subsublocation_descriptions', '$subsublocation_definitions')";

            //On prerare la requete
            $query_settings_subsublocations = $db->prepare($sql_settings_subsublocation);

            //On execute la requete
            $query_settings_subsublocations->execute();

            //On recupere l'id de l'article
            $id_subsubloc = $db->lastInsertId();

            //On connectera l'utilisateur

             //On va stocke dans $_SESSION les inforamations de l'utilisateur
             $_SESSION["subsublocations"] = [
                "id_subsubloc" => $id_subsubloc,
                "subsublocation_desciptions" => $subsublocation_descriptions,
                "subsublocation_definitions" => $subsublocation_definitions,
            ];

            header("Location: index.php");
    }
}
}
else
{$_SESSION["error"] = ["The file isn't complet"];}
}

?>