<?php
include_once("../../../../../php/dns/connect.php");

//Prices MEDICALE
$sql_prices_modif = "SELECT * FROM `medicine_price`  ORDER BY `med_name` ASC";

//On execute la requete
$requete_prices_modif = $db->query($sql_prices_modif);

//On recupere les donnes
     $applications_prices= $requete_prices_modif->fetchAll();

//=================================CONSUMABLES MEDICALS
$sql_prices_cons_med_modif = "SELECT * FROM `cons_med_price`  ORDER BY `name_cons_med` ASC";

//On execute la requete
$requete_prices_cons_med_modif = $db->query($sql_prices_cons_med_modif);

//On recupere les donnes
     $cons_med_prices= $requete_prices_cons_med_modif->fetchAll();
?>