<?php
if( 
    isset(
            /*
            ========================== NAME PRINCIPALE =======================
            */
            $_POST["Name_sutures"], 
             /*
            ========================== NAME BRAND =======================
            */
            $_POST["brand_name_sutures"], 
            /*
            ==================== RESORBABLITY ==============================
            */
            $_POST["resorbability_sutures"],
          
            
            /*
            =================== PERUMPTION DATE =====================
            */
            $_POST["perumption_date"],
            )
            /*
            =================== N'EST PAS VIDE ========================
            */
                && !empty($_POST["Name_sutures"])
                && !empty($_POST["brand_name_sutures"])

                && !empty($_POST["resorbability_sutures"])
                

                && !empty($_POST["perumption_date"])
            ){


            /*
            ============== IDENTIFCATION VARIABLE ============
            */
            // NAME
              $Name_sutures= strip_tags($_POST["Name_sutures"]);
              $_SESSION["error"] =[];
                // print_r($Name_sutures);

             // BRAND
              $brand_name_sutures= strip_tags($_POST["brand_name_sutures"]);
              $_SESSION["error"] =[];
                // print_r($brand_name_sutures);
  
            // RESORBABILITY
              $resorbability_sutures= strip_tags($_POST["resorbability_sutures"]);
              $_SESSION["error"] =[];
                // print_r($resorbability_sutures);

            // RESORBABILITY TIMES
              $resorbability_time_sutures= strip_tags($_POST["resorbability_time_sutures"]);
              $_SESSION["error"] =[];
                // print_r($resorbability_time_sutures);

            // SIZES
  
              // SIZES UNITS
                $units_sutures= strip_tags($_POST["units_sutures"]);
                $_SESSION["error"] =[];
                    // print_r($units_sutures);

                $length_sutures= strip_tags($_POST["length_sutures"]);
                $_SESSION["error"] =[];
                    // print_r($length_sutures);
                $units_length_sutures_sutures= strip_tags($_POST["units_length_sutures_sutures"]);
                $_SESSION["error"] =[];
                   // print_r($units_length_sutures_sutures);

            // NEEDLES
                // NEEDLES
                    $needle_sutures= strip_tags($_POST["needle_sutures"]);
                    $_SESSION["error"] =[];
                        // print_r($needle_sutures);

              // SI LE FIL DE SUTURE A UNE AIGUILLE
               if($needle_sutures == "Needle"){
                // NEEDLES FORMS
                    $needle_form_sutures= strip_tags($_POST["needle_form_sutures"]);
                    $_SESSION["error"] =[];
                        // print_r($needle_form_sutures);

                // NEEDLES CIRCLES
                    $needle_circle_sutures= strip_tags($_POST["needle_circle_sutures"]);
                    $_SESSION["error"] =[];
                        // print_r($needle_circle_sutures);
                    
                // NEEDLES SIZES
                    $size_mesurs_needles_sutures= strip_tags($_POST["size_mesurs_needles_sutures"]);
                    $_SESSION["error"] =[];
                        // print_r($size_mesurs_needles_sutures);
                    
                    $units_size_mesurs_needles_sutures= strip_tags($_POST["units_size_mesurs_needles_sutures"]);
                    $_SESSION["error"] =[];
                        // print_r($units_size_mesurs_needles_sutures);
               }
              // SI LE FIL DE SUTURE N'A PAS D'AIGUILLE 
              else{
                  // NEEDLES FORMS
                    	$needle_form_sutures= "";

                  // NEEDLES CIRCLES
                      $needle_circle_sutures= "";
                      
                  // NEEDLES SIZES
                      $size_mesurs_needles_sutures= "";
                      
                      $units_size_mesurs_needles_sutures = "Choose units...";
               }

            // PERUMTPTION DATE
                $perumption_date= strip_tags($_POST["perumption_date"]);
                $_SESSION["error"] =[];
                  // print_r($perumption_date);
              
            /*
             =========================== MODULATION ===========================
            */

             //BRAND NAME  
                $brand_cons_med = $brand_name_sutures;

            // CLEANLINESS 
                $cleanliness_sutures = "NULL";

            // RESPORBABILITY TIMES
                $resorbability_time_sutures_bd = $resorbability_time_sutures;

                if($resorbability_time_sutures != "NULL"){
                  $resorbability_time_sutures = $resorbability_time_sutures;
                }else{
                  $resorbability_time_sutures = "";
                }

            // BANDAGE ADHESIVNESS 
                $adhesiveness_needles_bd = "NULL";
               
            // MEDICATION
                $medication_needles_bd = "NULL";

            // MEDICATION NAME
                $medication_name_needles_bd = "NULL";

            // ----------------------SIZE
            
            // SPECIFIC
            $sizes_specific_needle = "Chooses Sizes...";

            if($sizes_specific_needle != "Chooses Sizes..."){
              $sizes_specific = $sizes_specific_needle;
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

            // GAUZES
            $sizes_gauge_needles = "Chooses Sizes...";

            if($sizes_gauge_needles != "Chooses Sizes..."){
              $sizes_gauzes = $sizes_gauge_needles;
            }else{
              $sizes_gauzes = "NULL";
            }

            // COLOR
            $sizes_color_needles = "Chooses Sizes...";

            if($sizes_color_needles != "Chooses Sizes..."){
              $sizes_color = $sizes_color_needles;
            }else{
              $sizes_color = "NULL";
            }

            // WIDTH
            $width_needles ="";
            $units_width_needles ="";
              if($width_needles != "" AND $units_width_needles != ""){
                $size_width = $width_needles;
                $units_size_width = $width_needles;
              }else{
                $size_width = "NULL";
                $units_size_width = "NULL";
              }

            // LENGHT
              if($length_sutures != "" AND $units_length_sutures_sutures != ""){
                $size_lenght = $length_sutures;
                $units_size_lenght = $units_length_sutures_sutures;
              }else{
                $size_lenght = "NULL";
                $units_size_lenght = "NULL";
              }
            
            // THICKNESS
              $thickness_needles ="";
              $units_thickness_needles="";

              if($thickness_needles != "" AND $units_thickness_needles!= ""){
                $size_thickness = $thickness_needles;
                $units_size_thickness = $units_thickness_needles;
              }else{
                $size_thickness = "NULL";
                $units_size_thickness = "NULL";
              }
            
            // NEEDLE
            
            $units_size_mesurs_needles_sutures_aff = $units_size_mesurs_needles_sutures;

              $needle_sutures = $needle_sutures;
              $needle_form_sutures = $needle_form_sutures;
              $needle_circle_sutures = $needle_circle_sutures;
              $size_mesurs_needles_sutures = $size_mesurs_needles_sutures;
              $units_size_mesurs_needles_sutures = $units_size_mesurs_needles_sutures;


            if($needle_sutures == "Bobine"){
              $needle_sutures = $needle_sutures;
              $needle_form_sutures = "";
              $needle_circle_sutures = "";
              $size_mesurs_needles_sutures = "";
              $units_size_mesurs_needles_sutures = "";

              $needle_form_sutures_bd = "NULL";
              $needle_circle_sutures_bd = "NULL";
              $size_mesurs_needles_sutures_bd ="NULL";
              $units_size_mesurs_needles_sutures_bd ="NULL";
            }else{
              $needle_sutures = $needle_sutures;
              $needle_form_sutures = $needle_form_sutures;
              $needle_circle_sutures = $needle_circle_sutures;
              $size_mesurs_needles_sutures = $size_mesurs_needles_sutures;
              $units_size_mesurs_needles_sutures = $units_size_mesurs_needles_sutures;

              $needle_form_sutures_bd = $needle_form_sutures;
              $needle_circle_sutures_bd =  $needle_circle_sutures;
              $size_mesurs_needles_sutures_bd = $size_mesurs_needles_sutures;
              $units_size_mesurs_needles_sutures_bd = $units_size_mesurs_needles_sutures;
            }

            // NEEDLE SIZES
              if($size_mesurs_needles_sutures != "" ){
                $size_lenght_needles = $size_mesurs_needles_sutures;
                $units_size_lenght_needles = $units_size_mesurs_needles_sutures;
              }else{
                $size_lenght_needles = "NULL";
                $units_size_lenght_needles = "NULL";
              }

/* ORDRE D'ECRUTURE DU SIZES
            - 1ST : SIZES
            - 2DT : SIZES COLOR
            - 3EME : SIZES SPECIFIC
            - 4EME : SIZES WIDTH
            - 5EME : UNITS SIZES WIDTH
            - 6EME : SIZES LENGHT
            - 7EME : SIZES UNITS LENGHT
            - 8EME : SIZES THICKNESS
            - 9EME : SIZES UNITS THICKNESS
            - 10EME : QUANTITY ON THE PACKAGE
*/

            /*
            ============================ AFFICHAGE DU VALEUR REELE SIZE =============================
            */
            include_once("../../../../../php/body/products/add/consumables_medicals/affiche_sizes.php");
            include_once("../../../../../php/body/products/add/consumables_medicals/affiche_sizes_sututres.php");
  

            // SPECIFIC GAUZES
              $sizes_gauzes_affiche = $sizes_specific_gauzes;
    
              if($sizes_gauzes_affiche == "NULL"){
                $sizes_gauzes_affiche ="";
              } else {$sizes_gauzes_affiche = $sizes_gauzes_affiche;}

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

            // UNITS THICKNESS
              $size_thickness_units = $size_thickness . $affiche_units_size_thickness;
  
              if($size_thickness_units == "NULLNULL"){
                $size_thickness_units ="";
              } else {$size_thickness_units = $size_thickness_units;}
  
            
            // SIZES UNITS NEEDLES
            $size_lenght_units_needle = $size_mesurs_needles_sutures . $affiche_size_lenght_needles;
  
            if($size_lenght_units_needle == ""){
              $size_lenght_units_needle = "";
            } else 
            {$size_lenght_units_needle = $size_lenght_units_needle;}
  
            /*
            ============================== ASSOCIATION ==================================
            */
  
              $association_sizes = $units_sutures ." ". $size_lenght_units . " ". $needle_sutures . " ". $needle_form_sutures ." ". $needle_circle_sutures . " " . $size_lenght_units_needle;
              // echo "$association_sizes";

              $association_sizes = str_replace('  ', '', $association_sizes);
  
              // echo "$association_sizes";
  
            /*
            =====================RESUMER NEEDLES===================================

                NAME = $Name_needles
                CLEANLINESS = $cleanliness_needles
                SIZE = $association_sizes
                TYPES = c

            */
            $Name = $Name_sutures . " ". $resorbability_sutures ." " .  $resorbability_time_sutures . " " . $association_sizes  ;
                    // print_r($Name);
  
            // ENLEVER LES DOUBLE ESPACE
            $Name = str_replace('  ', ' ', $Name);
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

            - CLEANLINESS : $cleanliness_sutures

            VARIABLE PAS OBLIGATOIRE

            - SIZES : $association_sizes
            - SIZE WIDTH : $size_width
            - UNITS SIZE WIDTH : $units_size_width
            - SIZE LENGHT : $size_lenght
            - UNITS SIZE LENGHT : $units_size_lenght
            - SIZE THICKNESS : $size_thickness
            - UNITS SIZE THICKNESS : $units_size_thickness

            - SIZE CHARRIERS : "$sizes_charriere
            - SIZE SPECIFIC : "NULL"
            - SIZE COLOR : "NULL"
            - SIZE GAUZE : "NULL"

            - SIZE UNITS : "$units_sutures"

            OTHERS
            - ADHESIVNESS : "NULL"
            - ELASTICITY : "NULL"
            - HOLE : "$resorbability_time_sutures_bd"
            - TYPES/FORMS : $resorbability_sutures

            - NEEDLE: $needle_sutures
            - NEEDLE_FORM : $needle_form_sutures_bd
            - NEEDLE_CIRCLE : $needle_circle_sutures_bd
            - NEEDLE_SIZES : $size_mesurs_needles_sutures_bd
            - UNITS_NEEDLE_SIZES : `$units_size_mesurs_needles_sutures_bd`

            - PACKAGE : "NULL"
            - UNITS PACKAGE : NULL

            - MEDICATION : "NULL"
            - NAME MEDICATION : "NULL"

            - EXPIRATION DATE . $perumption_date
            
            - NAME ADDING : $name_adding
            - CONS IMAGE : $file_name

            */
  
            $sql_cons_med_id_sutures = "INSERT INTO `cons_med_id` (
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
              '$cleanliness_sutures',
              /*SIZES*/ 
                '$association_sizes',
                /*WIDTH*/ 
                '$size_width', '$units_size_width', 
                /*LENGHT*/
                '$size_lenght', '$units_size_lenght', 
                /*THICKNESS*/
                '$size_thickness', '$units_size_thickness', 
                /*CHARRIERS*/
                'NULL',
                /*SPECIFIC*/
                'NULL', 
                /*COLOR*/
                'NULL',
                /*GAUZES*/
                'NULL',
                /*UNITS*/  
              '$units_sutures', 
              /*OTHERS*/
              'NULL',
              'NULL',
              '$resorbability_time_sutures_bd', 
              '$resorbability_sutures',
              /*NEEDLE*/
              '$needle_sutures',
              '$needle_form_sutures_bd',
              '$needle_circle_sutures_bd',
              '$size_mesurs_needles_sutures_bd',
              '$units_size_mesurs_needles_sutures_bd',
              /*PACKAGES*/
              'NULL', 'NULL',
               /*MEDICATION*/
              'NULL','NULL',
             /*EXPIRATION DATE*/
              '$perumption_date',
              /*RESPONSIBLE*/
              '$name_adding', 
              /*IMG*/
              '$file_name')";
  
              //On prerare la requete
              $query_cons_med_id_sutures = $db->prepare($sql_cons_med_id_sutures);
              //On execute la requete
             $query_cons_med_id_sutures->execute();
               //On recupere l'id de l'article
               $cons_med_id = $db->lastInsertId();
                }
            }else {exit($_SESSION["error"] =["The fils isn't complet"]);}
            // VIDE OU ERREUR
            /*
  ================================================================ ADHESIVE END ==========================================
            */
    ?>