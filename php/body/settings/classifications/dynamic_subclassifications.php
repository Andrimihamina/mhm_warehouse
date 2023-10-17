<?php
//On traite le formulaire
if(!empty($_POST)){
    //POST n'est pas vide, on verifier que toutes les donnes sont presents
    if(
        isset($_POST["subclassifications_definitions"], $_POST["subclassifications_descriptions"])
        && !empty($_POST["subclassifications_definitions"]) && !empty($_POST["subclassifications_descriptions"])
    ){
            //Le formulaire est complet
            //On recupere les donnes en les protegeant (failles XSS)
            //On retire toute balise du titre
            $subclassifications_definitions= strip_tags($_POST["subclassifications_definitions"]);
            $_SESSION["error"] =[];

            $subclassifications_descriptions= strip_tags($_POST["subclassifications_descriptions"]);
            $_SESSION["error"] =[];

            if($_SESSION["error"]===[]){
            //On peut les enregistrer
            //on se connecte a la base
            require_once "../../../../../php/dns/connect.php";
            
            // On verifie si l'unites est deja enregistre
            $check_subclassifications= mysqli_query($dbc,"SELECT * FROM `med_sub_classifications` WHERE `med_subclassification_description` = '$subclassifications_descriptions'");
            $checkrows_subclassifications=mysqli_num_rows($check_subclassifications);

            if($checkrows_subclassifications > 0)
            {$_SESSION["error"][] = "This Subclass is alredy register";}
            else
            {

            //On ecrit la requete
            $sql_settings_sub_classifications= "INSERT INTO `med_sub_classifications` (`med_subclassification_description`, `med_subclassification_definition`) VALUES ('$subclassifications_descriptions', '$subclassifications_definitions')";

            //On prerare la requete
            $query_settings_sub_classifications = $db->prepare($sql_settings_sub_classifications);

            //On execute la requete
            $query_settings_sub_classifications->execute();

            //On recupere l'id de l'article
            $id_sub_class = $db->lastInsertId();

            //On connectera l'utilisateur

             //On va stocke dans $_SESSION les inforamations de l'utilisateur
             $_SESSION["subclassifications"] = [
                "id_sub_class" => $id_sub_class,
                "subclassifications_desciptions" => $subclassifications_descriptions,
                "subclassifications_definitions" => $subclassifications_definitions,
            ];

            header("Location: index.php");
    }
}
}
else
{$_SESSION["error"] = ["The file isn't complet"];}
}

?>