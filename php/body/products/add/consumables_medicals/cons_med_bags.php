<?php
if(
    isset(
            /*
            ========================== NAME PRINCIPALE =======================
            */
            $_POST["Name_bags"], 
             /*
            ========================== NAME PRINCIPALE =======================
            */
            $_POST["brand_name_bags"], 
            /*
            ==================== CLEANLINESS-NEEDLES==============================
            */
            $_POST["cleanliness_bags"],
            /*
            ==================== TYPE==============================
            */
            $_POST["types_bags"],
            /*
            =================== PERUMPTION DATE =====================
            */
            $_POST["perumption_date"],
            
            )
            /*
            =================== N'EST PAS VIDE ========================
            */
                && !empty($_POST["Name_bags"])
                && !empty($_POST["brand_name_bags"])
                && !empty($_POST["cleanliness_bags"])
                && !empty($_POST["types_bags"])
                && !empty($_POST["perumption_date"])
            ){

            /*
            ============== IDENTIFCATION VARIABLE ============
            */
            // NAME
              $Name_bags= strip_tags($_POST["Name_bags"]);
              $_SESSION["error"] =[];
                // print_r($Name_bags);

            // BRAND
              $brand_name_bags= strip_tags($_POST["brand_name_bags"]);
              $_SESSION["error"] =[];
                // print_r($brand_name_bags);
            
            // CLEANLINESS
              $cleanliness_bags= strip_tags($_POST["cleanliness_bags"]);
              $_SESSION["error"] =[];
                // print_r($cleanliness_bags);
            
            // TYPES
              $types_bags= strip_tags($_POST["types_bags"]);
              $_SESSION["error"] =[];
                // print_r($types_bags);

            // SIZES
              
              // WIDTH
                $width_bags= strip_tags($_POST["width_bags"]);
                $_SESSION["error"] =[];
                    // print_r($width_bags);

                $units_width_bags= strip_tags($_POST["units_width_bags"]);
                $_SESSION["error"] =[];
                    // print_r($units_width_bags);

              // LENGHT
                $length_bags= strip_tags($_POST["length_bags"]);
                $_SESSION["error"] =[];
                    // print_r($length_bags);

                $units_length_bags= strip_tags($_POST["units_length_bags"]);
                $_SESSION["error"] =[];
                    // print_r($units_length_bags);

              // SIZES SPECIFIC
                $sizes_specific_bags= strip_tags($_POST["sizes_specific_bags"]);
                $_SESSION["error"] =[];
                  // print_r($sizes_specific_bags);
              
              // SIZES GAUZE
                $sizes_gauge_bags= strip_tags($_POST["sizes_gauge_bags"]);
                $_SESSION["error"] =[];
                  // print_r($sizes_gauge_bags);
              
              // SIZES CHARRIERES
                $sizes_charrieres_bags= strip_tags($_POST["sizes_charrieres_bags"]);
                $_SESSION["error"] =[];
                  // print_r($sizes_charrieres_bags);
              
              // SIZES COLOR
                $sizes_color_bags= strip_tags($_POST["sizes_color_bags"]);
                $_SESSION["error"] =[];
                    // print_r($sizes_color_bags);

            // PERUMTPTION DATE
                $perumption_date= strip_tags($_POST["perumption_date"]);
                $_SESSION["error"] =[];
                  // print_r($perumption_date);
              
            /*
             =========================== MODULATION ===========================
            */

            //BRAND NAME  
                $brand_cons_med = $brand_name_bags;

            // ----------------------SIZE
            

            // SPECIFIC TAILLE M/S/L
              if($sizes_specific_bags != "Chooses Sizes..."){
                $sizes_specific = $sizes_specific_bags;
              }else{
                $sizes_specific = "NULL";
              }
            
            // CHARRIERE
              if($sizes_charrieres_bags != "Chooses Sizes..."){
                $sizes_charriere = $sizes_charrieres_bags;
              }else{
                $sizes_charriere = "NULL";
              }
            
            // GAUZES
              if($sizes_gauge_bags != "Chooses Sizes..."){
                $sizes_gauzes = $sizes_gauge_bags;
              }else{
                $sizes_gauzes = "NULL";
              }

            // COLOR
            if($sizes_color_bags != "Chooses Sizes..."){
              $sizes_color = $sizes_color_bags;
            }else{
              $sizes_color = "NULL";
            }

           // WIDTH
              if($width_bags != "" AND $units_width_bags != "Chooses Sizes..."){
                $size_width = $width_bags;
                $units_size_width = $units_width_bags;
              }else{
                $size_width = "NULL";
                $units_size_width = "NULL";
              }
              

            // LENGHT
            if($length_bags != "" AND $sizes_specific_bags != "Chooses Sizes..."){
              $size_lenght = $length_bags;
              $units_size_lenght = $sizes_specific_bags;
            }else{
              $size_lenght = "NULL";
              $units_size_lenght = "NULL";
            }

            // THICKNESS
              
                $size_thickness = "NULL";
                $units_size_thickness = "NULL";
              

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
  
            // SIZES SPECIFIC
            $sizes_specific_affiche = $affiche_sizes_specific;
    
            if($sizes_specific_affiche == "NULL"){
              $sizes_specific_affiche ="";
            } else {$sizes_specific_affiche = $sizes_specific_affiche;}

             // SIZES CHARRIERES
             $sizes_charrieres_affiche = $sizes_charrieres;
    
             if($sizes_charrieres_affiche == "NULL"){
               $sizes_charrieres_affiche ="";
             } else {$sizes_charrieres_affiche = $sizes_charrieres_affiche;}
            
            // SIZES GAUZES
            $sizes_gauzes_affiche = $sizes_specific_gauzes;
    
            if($sizes_gauzes_affiche == "NULL"){
              $sizes_gauzes_affiche ="";
            } else {$sizes_gauzes_affiche = $sizes_gauzes_affiche;}


             // SIZES COLOR
             $sizes_specific_color = $sizes_specific_color;
              
             if($sizes_specific_color == "NULL"){
               $sizes_specific_color = "";
              } else {$sizes_specific_color = $sizes_specific_color;}

            // UNITS WIDTH
            $size_width_units = $size_width . $affiche_units_sizes_width ;
  
            if($size_width_units == "NULLNULL"){
              $size_width_units ="";
            } else {$size_width_units = $size_width_units;}

            // UNITS LENGHT
            $size_lenght_units = $size_lenght . $affiche_units_size_lenght ;
  
            if($size_lenght_units == "NULLNULL"){
              $size_lenght_units ="";
            } else {$size_lenght_units = $size_lenght_units;}
            /*
            ============================== ASSOCIATION ==================================
            */
  
              $association_sizes = $size_width_units ." ".$size_lenght_units ." ". $sizes_gauzes_affiche ." ". $sizes_charrieres_affiche ." ". $sizes_specific_color;
              // echo "$association_sizes";

              $association_sizes = str_replace('  ', '', $association_sizes);
  
              // echo "$association_sizes";
  
            /*
            =====================RESUMER GLOVES===================================

                NAME = $Name_gloves
                CLEANLINESS = $cleanliness_gloves
                SIZE = $association_sizes
                TYPES LATE / NTRIL = $adhesiveness_gauzes
                POWDERED = $forms_gauzes
                MEDICATION = $medication_name_gauzes


            */
            $Name = $Name_bags ." " .  $types_bags . " ". $cleanliness_bags . " ". $association_sizes;
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
            {
            $_SESSION["error"][] = "This consumables is alredy register";
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

            - CLEANLINESS : "$cleanliness_bags"

            VARIABLE PAS OBLIGATOIRE
            - SIZES : $association_sizes
            - SIZE WIDTH : "$size_width"
            - UNITS SIZE WIDTH : $units_size_width
            - SIZE LENGHT : $size_lenght
            - UNITS SIZE LENGHT : $units_size_lenght
            - SIZE THICKNESS : $size_thickness
            - UNITS SIZE THICKNESS : $units_size_thickness

            - SIZE CHARRIERS : $sizes_charriere
            - SIZE SPECIFIC : "$sizes_specific"
            - SIZE COLOR : "$sizes_color"
            - SIZE GAUZE : "$sizes_gauzes"

            - SIZE UNITS : "NULL"

            OTHERS
            - ADHESIVNESS : "NULL"
            - ELASTICITY : "NULL"
            - POWDER/HOLE : "$types_bags"
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

            - MEDICATION : NULL
            - NAME MEDICATION : NULL

            - EXPIRATION DATE . $perumption_date
            
            - NAME ADDING : $name_adding
            - CONS IMAGE : $file_name

            */
  
              $sql_cons_med_id_bags = "INSERT INTO `cons_med_id` (
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
              '$cleanliness_bags',
              /*SIZES*/ 
                '$association_sizes',
                /*WIDTH*/ 
                '$size_width', '$units_size_width', 
                /*LENGHT*/
                '$size_lenght', '$units_size_lenght', 
                /*THICKNESS*/
                '$size_thickness', '$units_size_thickness', 
                /*CHARRIERS*/
                '$sizes_charriere',
                /*SPECIFIC*/
                '$sizes_specific', 
                /*COLOR*/
                '$sizes_color',
                /*GAUZES*/
                '$sizes_gauzes',
                /*UNITS*/  
                'NULL', 
              /*OTHERS*/
              'NULL',
              'NULL',
              '$types_bags', 
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
              'NULL','NULL',
             /*EXPIRATION DATE*/
              '$perumption_date',
              /*RESPONSIBLE*/
              '$name_adding', 
              /*IMG*/
              '$file_name')";
  
              //On prerare la requete
              $query_cons_med_id_bags = $db->prepare($sql_cons_med_id_bags);
              //On execute la requete
             $query_cons_med_id_bags->execute(); 
              //On recupere l'id de l'article
              $cons_med_id = $db->lastInsertId();
                }
            }else {$_SESSION["error"] =["The fils isn't complet"];}
            // VIDE OU ERREUR
            /*
  ================================================================ ADHESIVE END ==========================================
            */
    ?>