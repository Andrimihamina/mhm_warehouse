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
              $cons_foo_abrev = substr($Name,0,5);
              $cons_foo_abrev = strtoupper($cons_foo_abrev);
  
            // COUNT NOMBRE D'ABREVIATION
              $check_nbr_cons_foo_abrev= mysqli_query($dbc,"SELECT * FROM `cons_foo_id` WHERE `cons_foo_abrev` ='$cons_foo_abrev'");
              $checkrows_nbr_med_cons_foo_abrev=mysqli_num_rows($check_nbr_cons_foo_abrev);
  
              if($checkrows_nbr_med_cons_foo_abrev > 0)
              {$cons_foo_nbr_abrev = $checkrows_nbr_med_cons_foo_abrev + 1;}
              else 
              { $cons_foo_nbr_abrev = 1;}
  
            /*
            ============================== ID CODE CONS MEDICAL ========================
            */
            //NOMBRE DE CARACTER DANS LE COUNT DE L'ABREVIATION
              $nb_char = strlen($cons_foo_nbr_abrev);
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
              $id_code_cons_foo = "COS-FOO" . "-" . $cons_foo_abrev . $nb_chars . $cons_foo_nbr_abrev;

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
            $check_cons_foo_id= mysqli_query($dbc,"SELECT * FROM `cons_foo_id` WHERE `Descriptions` ='$Name'");
            $checkrows_cons_foo_id=mysqli_num_rows($check_cons_foo_id);

            if($checkrows_cons_foo_id > 0)
            {$_SESSION["error"][] = "This consumables is alredy register";
            exit;
            }
            else
            {

              $sql_cons_foo_id = "INSERT INTO `cons_foo_id` (
              `id`, `created_date`, 
              `cons_foo_abrev`, `cons_foo_nbr_abrev`, `id_code_cons_foo`, 
              /*NAME*/
              `Descriptions`, 
              `brand_cons_foo`, 
              /*RESPONSIBLE*/
              `name_adding`, 
              /*IMAGE*/
              `image`) 
              VALUES (
              NULL, current_timestamp(), 
              '$cons_foo_abrev', '$cons_foo_nbr_abrev', '$id_code_cons_foo',
              /*NAME*/ 
              '$Name', 
              '$brand',
              '$name_adding', 
              /*IMAGE*/
              '$file_name')";
  
              //On prerare la requete
              $query_cons_foo_id = $db->prepare($sql_cons_foo_id);
              //On execute la requete
             $query_cons_foo_id->execute();
            
             //On recupere l'id de l'article
              $cons_foo_id = $db->lastInsertId();
              
                }
            } else {exit($_SESSION["error"] =["The fils isn't complet"]);}
            // VIDE OU ERREUR
            /*
  ================================================================ ADHESIVE END ==========================================
            */
    ?>