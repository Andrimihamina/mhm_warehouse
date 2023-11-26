<?php
   ob_start();
   session_start();  

   if(empty($_SESSION["user"])){
      header("Location: ../../login");
      exit;
   }
       
   // CONNECTION TO DNS
      require_once "../../env/dns_warehouse.php";
      require_once "../../env/dns_patient_system.php";

   // ID USERS
      $id_users = $_SESSION["user"]["id"]; 
      $id_users_users = $id_users; 
      $sql_id_users = "SELECT * FROM `users` WHERE `id` = $id_users";
      $requete_id_users  = $db->query($sql_id_users);
      $id_users = $requete_id_users->fetchAll();

   // RESPONSABILITY
      $id_resp = $_SESSION["user"]["responsibility"];  
      $sql = "SELECT * FROM `mhm_resp` WHERE `id_resp` = $id_resp";
      $requete  = $db->query($sql);
      $responsi = $requete->fetch(); 

      $Responsability = $responsi["responsability"];

   // NAME
      $UserName = $_SESSION["user"]["username"];  

   // IMAGE 
      $UsersImage= $id_users[0]["users_img"];
?>
