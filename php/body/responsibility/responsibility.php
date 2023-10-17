<?php
//On traite le formulaire
if(!empty($_POST)){
    //POST n'est pas vide, on verifier que toutes les donnes sont presents
    if(
        isset($_POST["responsability"], $_POST["responsibility_definition"], $_POST["pages"])
        && !empty($_POST["responsability"]) && !empty($_POST["responsibility_definition"]) && !empty($_POST["pages"])
    ){
            //Le formulaire est complet
            //On recupere les donnes en les protegeant (failles XSS)
            //On retire toute balise du titre
            $responsability= strip_tags($_POST["responsability"]);
            $_SESSION["error"] =[];

            $responsibility_definition= strip_tags($_POST["responsibility_definition"]);
            $_SESSION["error"] =[];
 
            $pages = strip_tags($_POST["pages"]);
            $_SESSION["error"] =[];


            if($_SESSION["error"]===[]){
            //On peut les enregistrer
            //on se connecte a la base
            require_once "../../../../../php/dns/connect.php";
            
            // On verifie si l'unites est deja enregistre
            $check= mysqli_query($dbc,"SELECT * FROM `mhm_resp` WHERE `responsability` = '$responsability'");
            $checkrows=mysqli_num_rows($check);

            if($checkrows > 0)
            {$_SESSION["error"][] = "This units is alredy register";}
            else
            {
            
            //On ecrit la requete
            $sql = "INSERT INTO `mhm_resp` (
            `id_resp`, 
            `page`, 
            `create_date_resp`, 
            `responsability`, 
            `responsibility_definition`) VALUES 
            (NULL, '$pages', current_timestamp(), '$responsability', '$responsibility_definition')";
            
            //On prerare la requete
            $query = $db->prepare($sql);

            //On execute la requete
            $query->execute();

            //On recupere l'id de l'article
            $id_resp = $db->lastInsertId();

            /* INSERTION D'UNE NOUVELLE TABLE SUR LE TABLE SERVICE RESPONSIBLE*/
            $sql_table_insertion = "ALTER TABLE `service_responsibility` ADD `$id_resp` INT NOT NULL";
            $query_table_insertion = $db->prepare($sql_table_insertion);
            $query_table_insertion ->execute();
            //On connectera l'utilisateur

             //On va stocke dans $_SESSION les inforamations de l'utilisateur
             $_SESSION["responsability"] = [
                "id_resp" => $id_resp,
                "responsability" => $responsability,
                "responsibility_definition" => $responsibility_definition,
                "pages" => $pages,
            ];

            header("Location: index.php");
    }
}
}
else
{$_SESSION["error"] = ["The file isn't complet"];}
}
?>