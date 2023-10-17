<?php
//On traite le formulaire
if(!empty($_POST)){
    //POST n'est pas vide, on verifier que toutes les donnes sont presents
    if(
        isset($_POST["classifications_definitions"], $_POST["classifications_descriptions"])
        && !empty($_POST["classifications_definitions"]) && !empty($_POST["classifications_descriptions"])
    ){
            //Le formulaire est complet
            //On recupere les donnes en les protegeant (failles XSS)
            //On retire toute balise du titre
            $classifications_definitions= strip_tags($_POST["classifications_definitions"]);
            $_SESSION["error"] =[];

            $classifications_descriptions= strip_tags($_POST["classifications_descriptions"]);
            $_SESSION["error"] =[];

            if($_SESSION["error"]===[]){
            //On peut les enregistrer
            //on se connecte a la base
            require_once "../../../../../php/dns/connect.php";
            
            // On verifie si l'unites est deja enregistre
            $check_classifications= mysqli_query($dbc,"SELECT * FROM `med_classification` WHERE `classifications_descriptions` ='$classifications_descriptions'");
            $checkrows_classifications=mysqli_num_rows($check_classifications);

            if($checkrows_classifications > 0)
            {$_SESSION["error"][] = "This class is alredy register";}
            else
            {

            //On ecrit la requete
            $sql_settings_classifications= "INSERT INTO `med_classification` (`classifications_descriptions`, `classifications_definitions`) VALUES ('$classifications_descriptions', '$classifications_definitions')";

            //On prerare la requete
            $query_settings_classifications = $db->prepare($sql_settings_classifications);

            //On execute la requete
            $query_settings_classifications->execute();

            //On recupere l'id de l'article
            $id_class = $db->lastInsertId();

            //On connectera l'utilisateur

             //On va stocke dans $_SESSION les inforamations de l'utilisateur
             $_SESSION["classifications"] = [
                "id_class" => $id_class,
                "classifications_desciptions" => $classifications_desciptions,
                "classifications_definitions" => $classifications_definitions,
            ];

            header("Location: index.php");
    }
}
}
else
{$_SESSION["error"] = ["The file isn't complet"];}
}
?>