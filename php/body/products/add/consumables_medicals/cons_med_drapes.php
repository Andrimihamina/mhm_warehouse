<?php
if(
    isset(
            /*
            ========================== NAME PRINCIPALE =======================
            */
            $_POST["Name_drapes"], 
            /*
            ========================== NAME PRINCIPALE =======================
            */
            $_POST["brand_name_drapes"], 
            /*
            ==================== CLEANLINESS-DRAPES==============================
            */
            $_POST["cleanliness_drapes"],
            /*
             ==================== ADHESIVNESS-DRAPES ==============================
             */
            $_POST["adhesiveness_drapes"],
            /*
             ==================== HOLED-DRAPES ==============================
             */
            $_POST["holed_drapes"],
            /*
            =================== PERUMPTION DATE =====================
            */
            $_POST["perumption_date"],
            
            /*
            ==================== SIZES ==============================
            */
            // LARGEURS
                    $_POST["width_drapes"],
                    $_POST["units_width_drapes"], 
            // LONGEUR
                    $_POST["length_drapes"],
                    $_POST["units_length_drapes"], 
            // SPECIFIC SIZE
                    $_POST["sizes_specific_drapes"],
            // SPECIFIC COLOR
                     $_POST["sizes_color_drapes"],
            )
            /*
            =================== N'EST PAS VIDE ========================
            */
                && !empty($_POST["Name_drapes"])
                && !empty($_POST["brand_name_drapes"])
                && !empty($_POST["cleanliness_drapes"])
                && !empty($_POST["perumption_date"])
            ){

            /*
            ============== IDENTIFCATION VARIABLE ============
            */
            // NAME
              $Name_drapes= strip_tags($_POST["Name_drapes"]);
              $_SESSION["error"] =[];
                // print_r($Name_drapes);
            
            // BRAND
              $brand_name_drapes= strip_tags($_POST["brand_name_drapes"]);
              $_SESSION["error"] =[];
                // print_r($brand_name_drapes);
  
            // CLEANLINESS
              $cleanliness_drapes= strip_tags($_POST["cleanliness_drapes"]);
              $_SESSION["error"] =[];
                // print_r($cleanliness_drapes);
  
            // ADHESIVNESS
              $adhesiveness_drapes= strip_tags($_POST["adhesiveness_drapes"]);
              $_SESSION["error"] =[];
                // print_r($adhesiveness_drapes);
            
            // HOLED
              $holed_drapes= strip_tags($_POST["holed_drapes"]);
              $_SESSION["error"] =[];
                // print_r($holed_drapes);
  
            // SIZES
              // WIDTH
                $width_drapes= strip_tags($_POST["width_drapes"]);
                $_SESSION["error"] =[];
                    // print_r($width_drapes);

                $units_width_drapes= strip_tags($_POST["units_width_drapes"]);
                $_SESSION["error"] =[];
                    // print_r($units_width_drapes);
  
              // LENGHT
                $length_drapes= strip_tags($_POST["length_drapes"]);
                $_SESSION["error"] =[];
                    // print_r($length_drapes);

                $units_length_drapes= strip_tags($_POST["units_length_drapes"]);
                $_SESSION["error"] =[];
                    // print_r($units_length_drapes);
  
              // SIZES SPECIFIC
                $sizes_specific_drapes= strip_tags($_POST["sizes_specific_drapes"]);
                $_SESSION["error"] =[];
                    // print_r($sizes_specific_drapes);

               // SIZES COLOR
                $sizes_color_drapes= strip_tags($_POST["sizes_color_drapes"]);
                $_SESSION["error"] =[];
                    // print_r($sizes_color_drapes);

               // PERUMTPTION DATE
                $perumption_date= strip_tags($_POST["perumption_date"]);
                $_SESSION["error"] =[];
                  // print_r($perumption_date);
              
            /*
             =========================== MODULATION ===========================
            */

            //BRAND NAME  
              $brand_cons_med = $brand_name_drapes;

            // BANDAGE ADHESIVNESS
              if($adhesiveness_drapes != "NULL"){
                $adhesiveness_drapes_bd = $adhesiveness_drapes;
              }else{
                $adhesiveness_drapes_bd = "NULL";
                $adhesiveness_drapes = "";
              }

            // HOLED
              if($holed_drapes != ""){
                $holed_drapes_bd = $holed_drapes;
              }else{
                  $holed_drapes_bd = "NULL";
              }

            // ----------------------SIZE
            // GAUZES
            $sizes_gauge_needles = "Chooses Sizes...";

                if($sizes_gauge_needles != "Chooses Sizes..."){
                  $sizes_gauzes = $sizes_gauge_needles;
                }else{
                  $sizes_gauzes = "NULL";
                }
                  
            // SPECIFIC
              if($sizes_specific_drapes != "Chooses Sizes..."){
                $sizes_specific = $sizes_specific_drapes;
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
              if($sizes_color_drapes != "Chooses Sizes..."){
                $sizes_color = $sizes_color_drapes;
              }else{
                $sizes_color = "NULL";
              }
            
            // WIDTH
              if($width_drapes != "" AND $units_width_drapes != ""){
                $size_width = $width_drapes;
                $units_size_width = $units_width_drapes;
              }else{
                $size_width = "NULL";
                $units_size_width = "NULL";
              }

            // LENGHT
              if($length_drapes != "" AND $units_length_drapes != ""){
                $size_lenght = $length_drapes;
                $units_size_lenght = $units_length_drapes;
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

            // SPECIFIC COLOR
              $sizes_specific_color = $sizes_specific_color;
              
              if($sizes_specific_color == "NULL"){
                $sizes_specific_color ="";
              } else {$sizes_specific_color = $sizes_specific_color;}
  
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
  
              $association_sizes = $sizes_specific_affiche. " " . $size_width_units . " " . $size_lenght_units . " " . $sizes_specific_color;
              // echo "$association_sizes";

              $association_sizes = str_replace('  ', '', $association_sizes);
  
              // echo "$association_sizes";
  
            /*
            =====================RESUMER DRAPES===================================

                NAME = $Name_drapes
                CLEANLINESS = $cleanliness_drapes
                SIZE = $association_sizes
                ADHESIVNESS = $adhesiveness_drapes
                ELASTICITY = ""
                HOLED = $holed_drapes

            */
            $Name = $Name_drapes ." " .  $cleanliness_drapes . " " . $association_sizes  . " ". $adhesiveness_drapes . " ". $holed_drapes;
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

            - CLEANLINESS : $cleanliness_drapes

            VARIABLE PAS OBLIGATOIRE

            - SIZES : $association_sizes
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
            - ADHESIVNESS : $adhesiveness_drapes_bd
            - ELASTICITY : "NULL"
            - HOLE : $holed_drapes_bd
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
  
              $sql_cons_med_id_drape = "INSERT INTO `cons_med_id` (
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
              '$cleanliness_drapes',
              /*SIZE*/
              '$association_sizes', 
                /*WIDTH*/
                  '$size_width', '$units_size_width', 
                /*LENGHT*/ 
                  '$size_lenght', '$units_size_lenght', 
                /*THICKNESS*/ 
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
              '$adhesiveness_drapes_bd',
              'NULL', 
              '$holed_drapes_bd',
              'NULL',
              /*NEEDLE*/
              'NULL',
              'NULL',
              'NULL',
              'NULL',
              'NULL',
              /*PACKAGES*/ 
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
              $query_cons_med_id_drape = $db->prepare($sql_cons_med_id_drape);
              //On execute la requete
             $query_cons_med_id_drape->execute();
               //On recupere l'id de l'article
               $cons_med_id = $db->lastInsertId();
                }
            }else {exit($_SESSION["error"] =["The fils isn't complet"]);}
            // VIDE OU ERREUR
            /*
  ================================================================ ADHESIVE END ==========================================
            */
    ?>