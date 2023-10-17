<?php
include_once("../../../../../php/dns/connect.php");

//APPLICATION MEDICALE
$sql_auth = "SELECT * FROM `medicine_authorizations_passive`  ORDER BY `med_name` ASC";

//On execute la requete
$requete_auth = $db->query($sql_auth);

//On recupere les donnes
     $auth_passives = $requete_auth->fetchAll();
   
    //On ecrit le contenue de la page
?>