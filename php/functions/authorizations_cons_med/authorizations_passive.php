<?php
include_once("../../../../../php/dns/connect.php");

//APPLICATION MEDICALE
$sql_auth = "SELECT * FROM `cons_med_aut_passive`  ORDER BY `name_cons_med` ASC";

//On execute la requete
$requete_auth = $db->query($sql_auth);

//On recupere les donnes
     $auth_passives = $requete_auth->fetchAll();
   
    //On ecrit le contenue de la page
?>