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
              $cons_itc_abrev = substr($Name,0,5);
              $cons_itc_abrev = strtoupper($cons_itc_abrev);
  
            // COUNT NOMBRE D'ABREVIATION
              $check_nbr_cons_itc_abrev= mysqli_query($dbc,"SELECT * FROM `cons_itc_id` WHERE `cons_itc_abrev` ='$cons_itc_abrev'");
              $checkrows_nbr_med_cons_itc_abrev=mysqli_num_rows($check_nbr_cons_itc_abrev);
  
              if($checkrows_nbr_med_cons_itc_abrev > 0)
              {$cons_itc_nbr_abrev = $checkrows_nbr_med_cons_itc_abrev + 1;}
              else 
              { $cons_itc_nbr_abrev = 1;}
  
            /*
            ============================== ID CODE CONS MEDICAL ========================
            */
            //NOMBRE DE CARACTER DANS LE COUNT DE L'ABREVIATION
              $nb_char = strlen($cons_itc_nbr_abrev);
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
              $id_code_cons_itc = "COS-ITC" . "-" . $cons_itc_abrev . $nb_chars . $cons_itc_nbr_abrev;

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
            $check_cons_itc_id= mysqli_query($dbc,"SELECT * FROM `cons_itc_id` WHERE `Descriptions` ='$Name'");
            $checkrows_cons_itc_id=mysqli_num_rows($check_cons_itc_id);

            if($checkrows_cons_itc_id > 0)
            {$_SESSION["error"][] = "This consumables is alredy register";
            exit;
            }
            else
            {

              $sql_cons_itc_id = "INSERT INTO `cons_itc_id` (
              `id`, `created_date`, 
              `cons_itc_abrev`, `cons_itc_nbr_abrev`, `id_code_cons_itc`, 
              /*NAME*/
              `Descriptions`, 
              `brand_cons_itc`, 
              /*RESPONSIBLE*/
              `name_adding`, 
              /*IMAGE*/
              `image`) 
              VALUES (
              NULL, current_timestamp(), 
              '$cons_itc_abrev', '$cons_itc_nbr_abrev', '$id_code_cons_itc',
              /*NAME*/ 
              '$Name', 
              '$brand',
              '$name_adding', 
              /*IMAGE*/
              '$file_name')";
  
              //On prerare la requete
              $query_cons_itc_id = $db->prepare($sql_cons_itc_id);
              //On execute la requete
             $query_cons_itc_id->execute();
            
             //On recupere l'id de l'article
              $cons_itc_id = $db->lastInsertId();
              
                }
            } else {exit($_SESSION["error"] =["The fils isn't complet"]);}
            // VIDE OU ERREUR
            /*
  ================================================================ ADHESIVE END ==========================================
            */
    ?>