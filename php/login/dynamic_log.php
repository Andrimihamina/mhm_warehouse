<?php
 //On demarre la session PHP
 session_start();
 if(isset($_SESSION["user"])){
    header("Location: ../dashboard");
    exit;
 }

//On verifier si le formulaire a ete envoyer
if(!empty($_POST)){
    //Le formulaire a ete envoyer
    //On verifie que tous les champs requis sont remplis
    if(isset($_POST["mhm_number"], $_POST["pass"])
        && !empty($_POST["mhm_number"] && !empty($_POST["pass"]))
    ){
        $_SESSION["error"] = [];
        if($_SESSION["error"] === []){

            //On va se connecter a la base de donnes
            require_once "../dns/connect.php";

            $sql = "SELECT * FROM `users` WHERE `mhm_matricule`= :mhm_number";

            $query = $db->prepare($sql);

            $query->bindValue(":mhm_number", $_POST["mhm_number"], PDO::PARAM_INT);

            $query->execute();

            $user= $query->fetch();

            if(!$user){
                $_SESSION["error"][] ="The ID or the password isn't true";
            }

            //Ici on a un user existant, on peut verifier le mot de pass
            if(!password_verify($_POST["pass"], $user["pass"]))
            {
                $_SESSION["error"][] = "The ID or the password isn't true";
            }
        
            //Ici l'utilisateur et le mot de passe sont corrects
            //On va pouvoir "connecter " l'utilisateur
            if($_SESSION["error"] === []) {
                //On va stocke dans $_SESSION les inforamations de l'utilisateur
                $_SESSION["user"] = [
                    "id" => $user["id"],
                    "mhm_matricule" => $user["mhm_matricule"],
                    "username" => $user["name"],
                    "responsibility" => $user["responsibility"]
                ];

                
                //On redirige vesla page de profil (par exemple) Pas 'espace 
                header("Location: ../dashboard");
            }
        }
    }
}
                    	
            //On ecrit le contenue de la page
        ?>