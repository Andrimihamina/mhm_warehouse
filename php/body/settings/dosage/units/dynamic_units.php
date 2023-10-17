<?php
//On traite le formulaire
if(!empty($_POST)){
    //POST n'est pas vide, on verifier que toutes les donnes sont presents
    if(
        isset($_POST["units_description"], $_POST["units_definition"])
        && !empty($_POST["units_description"]) && !empty($_POST["units_definition"])
    ){
            //Le formulaire est complet
            //On recupere les donnes en les protegeant (failles XSS)
            //On retire toute balise du titre
            $units_description= strip_tags($_POST["units_description"]);
            $_SESSION["error"] =[];

            $units_definition= strip_tags($_POST["units_definition"]);
            $_SESSION["error"] =[];

            if($_SESSION["error"]===[]){
            //On peut les enregistrer
            //on se connecte a la base
            require_once "../../../../../php/dns/connect.php";
            
            // On verifie si l'unites est deja enregistre
            $check_units= mysqli_query($dbc,"SELECT * FROM `med_units` WHERE `units_description` ='$units_description'");
            $checkrows_units=mysqli_num_rows($check_units);

            if($checkrows_units > 0)
            {$_SESSION["error"][] = "This units is alredy register";}
            else
            {

            //On ecrit la requete
            $sql_settings_units= "INSERT INTO `med_units` (`units_description`, `units_definition`) VALUES ('$units_description', '$units_definition')";

            //On prerare la requete
            $query_settings_units = $db->prepare($sql_settings_units);

            //On execute la requete
            $query_settings_units->execute();

            //On recupere l'id de l'article
            $id_units = $db->lastInsertId();

            //On connectera l'utilisateur

             //On va stocke dans $_SESSION les inforamations de l'utilisateur
             $_SESSION["units"] = [
                "id_units" => $id_units,
                "units_desciption" => $units_desciption,
                "units_definition" => $units_definition,
            ];

            header("Location: index.php");
    }
}
}
else
{$_SESSION["error"] = ["The file isn't complet"];}
}
?>