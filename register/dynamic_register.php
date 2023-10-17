<?php
session_start();
/*VERIFICATION SI USERS EST DEJA COMMENCER SESSION*/
if(isset($_SESSION["user"])){
    $responsibility = $_SESSION["user"]["responsibility"];
    include("../https/pages/pages.php");  
exit;
}

if(!empty($_POST)){

    if(isset($_POST["mhm_admin_warehouse_resp"], $_POST["mhm_number"], $_POST["responsibility"], $_POST["username"], $_POST["pass"])
    && !empty($_POST["mhm_admin_warehouse_resp"]) && !empty($_POST["mhm_number"]) && !empty($_POST["responsibility"]) && !empty($_POST["username"]) && !empty($_POST["pass"])){
    //    INITIATION SESSION
        $_SESSION["error_register"]=[];
        
        $mhm_admin_warehouse_resp = strip_tags($_POST["mhm_admin_warehouse_resp"]);
        if($mhm_admin_warehouse_resp==""){ $_SESSION["error_register"][] = "Please Call the responsible";}
        if(strlen($mhm_admin_warehouse_resp) < 5) {$_SESSION["error_register"][] = "Please Call the responsible";}

        $mhm_number = strip_tags($_POST["mhm_number"]);
        if($mhm_number==""){ $_SESSION["error_register"][] = "Please fill the MHM ID";}

        $responsibility = strip_tags($_POST["responsibility"]);
        if($responsibility==""){ $_SESSION["error_register"][] = "Please fill the MHM ID";}

        $username = strip_tags($_POST["username"]);
        if($username==""){ $_SESSION["error_register"][] = "Please fill the MHM ID";}
    
        $file_name = "users-img-" . $file_name;

        if($_SESSION["error_register"]===[]){
            $pass = password_hash($_POST["pass"], PASSWORD_ARGON2ID);
            $confirm_pass = password_hash($_POST["confirm_pass"], PASSWORD_ARGON2ID);

        require_once "../env/dns_warehouse.php";

        $check= mysqli_query($dbc,"SELECT * FROM users where mhm_matricule='$mhm_number'");
        $checkrows=mysqli_num_rows($check);
        
        // MHM CODE
        $resp_code = "Mhm2712";

        if($mhm_admin_warehouse_resp !== $resp_code or $_POST["pass"] !== $_POST["confirm_pass"])
            {$_SESSION["error_register"][] = "Please call the reponsible !";}
        else{     
        if($checkrows > 0)
        {$_SESSION["error_register"][] = "This ID is already registered";}
        else{ 

        $sql ="INSERT INTO `users`(`mhm_matricule`, `responsibility`, `name`, `users_img`, `pass`) VALUES (:mhm_number, :responsibility, :username, '$file_name','$pass')";
        $query = $db->prepare($sql);

        $query->bindValue(":mhm_number", $mhm_number, PDO::PARAM_STR);
        $query->bindValue(":responsibility", $responsibility, PDO::PARAM_STR);
        $query->bindValue(":username", $username, PDO::PARAM_STR);
        
        $query->execute();
    
        
        //REDIRETION DANS LE DASHBORD Storekeeper
        header("Location: ../login");
    
        }
    }
    }  
else
{$_SESSION["error_register"] = ["The file isn't complet"];}
}
}
?>
