<?php
if(
    isset(
            /*
            ========================== NAME =======================
            */
            $_POST["name"], 
             /*
             ==================== SEREAL NUMBER ==============================
             */
            $_POST["sereal_number"]
            )
            /*
            =================== N'EST PAS VIDE ========================
            */
                && !empty($_POST["name"])
                && !empty($_POST["sereal_number"])
                // SATE
                && ($_POST["state"] != "Choose states...")
                // USED
                && !empty($_POST["used"])
            ){

            /*
            ============== IDENTIFCATION VARIABLE ============
            */
            // NAME
              $name= strip_tags($_POST["name"]);
              $_SESSION["error"] =[];
                // print_r($name);

            // MODEL
              $model= strip_tags($_POST["model"]);
              $_SESSION["error"] =[];
                // print_r($model);
  
            // MANUFACTURE
              $manufacturer_name= strip_tags($_POST["manufacturer_name"]);
              $_SESSION["error"] =[];
                // print_r($manufacturer_name);

            // SEREAL NUMBER
              $sereal_number= strip_tags($_POST["sereal_number"]);
              $_SESSION["error"] =[];
                // print_r($sereal_number);

            /*==================== MODULATION =================*/

            // MODEL No
            if($model != ""){
              $model = $model;
              $model_bd = $model;
            }else{
              $model ="";
              $model_bd ="NULL";
            }

            // MODEL No
            if($manufacturer_name != ""){
              $manufacturer_name == $manufacturer_name;
            }else{
              $manufacturer_name =="NULL";
            }
  
            /*
            ============================== ASSOCIATION NAME ==================================
            */
  
            $Name = $name ." " .  $model;
                    // print_r($Name);
            $Name = str_replace('  ', ' ', $Name);

            $Name_check = $Name;
 
            /*
            ========================= DNS =======================================
            */
              require_once("../../../../../php/dns/connect.php");
  
            /*
            ========================= ABREVIATION =========================
            */
              $mat_log_abrev = substr($Name,0,5);
              $mat_log_abrev = strtoupper($mat_log_abrev);
  
            // COUNT NOMBRE D'ABREVIATION
              $check_nbr_mat_log_abrev= mysqli_query($dbc,"SELECT * FROM `mat_log_id` WHERE `mat_log_abrev` ='$mat_log_abrev'");
              $checkrows_nbr_med_mat_log_abrev=mysqli_num_rows($check_nbr_mat_log_abrev);
  
              if($checkrows_nbr_med_mat_log_abrev > 0)
              {$mat_log_nbr_abrev = $checkrows_nbr_med_mat_log_abrev + 1;}
              else 
              { $mat_log_nbr_abrev = 1;}

  
            /*
            ============================== ID CODE CONS MEDICAL ========================
            */
            //NOMBRE DE CARACTER DANS LE COUNT DE L'ABREVIATION
              $nb_char = strlen($mat_log_nbr_abrev);
              switch($nb_char){
                  case 1 :
                      $nb_chars = "-00";
                      break;
                  case 2 :
                      $nb_chars = "-0";
                      break;
                  case 3 :
                      $nb_chars = "-";
                      break;
              }

            /*
            ========================= NAME DOUBLE =========================
            */

          // COUNT NOMBRE NAME
            $sql_Name_check = mysqli_query($dbc,"SELECT * FROM `mat_log_id` WHERE `name_check` ='$Name_check'");
            $checkrows_name_check =mysqli_num_rows($sql_Name_check);

            if($checkrows_name_check > 0)
            {$nbr_name_check = $checkrows_name_check + 1;}
            else 
            { $nbr_name_check = 1;}
            

          /*
          ============================== NBR NAME CHECK=======================
          */
          //NOMBRE DE CARACTER DANS LE COUNT DE L'ABREVIATION
            $nb_char_name_check = strlen($nbr_name_check);
            switch($nb_char_name_check){
                case 1 :
                    $nb_chars_name_check = "No 00";
                    break;
                case 2 :
                    $nb_chars_name_check = "No 0";
                    break;
                case 3 :
                    $nb_chars_name_check = "No ";
                    break;
            }


            // ID CODE MATERIALS LOGISTICS
              $id_code_mat_log= "MAT-LOG" . "-" . $mat_log_abrev . $nb_chars . $mat_log_nbr_abrev;
             
            /*
            ======================== ID RESPONSIBLE ADDING ===================
            */
                $name_adding = $_SESSION["user"]["username"];
            
            /*
            ============= NOM DE L'IMG==================================
            */
            
            $file_name = "materials-img-" . $file_name;

            /*
            ============= NOM ==================================
            */
            
            $Name = $Name ." ". $nb_chars_name_check . $nbr_name_check;

            /*
            ================================== VERIFICATION DEJA ENTREEE PAR LE NUMERO DE SERIE =======================
            */
            $check_mat_seral_number= mysqli_query($dbc,"SELECT * FROM `mat_log_id` WHERE `sereal_number` ='$sereal_number' AND `name_check` ='$Name_check'");
            $checkrows_mat_seral_number=mysqli_num_rows($check_mat_seral_number);

            if($checkrows_mat_seral_number > 0)
            {$_SESSION["error"][] = "This materials is alredy register";
            exit;
            }
            else
            {

      
              $sql_mat_log_id_adhesive = "INSERT INTO `mat_log_id` (
                /*ID PRIMARY*/
                `id`, 
                /*CREATE*/
                `created_date`, 
                /*ID ABREV*/
                `mat_log_abrev`, `mat_log_nbr_abrev`, `id_code_mat_log`,
                /*NAME*/
                `Descriptions`, 
                 /*NAME CHECK*/
                 `name_check`, 
                /*MODEL*/
                `model`, 
                /*MANUF*/
                `manufacturer_name`, 
                /*NUM SERIE*/
                `sereal_number`,
                `name_adding`,
                `mat_log_image`) VALUES (
                  NULL, 
                  current_timestamp(), 
                  /*ID ABREV*/
                  '$mat_log_abrev ', '$mat_log_nbr_abrev', '$id_code_mat_log', 
                  /*NAME*/
                  '$Name',
                  /*NAME CHECK*/
                  '$Name_check',
                  /*MODEL*/
                  '$model', 
                  '$manufacturer_name', 
                  '$sereal_number',
                  '$name_adding',
                  '$file_name')";
  
              //On prerare la requete
              $query_mat_log_id_adhesive = $db->prepare($sql_mat_log_id_adhesive);
              //On execute la requete
             $query_mat_log_id_adhesive->execute();
            
             //On recupere l'id de l'article
              $mat_log_id = $db->lastInsertId();
              
                }
            } else {exit($_SESSION["error"] =["The fils isn't complet"]);}
            // VIDE OU ERREUR
            /*
  ================================================================ ADHESIVE END ==========================================
            */
    ?>