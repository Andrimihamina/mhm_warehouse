<?php
include_once("../../../../../php/dns/connect.php");

//APPLICATION MEDICALE
$sql_hitstory_inputs_all = "SELECT * FROM `flux_in_medicines`  ORDER BY `created_date` DESC";

//On execute la requete
$requete_history_all = $db->query($sql_hitstory_inputs_all);

//On recupere les donnes
     $history_inputs_all = $requete_history_all->fetchAll();
   
    //On ecrit le contenue de la page
?>