<?php
//On traite le formulaire
if(!empty($_POST)){
    //POST n'est pas vide, on verifier que toutes les donnes sont presents
    if(
        isset($_POST["forms_description"], $_POST["forms_definition"])
        && !empty($_POST["forms_description"]) && !empty($_POST["forms_definition"])
    ){
            //Le formulaire est complet
            //On recupere les donnes en les protegeant (failles XSS)
            //On retire toute balise du titre
            $forms_description= strip_tags($_POST["forms_description"]);
            $_SESSION["error"] =[];

            $forms_definition= strip_tags($_POST["forms_definition"]);
            $_SESSION["error"] =[];

            if($_SESSION["error"]===[]){
            //On peut les enregistrer
            //on se connecte a la base
            require_once "../../../../../php/dns/connect.php";
            
            // On verifie si l'unites est deja enregistre
            $check_forms= mysqli_query($dbc,"SELECT * FROM `med_form` WHERE `forms_description` ='$forms_description'");
            $checkrows_forms=mysqli_num_rows($check_forms);

            if($checkrows_forms > 0)
            {$_SESSION["error"][] = "This forms is alredy register";}
            else
            {

            //On ecrit la requete
            $sql_settings_forms= "INSERT INTO `med_form` (`forms_description`, `forms_definition`) VALUES ('$forms_description', '$forms_definition')";

            //On prerare la requete
            $query_settings_forms = $db->prepare($sql_settings_forms);

            //On execute la requete
            $query_settings_forms->execute();

            //On recupere l'id de l'article
            $id_forms = $db->lastInsertId();

            //On connectera l'utilisateur

             //On va stocke dans $_SESSION les inforamations de l'utilisateur
             $_SESSION["settings_forms"] = [
                "id_forms" => $id_forms,
                "forms_description" => $forms_description,
                "forms_definition" => $forms_definition,
            ];

            header("Location: index.php");
    }       
}
}
else
{$_SESSION["error"] = ["The file isn't complet"];}
}
?>