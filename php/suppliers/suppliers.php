<?php
//On traite le formulaire
if(!empty($_POST)){
    //POST n'est pas vide, on verifier que toutes les donnes sont presents
    if(
        isset($_POST["sup_categories"], $_POST["sup_name"], $_POST["sup_location"], $_POST["sup_mail"], $_POST["sup_contact"])
        && !empty($_POST["sup_categories"]) && !empty($_POST["sup_name"]) && !empty($_POST["sup_location"]) && !empty($_POST["sup_mail"]) && !empty($_POST["sup_contact"])
    ){
            //Le formulaire est complet
            //On recupere les donnes en les protegeant (failles XSS)
            //On retire toute balise du titre
            $sup_categories= strip_tags($_POST["sup_categories"]);
            $_SESSION["error"] =[];

            $sup_name= strip_tags($_POST["sup_name"]);
            $_SESSION["error"] =[];

            $sup_location= strip_tags($_POST["sup_location"]);
            $_SESSION["error"] =[];

            $sup_mail= strip_tags($_POST["sup_mail"]);
            $_SESSION["error"] =[];

            $sup_contact= strip_tags($_POST["sup_contact"]);
            $_SESSION["error"] =[];

            if($_SESSION["error"]===[]){
            //On peut les enregistrer
            //on se connecte a la base
            include_once("../../env/dns_warehouse.php");
            
            // On verifie si l'unites est deja enregistre
            $check_suppliers= mysqli_query($dbc,"SELECT * FROM `suppliers` WHERE `name` ='$sup_name'");
            $checkrows_suppliers=mysqli_num_rows($check_suppliers);

            if($checkrows_suppliers > 0)
            {$_SESSION["error"][] = "This suppliers is alredy register";}
            else
            {

            //On ecrit la requete
            $sql_settings_suppliers= "INSERT INTO `suppliers` 
            (`id_suppliers`, `created_date`, `sup_categories`, 
            `name`, `location`, `mail`, `contact`) VALUES 
            (NULL, current_timestamp(), 
            '$sup_categories', '$sup_name', '$sup_location', 
            '$sup_mail', '$sup_contact');";

            //On prerare la requete
            $query_settings_suppliers = $db->prepare($sql_settings_suppliers);

            //On execute la requete
            $query_settings_suppliers->execute();

            //On recupere l'id de l'article
            $id_suppliers = $db->lastInsertId();

            //On connectera l'utilisateur

            //On va stocke dans $_SESSION les inforamations de l'utilisateu

            header("Location: ../../Layout/Purchases/suppliers.php");
    }
}
}
else
{$_SESSION["error"] = ["The file isn't complet"];}
}
?>