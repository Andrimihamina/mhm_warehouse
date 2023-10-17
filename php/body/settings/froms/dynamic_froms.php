<?php
//On traite le formulaire
if(!empty($_POST)){
    //POST n'est pas vide, on verifier que toutes les donnes sont presents
    if(
        isset($_POST["from_description"], $_POST["from_definition"])
        && !empty($_POST["from_description"]) && !empty($_POST["from_definition"])
    ){
            //Le formulaire est complet
            //On recupere les donnes en les protegeant (failles XSS)
            //On retire toute balise du titre
            $from_description= strip_tags($_POST["from_description"]);
            $_SESSION["error"] =[];

            $from_definition= strip_tags($_POST["from_definition"]);
            $_SESSION["error"] =[];

            if($_SESSION["error"]===[]){
            //On peut les enregistrer
            //on se connecte a la base
            require_once "../../../../../php/dns/connect.php";
            
            // On verifie si l'unites est deja enregistre
            $check_from= mysqli_query($dbc,"SELECT * FROM `med_from` WHERE `from_description` ='$from_description'");
            $checkrows_from=mysqli_num_rows($check_from);

            if($checkrows_from > 0)
            {$_SESSION["error"][] = "This froms is alredy register";}
            else
            {

            //On ecrit la requete
            $sql_settings_from= "INSERT INTO `med_from` (`from_description`, `from_definition`) VALUES ('$from_description', '$from_definition')";

            //On prerare la requete
            $query_settings_from = $db->prepare($sql_settings_from);

            //On execute la requete
            $query_settings_from->execute();

            //On recupere l'id de l'article
            $id_from = $db->lastInsertId();

            //On connectera l'utilisateur

             //On va stocke dans $_SESSION les inforamations de l'utilisateur
             $_SESSION["settings_from"] = [
                "id_from" => $id_from,
                "from_description" => $from_description,
                "from_definition" => $from_definition,
            ];

            header("Location: index.php");
    }       
}
}
else
{$_SESSION["error"] = ["The file isn't complet"];}
}
?>