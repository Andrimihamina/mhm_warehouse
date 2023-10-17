<?php
       session_start();  

       if(empty($_SESSION["user"])){
          header("Location: ../../../../../login");
          exit;
       }
       
       //On enregistrer en bdd
       require_once "../../../../../php/dns/connect.php";

       //REPONSIBILITY NAME
       $id_resp = $_SESSION["user"]["responsibility"];  
       $sql = "SELECT * FROM `mhm_resp` WHERE `id_resp` = $id_resp";
       $requete  = $db->query($sql);
       $responsi = $requete->fetchAll(); 
       
       //PROFILE 
       $id_profile= $_SESSION["user"]["id"];
       $sql_profile = "SELECT * FROM `users` WHERE `id` = $id_profile";
       $requete_profile = $db ->query($sql_profile);
       $profile = $requete_profile ->fetchAll();
?>

 
 