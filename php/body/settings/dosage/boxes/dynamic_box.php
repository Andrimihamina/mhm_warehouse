<?php
//On traite le formulaire
if(!empty($_POST)){
    //POST n'est pas vide, on verifier que toutes les donnes sont presents
    if(
        isset($_POST["box_description"], $_POST["box_definition"])
        && !empty($_POST["box_description"]) && !empty($_POST["box_definition"])
    ){
            //Le formulaire est complet
            //On recupere les donnes en les protegeant (failles XSS)
            //On retire toute balise du titre
            $box_description= strip_tags($_POST["box_description"]);
            $_SESSION["error"] =[];

            $box_definition= strip_tags($_POST["box_definition"]);
            $_SESSION["error"] =[];

            if($_SESSION["error"]===[]){
            //On peut les enregistrer
            //on se connecte a la base
            require_once "../../../../../php/dns/connect.php";
            
            // On verifie si l'unites est deja enregistre
            $check_box= mysqli_query($dbc,"SELECT * FROM `med_box` WHERE `box_description` ='$box_description'");
            $checkrows_box=mysqli_num_rows($check_box);

            if($checkrows_box > 0)
            {$_SESSION["error"][] = "This box is alredy register";}
            else
            {

            //On ecrit la requete
            $sql_settings_box= "INSERT INTO `med_box` (`box_description`, `box_definition`) VALUES ('$box_description', '$box_definition')";

            //On prerare la requete
            $query_settings_box = $db->prepare($sql_settings_box);

            //On execute la requete
            $query_settings_box->execute();

            //On recupere l'id de l'article
            $id_box = $db->lastInsertId();

            //On connectera l'utilisateur

             //On va stocke dans $_SESSION les inforamations de l'utilisateur
             $_SESSION["settings_box"] = [
                "id_box" => $id_box,
                "box_description" => $box_description,
                "box_definition" => $box_definition,
            ];

            header("Location: index.php");
    }       
}
}
else
{$_SESSION["error"] = ["The file isn't complet"];}
}
?>