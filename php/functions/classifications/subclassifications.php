<?php
include_once("../../../../../php/dns/connect.php");

//SUBCLASSIFICATIONS MEDICALE
$sql_subclass = "SELECT * FROM `med_sub_classifications`  ORDER BY `med_subclassification_description` ASC";

//On execute la requete
$requete_subclass = $db->query($sql_subclass);

//On recupere les donnes
     $subclassifications = $requete_subclass->fetchAll();
   
    //On ecrit le contenue de la page
?>