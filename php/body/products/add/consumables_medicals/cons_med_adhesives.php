<?php
if(
    isset(
            /*
            ========================== NAME PRINCIPALE =======================
            */
            $_POST["Name_adhesives"], 
            /*
            ========================== NAME PRINCIPALE =======================
            */
            $_POST["brand_name_adhesives"], 
             /*
             ==================== CLEANLINESS-ADHESIVES ==============================
             */
            $_POST["cleanliness_adhesives"],
             /*
             ==================== WITH GAUZES ==============================
             */
            $_POST["gauze_adhesives"], 
            /*
            ==================== SIZES ==============================
            */
            // LARGEURS
                    $_POST["width_adhesives"],
                    $_POST["units_width_adhesives"], 
            // LONGEUR
                    $_POST["length_adhesives"],
                    $_POST["units_length_adhesives"], 
            // SPECIFIC SIZE
                    $_POST["sizes_specific_adhesives"],
            /*
            =================== PERUMPTION DATE =====================
            */
                    $_POST["perumption_date"],
            )
            /*
            =================== N'EST PAS VIDE ========================
            */
                && !empty($_POST["Name_adhesives"])
                && !empty($_POST["brand_name_adhesives"])
                && !empty($_POST["cleanliness_adhesives"])
                && !empty($_POST["perumption_date"])
            ){

            /*
            ============== IDENTIFCATION VARIABLE ============
            */
            // NAME
              $Name_adhesives= strip_tags($_POST["Name_adhesives"]);
              $_SESSION["error"] =[];
                // print_r($Name_adhesives);
  
            // BRAND
              $brand_name_adhesives= strip_tags($_POST["brand_name_adhesives"]);
              $_SESSION["error"] =[];
                // print_r($Name_adhesives);

            // CLEANLINESS
              $cleanliness_adhesives= strip_tags($_POST["cleanliness_adhesives"]);
              $_SESSION["error"] =[];
                // print_r($cleanliness_adhesives);
  
            // ADHESIVNESS
              $gauze_adhesives= strip_tags($_POST["gauze_adhesives"]);
              $_SESSION["error"] =[];
                // print_r($gauze_adhesives);
  
            // SIZES
              // WIDTH
                $width_adhesives= strip_tags($_POST["width_adhesives"]);
                $_SESSION["error"] =[];
                    // print_r($width_adhesives);

                $units_width_adhesives= strip_tags($_POST["units_width_adhesives"]);
                $_SESSION["error"] =[];
                    // print_r($units_width_adhesives);
  
              // LENGHT
                $length_adhesives= strip_tags($_POST["length_adhesives"]);
                $_SESSION["error"] =[];
                    // print_r($length_adhesives);

                $units_length_adhesives= strip_tags($_POST["units_length_adhesives"]);
                $_SESSION["error"] =[];
                    // print_r($units_length_adhesives);
  
              // SIZES SPECIFIC
                $sizes_specific_adhesives= strip_tags($_POST["sizes_specific_adhesives"]);
                $_SESSION["error"] =[];
                    // print_r($sizes_specific_adhesives);

            // PERUMTPTION DATE
                $perumption_date= strip_tags($_POST["perumption_date"]);
                $_SESSION["error"] =[];
                  // print_r($perumption_date);
            
            /*
             =========================== MODULATION SIZES ===========================
            */

            //BRAND NAME  
              $brand_cons_med = $brand_name_adhesives;
            
            // ------------SIZE
            // GAUZES
      
                    $sizes_gauzes = "NULL";
                  

            // SPECIFIC
              if($sizes_specific_adhesives != "Chooses Sizes..."){
                $sizes_specific = $sizes_specific_adhesives;
              }else{
                $sizes_specific = "NULL";
              }

            // CHARRIERE
            $sizes_charriere_tubes = "Chooses Sizes...";

            if($sizes_charriere_tubes != "Chooses Sizes..."){
              $sizes_charriere = $sizes_charriere_tubes;
            }else{
              $sizes_charriere = "NULL";
            }

            // COLOR
              $sizes_color = "NULL";

            // GAUZE ADHESIVES
                if($gauze_adhesives != ""){
                    $gauze_adhesives_bd = $gauze_adhesives;
                }else{
                    $gauze_adhesives_bd = "NULL";
                }

            // WIDTH
              if($width_adhesives != "" AND $units_width_adhesives != ""){
                $size_width = $width_adhesives;
                $units_size_width = $units_width_adhesives;
              }else{
                $size_width = "NULL";
                $units_size_width = "NULL";
              }

            // LENGHT
              if($length_adhesives != "" AND $units_length_adhesives != ""){
                $size_lenght = $length_adhesives;
                $units_size_lenght = $units_length_adhesives;
              }else{
                $size_lenght = "NULL";
                $units_size_lenght = "NULL";
              }
            
            // THICHNESS
              $units_size_thickness = "NULL";

/* ORDRE D'ECRUTURE DU SIZES
            - 1ST : SIZES
            - 2DT : SIZES COLOR
            - 3EME : SIZES SPECIFIC
            - 4EME : SIZES WIDTH
            - 5EME : UNITS SIZES WIDTH
            - 6EME : SIZES LENGHT
            - 7EME : SIZES UNITS LENGHT
*/

            /*
            ============================ AFFICHAGE DU VALEUR REELE SIZE =============================
            */
            include_once("../../../../../php/body/products/add/consumables_medicals/affiche_sizes.php");
            
            // SPECIFIC SIZE
              $sizes_specific_affiche = $affiche_sizes_specific;
  
              if($sizes_specific_affiche == "NULL"){
                $sizes_specific_affiche ="";
              } else {$sizes_specific_affiche = $sizes_specific_affiche;}
  
            // UNITS WIDTH
              $size_width_units = $size_width . $affiche_units_sizes_width ;
  
              if($size_width_units == "NULLNULL"){
                $size_width_units ="";
              } else {$size_width_units = $size_width_units;}
  
            // UNITS LENGHT
              $size_lenght_units = $size_lenght . $affiche_units_size_lenght;
  
              if($size_lenght_units == "NULLNULL"){
                $size_lenght_units ="";
              } else {$size_lenght_units = $size_lenght_units;}
  
            /*
            ============================== ASSOCIATION ==================================
            */
  
              $association_sizes = $sizes_specific_affiche. " " . $size_width_units . " " . $size_lenght_units;      
              
              $association_sizes = str_replace('  ', '', $association_sizes);
  
              // echo "$association_sizes";
  
            /*
            =====================RESUMER ADHESIVE===================================

                NAME = $Name_adhesives
                CLEANLINESS = $cleanliness_adhesives
                SIZE = $association_sizes
                ADHESIVNESS= $gauze_adhesives

            */
            $Name = $Name_adhesives ." " .  $cleanliness_adhesives . " " . $association_sizes  . " ". $gauze_adhesives;
                    // print_r($Name);
            $Name = str_replace('  ', '', $Name);
  
            /*
            ========================= DNS =======================================
            */
              require_once("../../../../../php/dns/connect.php");
  
            /*
            ========================= ABREVIATION =========================
            */
              $cons_med_abrev = substr($Name,0,5);
              $cons_med_abrev = strtoupper($cons_med_abrev);
  
            // COUNT NOMBRE D'ABREVIATION
              $check_nbr_cos_med_abrev= mysqli_query($dbc,"SELECT * FROM `cons_med_id` WHERE `cons_med_abrev` ='$cons_med_abrev'");
              $checkrows_nbr_med_cons_med_abrev=mysqli_num_rows($check_nbr_cos_med_abrev);
  
              if($checkrows_nbr_med_cons_med_abrev > 0)
              {$cons_med_nbr_abrev = $checkrows_nbr_med_cons_med_abrev + 1;}
              else 
              { $cons_med_nbr_abrev = 1;}
  
            /*
            ============================== ID CODE CONS MEDICAL ========================
            */
            //NOMBRE DE CARACTER DANS LE COUNT DE L'ABREVIATION
              $nb_char = strlen($cons_med_nbr_abrev);
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
              $id_code_cons_med = "COS-MED" . "-" . $cons_med_abrev . $nb_chars . $cons_med_nbr_abrev;

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
            $check_cons_med_id= mysqli_query($dbc,"SELECT * FROM `cons_med_id` WHERE `name_cons_med` ='$Name'");
            $checkrows_cons_med_id=mysqli_num_rows($check_cons_med_id);

            if($checkrows_cons_med_id > 0)
            {$_SESSION["error"][] = "This consumables is alredy register";
            exit;
            }
            else
            {

            /*
            =========================== INSERTION SUR LE BASE DE DONNEEES ============================

            - ID CODE MED : NULL (CLES PRIMAIRE)
            - CREATED DATE CONS MED : DATE D'ENREGISTREMENT

            CODE ABREVIATION
            - ABREVIATION NAME : $cons_med_abrev
            - NOMBRE DE REPETITION DE L'ABREVIATION : $cons_med_nbr_abrev
            - ID CODE CONS MED : $id_code_cons_med

            NAME
            - NAME : $Name
            - BRAND : $brand_cons_med

            - CLEANLINESS : $cleanliness_adhesives

            - SIZES : $association_sizes

            VARIABLE PAS OBLIGATOIRE

            - SIZE WIDTH : $size_width
            - UNITS SIZE WIDTH : $units_size_width
            - SIZE LENGHT : $size_lenght
            - UNITS SIZE LENGHT : $units_size_lenght
            - SIZE THICKNESS : "NULL"
            - UNITS SIZE THICKNESS : "NULL"
            
            - SIZE CHARRIERS : "$sizes_charriere
            - SIZE SPECIFIC : $sizes_specific
            - SIZE COLOR : "$sizes_color"
            - SIZE GAUZE : $sizes_specific_gauzes

            - SIZE UNITS : "NULL"

            OTHERS
            - ADHESIVNESS : $gauze_adhesives_bd
            - ELASTICITY : "NULL"
            - HOLE : "NULL"
            - FORMS : "NULL"

            NEEDLE
            - NEEDLE : "NULL"
            - NEEDLE FORM : "NULL"
            - NEEDLE CIRCLE : "NULL"
            - NEEDLE SIZES : "NULL"
            - UNITS NEEDLES SIZES : "NULL"
          
            PACKAGE
            - PACKAGE : "NULL"
            - UNITS PACKAGE : NULL

            - MEDICATION : "NULL"
            - NAME MEDICATION : "NULL"

            - EXPIRATION DATE . $perumption_date

            - NAME ADDING : $name_adding
            - CONS IMAGE : $file_name

            */
  
              $sql_cons_med_id_adhesive = "INSERT INTO `cons_med_id` (
              `id`, `created_date`, 
              `cons_med_abrev`, `cons_med_nbr_abrev`, `id_code_cons_med`, 
              /*NAME*/
              `Descriptions`, 
              `brand_cons_med`, 
              /*CLEANLINESS*/
              `cleanliness`,
              /*SIZE*/ 
              `sizes`, 
              `sizes_width`, `units_sizes_width`, 
              `sizes_length`, `units_sizes_lenght`, 
              `size_thickness`, `units_size_thichness`, 
              `sizes_charrieres`,
              `sizes_specific`, 
              `sizes_color`, 
              `sizes_gauzes`, 
              `sizes_units`, 
              /*OTHERS*/
              `adhesivness`, 
              `elasticity`, 
              `hole`, 
              `forms`,
              /*NEEDLE*/
              `needle`,
              `needle_form`,
              `needle_circle`,
              `needle_sizes`,
              `units_needle_sizes`,
              /*PACKAGE*/ 
              `package`, `units_package`, 
              /*MEDICATION*/
              `medication`, `name_medication`,
              /*EXPIRATION DATE*/
              `expiration_date`, 
              /*RESPONSIBLE*/
              `name_adding`, 
              /*IMAGE*/
              `cons_image`) 
              VALUES (
              NULL, current_timestamp(), 
              '$cons_med_abrev', '$cons_med_nbr_abrev', '$id_code_cons_med',
              /*NAME*/ 
              '$Name', 
              '$brand_cons_med',
              /*CLEANLINESS*/
              '$cleanliness_adhesives',
              /*SIZES*/
              '$association_sizes',
              '$size_width', '$units_size_width', 
              '$size_lenght', '$units_size_lenght', 
              'NULL', 'NULL', 
              /*CHARRIERS*/
              'NULL',
              /*SPECIFIC*/
              '$sizes_specific',
              /*COLOR*/ 
              '$sizes_color',
              /*GAUZES*/
              '$sizes_specific_gauzes',
              /*UNITS*/ 
              'NULL',
              /*OTHERS*/ 
              '$gauze_adhesives_bd',
              'NULL', 
              'NULL',
              'NULL',
              /*NEEDLE*/
              'NULL',
              'NULL',
              'NULL',
              'NULL',
              'NULL',
              /*PACKAGE*/
              'NULL', 'NULL',
              /*MEDICATION*/ 
              'NULL', 'NULL', 
              /*EXPIRATION DATE*/
              '$perumption_date',
              /*RESPONSIBLE*/
              '$name_adding', 
              /*IMAGE*/
              '$file_name')";
  
              //On prerare la requete
              $query_cons_med_id_adhesive = $db->prepare($sql_cons_med_id_adhesive);
              //On execute la requete
             $query_cons_med_id_adhesive->execute();
            
             //On recupere l'id de l'article
              $cons_med_id = $db->lastInsertId();
              
                }
            } else {exit($_SESSION["error"] =["The fils isn't complet"]);}
            // VIDE OU ERREUR
            /*
  ================================================================ ADHESIVE END ==========================================
            */
    ?>