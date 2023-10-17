<?php
if( 
    isset(
            /*
            ========================== NAME PRINCIPALE =======================
            */
            $_POST["Name_needles"], 
             /*
            ========================== NAME PRINCIPALE =======================
            */
            $_POST["brand_name_needles"], 
            /*
            ==================== CLEANLINESS-NEEDLES==============================
            */
            $_POST["cleanliness_needles"],
            
            /*
             ==================== TYPES-NEEDLES ==============================
             */
            $_POST["types_needles"],
            
            /*
            =================== PERUMPTION DATE =====================
            */
            $_POST["perumption_date"],
            
            /*
            ==================== SIZES ==============================
            */
            // GAUZES
                    $_POST["sizes_gauge_needles"],
            // SPECIFIC COLOR
                    $_POST["sizes_color_needles"],
            // LONGEUR
                    $_POST["length_needles"],
                    $_POST["units_length_needles"], 
            )
            /*
            =================== N'EST PAS VIDE ========================
            */
                && !empty($_POST["Name_needles"])
                && !empty($_POST["brand_name_needles"])

                && !empty($_POST["cleanliness_needles"])
                
                && !empty($_POST["types_needles"])

                && !empty($_POST["perumption_date"])
            ){

            /*
            ============== IDENTIFCATION VARIABLE ============
            */
            // NAME
              $Name_needles= strip_tags($_POST["Name_needles"]);
              $_SESSION["error"] =[];
                // print_r($Name_needles);

             // BRAND
              $brand_name_needles= strip_tags($_POST["brand_name_needles"]);
              $_SESSION["error"] =[];
                // print_r($brand_name_needles);
  
            // CLEANLINESS
              $cleanliness_needles= strip_tags($_POST["cleanliness_needles"]);
              $_SESSION["error"] =[];
                // print_r($cleanliness_needles);
            
            // TYPES
              $types_needles= strip_tags($_POST["types_needles"]);
              $_SESSION["error"] =[];
                // print_r($types_needles);
  
            // SIZES
  
              // LENGHT
                $length_needles= strip_tags($_POST["length_needles"]);
                $_SESSION["error"] =[];
                    // print_r($length_needles);

                $units_length_needles= strip_tags($_POST["units_length_needles"]);
                $_SESSION["error"] =[];
                    // print_r($units_length_needles);

              // SPECIFIC COLOR
                $sizes_color_needles= strip_tags($_POST["sizes_color_needles"]);
                $_SESSION["error"] =[];
                    // print_r($sizes_color_needles);
              
              // SPECIFIC COLOR
                $sizes_gauge_needles= strip_tags($_POST["sizes_gauge_needles"]);
                $_SESSION["error"] =[];
                    // print_r($sizes_gauge_needles);

            // PERUMTPTION DATE
                $perumption_date= strip_tags($_POST["perumption_date"]);
                $_SESSION["error"] =[];
                  // print_r($perumption_date);
              
            /*
             =========================== MODULATION ===========================
            */

             //BRAND NAME  
                $brand_cons_med = $brand_name_needles;

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
            if($sizes_gauge_needles != "Chooses Sizes..."){
              $sizes_gauzes = $sizes_gauge_needles;
            }else{
              $sizes_gauzes = "NULL";
            }

            // COLOR
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
              if($length_needles != "" AND $units_length_needles != ""){
                $size_lenght = $length_needles;
                $units_size_lenght = $units_length_needles;
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
  
  
            /*
            ============================== ASSOCIATION ==================================
            */
  
              $association_sizes = $sizes_gauzes_affiche ." ". $size_lenght_units . " " . $sizes_specific_color;
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
            $Name = $Name_needles . " ". $types_needles ." " .  $cleanliness_needles . " " . $association_sizes  ;
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
              exit;}
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

            - CLEANLINESS : $cleanliness_needles

            VARIABLE PAS OBLIGATOIRE

            - SIZES : $association_sizes
            - SIZE WIDTH : $size_width
            - UNITS SIZE WIDTH : $units_size_width
            - SIZE LENGHT : $size_lenght
            - UNITS SIZE LENGHT : $units_size_lenght
            - SIZE THICKNESS : $size_thickness
            - UNITS SIZE THICKNESS : $units_size_thickness

            - SIZE CHARRIERS : "NULL"
            - SIZE SPECIFIC : "NULL"
            - SIZE COLOR : "NULL"
            - SIZE GAUZE : $sizes_specific_gauzes

            - SIZE UNITS : "NULL"

            OTHERS
            - ADHESIVNESS : "NULL"
            - ELASTICITY : "NULL"
            - HOLE : "NULL"
            - TYPES/FORMS : $types_needles

             NEEDLE
            - NEEDLE : "NULL"
            - NEEDLE FORM : "NULL"
            - NEEDLE CIRCLE : "NULL"
            - NEEDLE SIZES : "NULL"
            - UNITS NEEDLES SIZES : "NULL"
          
            PACKAGE
            - PACKAGE : "null"
            - UNITS PACKAGE : NULL

            - MEDICATION : "NULL"
            - NAME MEDICATION : "NULL"

            - EXPIRATION DATE . $perumption_date
            
            - NAME ADDING : $name_adding
            - CONS IMAGE : $file_name

            */
  
              $sql_cons_med_id_needles = "INSERT INTO `cons_med_id` (
              `id`, `created_date`, 
              `cons_med_abrev`, `cons_med_nbr_abrev`, `id_code_cons_med`, 
              `Descriptions`, 
              `brand_cons_med`, 
              `cleanliness`,
              `sizes`, 
              `sizes_width`, `units_sizes_width`, 
              `sizes_length`, `units_sizes_lenght`, 
              `size_thickness`, `units_size_thichness`,
              `sizes_charrieres`,
              `sizes_specific`, 
              `sizes_color`, 
              `sizes_gauzes`,
              `sizes_units`,
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
              `package`, `units_package`,
              `medication`, `name_medication`,
              `expiration_date`, 
              `name_adding`, `cons_image`) VALUES (
              NULL, current_timestamp(), 
              '$cons_med_abrev', '$cons_med_nbr_abrev', '$id_code_cons_med', 
              /*NAME*/
              '$Name', 
              '$brand_cons_med',
              /*CLEANLINESS*/
              '$cleanliness_needles',
              /*SIZES*/ 
              '$association_sizes',
              '$size_width', '$units_size_width', 
              '$size_lenght', '$units_size_lenght', 
              '$size_thickness', '$units_size_thickness',
              /*CHARRIERS*/
              'NULL', 
               /*SPECIFIC*/
              'NULL', 
              /*COLOR*/
              'NULL',
              /*GAUZES*/
              '$sizes_specific_gauzes',
              /*UNITS*/  
              'NULL', 
              /*OTHERS*/
              'NULL',
              'NULL', 
              'NULL',
              '$types_needles',
              /*NEEDLE*/
              'NULL',
              'NULL',
              'NULL',
              'NULL',
              'NULL',
              'NULL', 'NULL',
              'NULL','NULL',
              '$perumption_date',
              '$name_adding', '$file_name')";
  
              //On prerare la requete
              $query_cons_med_id_needles = $db->prepare($sql_cons_med_id_needles);
              //On execute la requete
             $query_cons_med_id_needles->execute();
               //On recupere l'id de l'article
               $cons_med_id = $db->lastInsertId();
                }
            } else {exit($_SESSION["error"] =["The fils isn't complet"]);}
            // VIDE OU ERREUR
            /*
  ================================================================ ADHESIVE END ==========================================
            */
    ?>