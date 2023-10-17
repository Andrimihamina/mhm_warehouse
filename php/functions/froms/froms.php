<?php
include_once("../../../../../php/dns/connect.php");

//FROMS
$sql_froms= "SELECT * FROM `med_from`  ORDER BY `from_description` ASC";

//On execute la requete
$requete_from = $db->query($sql_froms);

//On recupere les donnes
     $froms = $requete_from->fetchAll();

//On ecrit le contenue de la page

//FROMS MODIFY
$sql_froms_modify= "SELECT * FROM `medicine_from`  ORDER BY `med_name` ASC";

//On execute la requete
$requete_from_modify = $db->query($sql_froms_modify);

//On recupere les donnes
     $froms_modify = $requete_from_modify->fetchAll();

//On ecrit le contenue de la page

//FROMS MODIFY CONSUMABLE MEDICAL
$sql_froms_modify_cons_med= "SELECT * FROM `cons_med_from`  ORDER BY `name_cons_med` ASC";

//On execute la requete
$requete_from_modify_cons_med = $db->query($sql_froms_modify_cons_med);

//On recupere les donnes
     $froms_modify_cons_med = $requete_from_modify_cons_med->fetchAll();

//On ecrit le contenue de la page
?>