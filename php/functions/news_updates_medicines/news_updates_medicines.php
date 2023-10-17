<?php
require_once("../../../../../php/dns/connect.php");

// VARIABLE TEMPS
     $stt_maintenant = time();
     $stt_maintenant = date( "Y/m/d H:i:s", $stt_maintenant );
     $stt4 = strtotime('1 days ago');
     $stt4 = date( "Y/m/d H:i:s", $stt4 );

//MEDICINE ID
     $sql_medicine_id_recent_update= "SELECT * FROM medicine_id WHERE created_date BETWEEN '$stt4' AND CURRENT_TIMESTAMP";

     //On execute la requete
     $requete_medicine_id_recent_update = $db->query($sql_medicine_id_recent_update);

     //On recupere les donnes
     $products_medicine_id_recent_update= $requete_medicine_id_recent_update->fetchAll();
          
     //On ecrit le contenue de la page


//CONS MED ID 
     $sql_cons_med_id_recent_update= "SELECT * FROM cons_med_id WHERE created_date BETWEEN '$stt4' AND CURRENT_TIMESTAMP";

     //On execute la requete
     $requete_cons_med_id_recent_update = $db->query($sql_cons_med_id_recent_update);

     //On recupere les donnes
     $products_cons_med_id_recent_update= $requete_cons_med_id_recent_update->fetchAll();
     
//On ecrit le contenue de la page

//MAT MED ID
     $sql_mat_med_id_recent_update= "SELECT * FROM `mat_med_id` WHERE `created_date` BETWEEN '$stt4' AND CURRENT_TIMESTAMP";

     //On execute la requete
     $requete_mat_med_id_recent_update = $db->query($sql_mat_med_id_recent_update);

     //On recupere les donnes
     $products_mat_med_id_recent_update= $requete_mat_med_id_recent_update->fetchAll();

     //On ecrit le contenue de la page
?>