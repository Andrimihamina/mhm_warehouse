<?php
include_once("../../../../../php/dns/connect.php");
// NOM DU COMMANDEUR
$name_orderer = $_SESSION["user"]["username"];

// VARIABLE TEMPS
$stt_maintenant = time();
$stt_maintenant = date( "Y/m/d H:i:s", $stt_maintenant );
$stt4 = strtotime('1 days ago');
$stt4 = date( "Y/m/d H:i:s", $stt4 );

     //MEDICINE FLUX IN
     $sql_flux_out= "SELECT * FROM `flux_out` WHERE `created_date` BETWEEN '$stt4' AND CURRENT_TIMESTAMP AND `done_order` = '0' AND `orderer`= '$name_orderer' ";

     //On execute la requete
     $requete_flux_out = $db->query($sql_flux_out);

     //On recupere les donnes
     $products_flux_out= $requete_flux_out->fetchAll();
          
     //On ecrit le contenue de la page
?>