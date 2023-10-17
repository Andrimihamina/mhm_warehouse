<?php
 session_start();
/*START SESSION["user"] ALREDY IN*/
if(isset($_SESSION["user"])){
    $responsibility = $_SESSION["user"]["responsibility"]; 
    require_once "../env/dns_warehouse.php";
    $id_resp = "SELECT * FROM `mhm_resp` WHERE `id_resp` = $responsibility";                   
    $pages= $db->query($id_resp);
    $pages = $pages->fetch();
    $page = $pages["page"];
    // CHECK PAGE
    include("../https/pages/pages.php");
}
/*END Session["user"] Alerdy IN*/

/*START NEW SESSION["user"]*/
if(!empty($_POST)){
    // NOT EMPTY
    if(isset($_POST["mhm_number"], $_POST["pass"])
       && !empty($_POST["mhm_number"] && !empty($_POST["pass"]))
    ){
        $_SESSION["error"] = [];
        if($_SESSION["error"] === []){
            require_once "../env/dns_warehouse.php";
            
            // USERS
            $sql = "SELECT * FROM `users` WHERE `mhm_matricule`= :mhm_number";
            $query = $db->prepare($sql);
            $query->bindValue(":mhm_number", $_POST["mhm_number"], PDO::PARAM_INT);
            $query->execute();
            $user = $query->fetch();

            //  USERS NOT EMPTY
            if($user){
                

            //CHECK PASSWORD
            if(!password_verify($_POST["pass"], $user["pass"]))
            {
                $_SESSION["error"][] = "The ID or the Password isn't true";
            }

                // CHERCHER LE RESPONSIBLE
                $id_resp = $user["responsibility"];
                $sql_affiche_id_resp = "SELECT * FROM `mhm_resp` WHERE `id_resp` = $id_resp";        
                // On excute directement la requete
                $requete_affiche_id_resp= $db->query($sql_affiche_id_resp);
                //On recupere les donnees (fetch ou fetchall)
                $affiche_id_resp = $requete_affiche_id_resp->fetch();

                $page = $affiche_id_resp["page"];

                    //Ici l'utilisateur et le mot de passe sont corrects
                    //On va pouvoir "connecter " l'utilisateur
                    if($_SESSION["error"] === []) {
                    //On va stocke dans $_SESSION les inforamations de l'utilisateur
                    $_SESSION["user"] = [
                        "id" => $user["id"],
                        "mhm_matricule" => $user["mhm_matricule"],
                        "username" => $user["name"],
                        "responsibility" => $user["responsibility"],
                        "pages" => $page
                    ];
                    
                    //REDIRECTION DE LA PAGE
                    include("../https/pages/pages.php");
                    }
            }$_SESSION["error"][] ="The ID or the Password isn't true";
        }
        }
    }
        ?>