<?php
  require_once("../../../../../php/dns/connect.php");

/*
=============== UNITS SIZES  LENGTH ===========================
*/
if($units_size_mesurs_needles_sutures_aff != "Choose units..."){
  $sql_affiche_size_lenght_needles= "SELECT * FROM `cons_measurs` WHERE `id_measurs` = '$units_size_mesurs_needles_sutures_aff'";

  //On excute directement la requete
  $requete_affiche_size_lenght_needles  = $db->query($sql_affiche_size_lenght_needles);

  //On recupere les donnees (fetch ou fetchall)
  $affiche_size_lenght_needles= $requete_affiche_size_lenght_needles ->fetchAll();

 $affiche_size_lenght_needles= $affiche_size_lenght_needles[0]["measurs_descriptions"];
}else{
$affiche_size_lenght_needles = "";
}

?>