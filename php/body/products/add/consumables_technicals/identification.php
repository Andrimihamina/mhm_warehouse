<?php
if(
    isset(
            /*
            ========================== NAME PRINCIPALE =======================
            */
            $_POST["Name"], 
            /*
            ========================== NAME PRINCIPALE =======================
            */
            $_POST["brand"], 
            )
            /*
            =================== N'EST PAS VIDE ========================
            */
                && !empty($_POST["Name"])
                && !empty($_POST["brand"])
            ){

            /*
            ============== IDENTIFCATION VARIABLE ============
            */
            // NAME
              $Name= strip_tags($_POST["Name"]);
              $_SESSION["error"] =[];
  
            // BRAND
              $brand= strip_tags($_POST["brand"]);
              $_SESSION["error"] =[];
  
  
            /*
            ========================= DNS =======================================
            */
              require_once("../../../../../php/dns/connect.php");
  
            /*
            ========================= ABREVIATION =========================
            */
              $cons_tec_abrev = substr($Name,0,5);
              $cons_tec_abrev = strtoupper($cons_tec_abrev);
  
            // COUNT NOMBRE D'ABREVIATION
              $check_nbr_cons_tec_abrev= mysqli_query($dbc,"SELECT * FROM `cons_tec_id` WHERE `cons_tec_abrev` ='$cons_tec_abrev'");
              $checkrows_nbr_med_cons_tec_abrev=mysqli_num_rows($check_nbr_cons_tec_abrev);
  
              if($checkrows_nbr_med_cons_tec_abrev > 0)
              {$cons_tec_nbr_abrev = $checkrows_nbr_med_cons_tec_abrev + 1;}
              else 
              { $cons_tec_nbr_abrev = 1;}
  
            /*
            ============================== ID CODE CONS MEDICAL ========================
            */
            //NOMBRE DE CARACTER DANS LE COUNT DE L'ABREVIATION
              $nb_char = strlen($cons_tec_nbr_abrev);
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

            // ID CODE CONSUMABLE MEDICAL
              $id_code_cons_tec = "COS-TEC" . "-" . $cons_tec_abrev . $nb_chars . $cons_tec_nbr_abrev;

            /*
            ======================== ID RESPONSIBLE ADDING ===================
            */
                $name_adding = $_SESSION["user"]["username"];
            
            /*
            ============= NOM DE L'IMG==================================
            */
            
            $file_name = "consumable-img-" . $file_name;

            /*
            ================================== VERIFICATION DEJA ENTREEE =======================
            */
            $check_cons_tec_id= mysqli_query($dbc,"SELECT * FROM `cons_tec_id` WHERE `Descriptions` ='$Name'");
            $checkrows_cons_tec_id=mysqli_num_rows($check_cons_tec_id);

            if($checkrows_cons_tec_id > 0)
            {$_SESSION["error"][] = "This consumables is alredy register";
            exit;
            }
            else
            {

              $sql_cons_tec_id = "INSERT INTO `cons_tec_id` (
              `id`, `created_date`, 
              `cons_tec_abrev`, `cons_tec_nbr_abrev`, `id_code_cons_tec`, 
              /*NAME*/
              `Descriptions`, 
              `brand_cons_tec`, 
              /*RESPONSIBLE*/
              `name_adding`, 
              /*IMAGE*/
              `image`) 
              VALUES (
              NULL, current_timestamp(), 
              '$cons_tec_abrev', '$cons_tec_nbr_abrev', '$id_code_cons_tec',
              /*NAME*/ 
              '$Name', 
              '$brand',
              '$name_adding', 
              /*IMAGE*/
              '$file_name')";
  
              //On prerare la requete
              $query_cons_tec_id = $db->prepare($sql_cons_tec_id);
              //On execute la requete
             $query_cons_tec_id->execute();
            
             //On recupere l'id de l'article
              $cons_tec_id = $db->lastInsertId();
              
                }
            } else {exit($_SESSION["error"] =["The fils isn't complet"]);}
            // VIDE OU ERREUR
            /*
  ================================================================ ADHESIVE END ==========================================
            */
    ?>