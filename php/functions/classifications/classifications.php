<?php
include_once("../../../../../php/dns/connect.php");

//CLASSIFICATIONS MEDICALE
$sql_class = "SELECT * FROM `med_classification`  ORDER BY `classifications_descriptions` ASC";

//On execute la requete
$requete_class = $db->query($sql_class);

//On recupere les donnes
     $classifications = $requete_class->fetchAll();

//CLASSIFICATION MEDICALE
$sql_class_modif = "SELECT * FROM `medicine_classification`  ORDER BY `id_med` ASC";

//On execute la requete
$requete_class_modif = $db->query($sql_class_modif);

//On recupere les donnes
     $classifications_modif = $requete_class_modif->fetchAll();
?>