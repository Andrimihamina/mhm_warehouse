<?php
include_once("../../../../../php/dns/connect.php");

    //SUPPLIERS
    $sql_users = "SELECT * FROM `users`  ORDER BY `name` ASC";

    //On execute la requete
    $requete_users = $db->query($sql_users);

    //On recupere les donnes
         $users = $requete_users->fetchAll();
?>