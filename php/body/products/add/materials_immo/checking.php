<?php
//On traite le formulaire
if(
  isset(
          /*
          ========================== NAME =======================
          */
          $_POST["state"], 
          )
          /*
          =================== N'EST PAS VIDE ========================
          */
              && !empty($_POST["state"])
          ){

            /*
            ============== IDENTIFCATION VARIABLE ============
            */
            // STATE
            $state= strip_tags($_POST["state"]);
            $_SESSION["error"] =[];
              // print_r($state);

          // manufacture_date
            $manufacture_date= strip_tags($_POST["manufacture_date"]);
            $_SESSION["error"] =[];
              // print_r($manufacture_date);

          // last_ckeck
            $last_ckeck= strip_tags($_POST["last_ckeck"]);
            $_SESSION["error"] =[];
              // print_r($last_ckeck);

          // routing_check
            $routing_check= strip_tags($_POST["routing_check"]);
            $_SESSION["error"] =[];
              // print_r($routing_check);
          
          // routing_check_date
            $routing_check_date= strip_tags($_POST["routing_check_date"]);
            $_SESSION["error"] =[];
              // print_r($routing_check_date);

        /*==================== MODULATION =================*/

            // manufacture_date
            if($manufacture_date != ""){
              $manufacture_date = $manufacture_date;
            }else{
              $manufacture_date = "2000-01-01";
            }

            // last_ckeck
            if($last_ckeck != ""){
              $last_ckeck = $last_ckeck;
            }else{
              $last_ckeck ="2000-01-01";
            }

            // routing_check
            if($routing_check != ""){
              $routing_check = $routing_check;
            }else{
              $routing_check = "0";
            }

            // routing_check_date
            if($routing_check_date != "Choose Date interval..."){
              $routing_check_date = $routing_check_date;
            }else{
              $routing_check_date ="1";
            }


    $sql_checking = "INSERT INTO `mat_imo_checking` (
      /*ID MAT MED CHECK*/
      `id`, `created_date`, 
      /*ID*/
      `id_mat_imo`, 
      `states`, 
      `manufacture_date`, `last_ckeck`, 
      `routing_check`, `routing_check_date`) VALUES (
        NULL, current_timestamp(), 
        '$mat_imo_id',
        '$state', 
        '$manufacture_date', '$last_ckeck', 
        '$routing_check', '$routing_check_date')";


      //On prerare la requete
      $query_checking= $db->prepare($sql_checking);
      //On execute la requete
    $query_checking->execute(); 
    
}


