<?php
        require_once "../dns/connect.php";
        $sql = "SELECT * FROM `mhm_resp` WHERE `id_resp` = $id_resp";
        $sql_profile = "SELECT * FROM `users` WHERE `id` = $id_profile";

        //On excute directement la requete
        $requete  = $db->query($sql);
        $requete_profile = $db ->query($sql_profile);

        //On recupere les donnees (fetch ou fetchall)
        $responsi = $requete->fetchAll();  
        $profile = $requete_profile ->fetchAll();
?>