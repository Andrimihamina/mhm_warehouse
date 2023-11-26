<?php
require_once("../../env/dns_warehouse.php");

if(!empty($_POST)){

    if(isset($_POST["id_users"],$_POST["AutPassword"], $_POST["newpassword"], $_POST["renewpassword"])
    && !empty($_POST["id_users"]) && !empty($_POST["AutPassword"]) && !empty($_POST["newpassword"]) && !empty($_POST["renewpassword"])){

        $_SESSION["error_register"]=[];
        
        // PASSWORD AUTORIZATION
        $mhm_admin_warehouse_resp = strip_tags($_POST["AutPassword"]);
        if($mhm_admin_warehouse_resp==""){ $_SESSION["error_register"][] = "Please Call the responsible";}
        if(strlen($mhm_admin_warehouse_resp) < 5) {$_SESSION["error_register"][] = "Please Call the responsible";}

        // ID USERS
        $id_users = strip_tags($_POST["id_users"]);

        if($_SESSION["error_register"]===[]){
            $pass = password_hash($_POST["newpassword"], PASSWORD_ARGON2ID);
            $confirm_pass = password_hash($_POST["renewpassword"], PASSWORD_ARGON2ID);
        
        // MHM CODE
        $resp_code = "Mhm2712";

        if($mhm_admin_warehouse_resp !== $resp_code or $_POST["newpassword"] !== $_POST["renewpassword"])
            {$_SESSION["error_register"][] = "Please call the reponsible !";}
        else{     

        $sql ="UPDATE `users` SET `pass` = '$pass' WHERE `users`.`id` = '$id_users'";
        $query = $db->prepare($sql);
        $query->execute();
    
        }
    }
    }  
else
{$_SESSION["error_register"] = ["The file isn't complet"];}
}
 
?>