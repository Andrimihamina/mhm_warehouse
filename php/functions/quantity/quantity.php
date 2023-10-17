<?php
include_once("../../../../../php/dns/connect.php");

$sql_quantity_modif = "SELECT * FROM `medicine_quantity`  ORDER BY `med_name` ASC";

//On execute la requete
$requete_quantity_modif = $db->query($sql_quantity_modif);

//On recupere les donnes
     $med_quantity= $requete_quantity_modif->fetchAll();

     // =====================CONSUMABLES MEDICALS
     $sql_quantity_modif_cons_med = "SELECT * FROM `cons_med_quantity`  ORDER BY `name_cons_med` ASC";

     //On execute la requete
     $requete_quantity_modif_cons_med = $db->query($sql_quantity_modif_cons_med);
     
     //On recupere les donnes
          $cons_med_quantity= $requete_quantity_modif_cons_med->fetchAll();
?>