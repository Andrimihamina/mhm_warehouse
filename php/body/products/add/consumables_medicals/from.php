<?php
//On traite le formulaire
if(!empty($_POST)){
  
   /*
    ======================== ON INSERT LE FROM =============================
    */
    //GERMANY
    $froms_germany = isSet($_POST['froms_germany']) ? 1 : 0;

    //MADAGASKAR
    $froms_madagaskar = isSet($_POST['froms_madagaskar']) ? 1 : 0;

          

    $sql_from = "INSERT INTO `cons_med_from` (
      `id`, 
      `id_cons_med`,
      `germany`, 
      `madagaskar`) VALUES 
      (NULL, 
      /*IDENTITY*/
      '$cons_med_id', 
      /*LOCATION*/ 
      '$froms_germany', 
      '$froms_madagaskar')";

      //On prerare la requete
      $query_cons_med_from= $db->prepare($sql_from);
      //On execute la requete
    $query_cons_med_from->execute(); 
    
}


