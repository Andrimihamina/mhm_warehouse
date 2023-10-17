<?php
if(
    isset(
            /*
            ========================== NAME PRINCIPALE =======================
            */
            $_POST["Name_masks"], 
             /*
            ========================== NAME PRINCIPALE =======================
            */
            $_POST["brand_name_masks"], 
            /*
            ==================== TYPE==============================
            */
            $_POST["types_masks"],
            /*
            ==================== SIZES ==============================
            */
            // SIZE UNITS
            $_POST["sizes_mesurs_masks"],
            /*
            =================== PERUMPTION DATE =====================
            */
            $_POST["perumption_date"],
            
            )
            /*
            =================== N'EST PAS VIDE ========================
            */
                && !empty($_POST["Name_masks"])
                && !empty($_POST["brand_name_masks"])
                && !empty($_POST["types_masks"])
                && !empty($_POST["sizes_mesurs_masks"])
                && !empty($_POST["perumption_date"])
            ){

            /*
            ============== IDENTIFCATION VARIABLE ============
            */
            // NAME
              $Name_syringes= strip_tags($_POST["Name_masks"]);
              $_SESSION["error"] =[];
                // print_r($Name_syringes);

            // BRAND
              $brand_name_masks= strip_tags($_POST["brand_name_masks"]);
              $_SESSION["error"] =[];
                // print_r($brand_name_syringes);
            
            // TYPES
              $types_masks= strip_tags($_POST["types_masks"]);
              $_SESSION["error"] =[];
                // print_r($types_masks);
 
            // SIZES
              $sizes_mesurs_masks= strip_tags($_POST["sizes_mesurs_masks"]);
              $_SESSION["error"] =[];
                // print_r($sizes_mesurs_masks);

            // PERUMTPTION DATE
                $perumption_date= strip_tags($_POST["perumption_date"]);
                $_SESSION["error"] =[];
                  // print_r($perumption_date);
              
            /*
             =========================== MODULATION ===========================
            */

             //BRAND NAME  
                $brand_cons_med = $brand_name_masks;


            // ----------------------SIZE
            // GAUZES
            $sizes_gauge_syringes_needles= "Chooses Sizes...";

              if($sizes_gauge_syringes_needles != "Chooses Sizes..."){
                $sizes_gauzes = $sizes_gauge_syringes_needles;
              }else{
                $sizes_gauzes = "NULL";
              }

            // SPECIFIC
              $sizes_specific_syringes= "Chooses Sizes...";

              if($sizes_specific_syringes != "Chooses Sizes..."){
                $sizes_specific = $sizes_specific_syringes;
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
            $sizes_gauge_syringes_needles= "Chooses Sizes...";

            if($sizes_gauge_syringes_needles != "Chooses Sizes..."){
                  $sizes_gauzes = $sizes_gauge_syringes_needles;
                }else{
                  $sizes_gauzes = "NULL";
                }

            // COLOR
            $sizes_color_gauzes = "Chooses Sizes...";

            if($sizes_color_gauzes != "Chooses Sizes..."){
              $sizes_color = $sizes_color_gauzes;
            }else{
              $sizes_color = "NULL";
            }

           // WIDTH
           $width_syringes ="";
           $units_width_syringes ="Chooses Sizes...";

              if($width_syringes != "" OR $units_width_syringes != "Chooses Sizes..."){
                $size_width = $width_syringes;
                $units_size_width = $units_width_syringes;
              }else{
                $size_width = "NULL";
                $units_size_width = "NULL";
              }
              

            // LENGHT
             
                $size_lenght = "NULL";
                $units_size_lenght = "NULL";
              
            
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
  
            // SPECIFIC GAUZES
            $sizes_gauzes_affiche = $sizes_specific_gauzes;
    
            if($sizes_gauzes_affiche == "NULL"){
              $sizes_gauzes_affiche ="";
            } else {$sizes_gauzes_affiche = $sizes_gauzes_affiche;}


            // SPECIFIC SIZE
            $sizes_specific_affiche = $sizes_gauge_syringes_needles;
  
              if($sizes_specific_affiche == "NULL"){
                $sizes_specific_affiche ="";
              } else {$sizes_specific_affiche = $sizes_specific_affiche;}

            // UNITS WIDTH
            $size_width_units = $size_width . $affiche_units_sizes_width ;
  
            if($size_width_units == "NULLNULL"){
              $size_width_units ="";
            } else {$size_width_units = $size_width_units;}
            /*
            ============================== ASSOCIATION ==================================
            */
  
              $association_sizes = $sizes_mesurs_masks;
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
            $Name = $Name_syringes ." " .  $types_masks . " ". "Size". " ". $association_sizes;
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

            - CLEANLINESS : "NULL"

            VARIABLE PAS OBLIGATOIRE
            - SIZES : $association_sizes
            - SIZE WIDTH : "$size_width"
            - UNITS SIZE WIDTH : $units_size_width
            - SIZE LENGHT : $size_lenght
            - UNITS SIZE LENGHT : $units_size_lenght
            - SIZE THICKNESS : $size_thickness
            - UNITS SIZE THICKNESS : $units_size_thickness

            - SIZE CHARRIERS : "$sizes_charriere
            - SIZE SPECIFIC : "NULL"
            - SIZE COLOR : "NULL"
            - SIZE GAUZE : "NULL"

            - SIZE UNITS : "$sizes_mesurs_masks"

            OTHERS
            - ADHESIVNESS : "NULL"
            - ELASTICITY : "NULL"
            - POWDER/HOLE : "$types_masks"
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
  
              $sql_cons_med_id_masks = "INSERT INTO `cons_med_id` (
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
              'NULL',
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
                '$sizes_mesurs_masks', 
              /*OTHERS*/
              'NULL',
              'NULL',
              '$types_masks', 
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
              $query_cons_med_id_masks = $db->prepare($sql_cons_med_id_masks);
              //On execute la requete
             $query_cons_med_id_masks->execute(); 
              //On recupere l'id de l'article
              $cons_med_id = $db->lastInsertId();
                }
            }else {exit($_SESSION["error"] =["The fils isn't complet"]);}
            // VIDE OU ERREUR
            /*
  ================================================================ ADHESIVE END ==========================================
            */
    ?>