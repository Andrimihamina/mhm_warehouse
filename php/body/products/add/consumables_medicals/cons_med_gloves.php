<?php
if(
    isset(
            /*
            ========================== NAME PRINCIPALE =======================
            */
            $_POST["Name_gloves"], 
             /*
            ========================== NAME PRINCIPALE =======================
            */
            $_POST["brand_name_gloves"], 
            /*
            ==================== CLEANLINESS-GLOVES==============================
            */
            $_POST["cleanliness_gloves"],
            /*
             ==================== LATEX OR NITRIL ==============================
             */
            $_POST["types_gloves"],
            /*
             ==================== POWDERED ==============================
             */
            $_POST["powder_gloves"],
            
            /*
            =================== PERUMPTION DATE =====================
            */
            $_POST["perumption_date"],
            
            /*
            ==================== SIZES ==============================
            */
            // SPECIFIC SIZE
                    $_POST["sizes_specific_gloves"],
            // SIZE UNITS
                    $_POST["size_units_gloves"], 
            // QUANTITY ON THE PACKAGES
                    $_POST["quantity_on_package_gloves"],
            )
            /*
            =================== N'EST PAS VIDE ========================
            */
                && !empty($_POST["Name_gloves"])
                && !empty($_POST["brand_name_gloves"])
                && !empty($_POST["cleanliness_gloves"])
                && !empty($_POST["types_gloves"])
                && !empty($_POST["powder_gloves"])
                && !empty($_POST["quantity_on_package_gloves"])
                && !empty($_POST["perumption_date"])
            ){

            /*
            ============== IDENTIFCATION VARIABLE ============
            */
            // NAME
              $Name_gloves= strip_tags($_POST["Name_gloves"]);
              $_SESSION["error"] =[];
                // print_r($Name_gloves);

             // BRAND
              $brand_name_gloves= strip_tags($_POST["brand_name_gloves"]);
              $_SESSION["error"] =[];
                // print_r($brand_name_gloves);
  
            // CLEANLINESS
              $cleanliness_gloves= strip_tags($_POST["cleanliness_gloves"]);
              $_SESSION["error"] =[];
                // print_r($cleanliness_gloves);
  
            // LATEX OR NITRIL
              $types_gloves= strip_tags($_POST["types_gloves"]);
              $_SESSION["error"] =[];
                // print_r($types_gloves);
            
            // POWDERED
              $powder_gloves= strip_tags($_POST["powder_gloves"]);
              $_SESSION["error"] =[];
                // print_r($powder_gloves);
  
            // SIZES
              // SIZES SPECIFIC
              $sizes_specific_gloves= strip_tags($_POST["sizes_specific_gloves"]);
              $_SESSION["error"] =[];
                  // print_r($sizes_specific_gloves);

             // SIZES UNITS
              $size_units_gloves= strip_tags($_POST["size_units_gloves"]);
              $_SESSION["error"] =[];
                  // print_r($size_units_gloves);
  
            // QUANTITY ON THE PACKAGE
              $quantity_on_package_gloves= strip_tags($_POST["quantity_on_package_gloves"]);
              $_SESSION["error"] =[];
                  // print_r($quantity_on_package_gloves);


            // PERUMTPTION DATE
                $perumption_date= strip_tags($_POST["perumption_date"]);
                $_SESSION["error"] =[];
                  // print_r($perumption_date);
              
            /*
             =========================== MODULATION ===========================
            */

             //BRAND NAME  
                $brand_cons_med = $brand_name_gloves;

            // ----------------------SIZE
            // GAUZES
              $sizes_gauge_needles = "Chooses Sizes...";

              if($sizes_gauge_needles != "Chooses Sizes..."){
                $sizes_gauzes = $sizes_gauge_needles;
              }else{
                $sizes_gauzes = "NULL";
              }

            // SPECIFIC
              if($sizes_specific_gloves != "Chooses Sizes..."){
                $sizes_specific = $sizes_specific_gloves;
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

            // SPECIFIC UNITS
              if($size_units_gloves != ""){
                $sizes_units_bd = $size_units_gloves;
                $sizes_units = $size_units_gloves;
              }else{
                $sizes_units = "";
                $sizes_units_bd = "NULL";
              }

            // POWDER
             if($powder_gloves !="NULL"){
                $powder_gloves_bd = "$powder_gloves";
                $powder_gloves = "$powder_gloves";
             }else{
                $powder_gloves_bd = "NULL";
                $powder_gloves = "";
             }

            // COLOR
            $sizes_color_gauzes = "Chooses Sizes...";

            if($sizes_color_gauzes != "Chooses Sizes..."){
              $sizes_color = $sizes_color_gauzes;
            }else{
              $sizes_color = "NULL";
            }

            // WIDTH
            
                $size_width = "NULL";
                $units_size_width = "NULL";
              

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
  
            // SPECIFIC SIZE
            $sizes_specific_affiche = $affiche_sizes_specific;
  
              if($sizes_specific_affiche == "NULL"){
                $sizes_specific_affiche ="";
              } else {$sizes_specific_affiche = $sizes_specific_affiche;}

            /*
            ============================== ASSOCIATION ==================================
            */
  
              $association_sizes = $sizes_specific_affiche . " " . $sizes_units . " " . "inbox : " ."". $quantity_on_package_gloves;
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
            $Name = $Name_gloves ." " .  $cleanliness_gloves . " " . $association_sizes  . " ". $types_gloves . " ". $powder_gloves;
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

            - CLEANLINESS : $cleanliness_gloves

            VARIABLE PAS OBLIGATOIRE
            - SIZES : $association_sizes
            - SIZE WIDTH : "$size_width"
            - UNITS SIZE WIDTH : $units_size_width
            - SIZE LENGHT : $size_lenght
            - UNITS SIZE LENGHT : $units_size_lenght
            - SIZE THICKNESS : $size_thickness
            - UNITS SIZE THICKNESS : $units_size_thickness

            - SIZE CHARRIERS : "$sizes_charriere
            - SIZE SPECIFIC : "$sizes_specific"
            - SIZE COLOR : "NULL"
            - SIZE GAUZE : $sizes_specific_gauzes

            - SIZE UNITS : "$sizes_units"

            OTHERS
            - ADHESIVNESS : "NULL"
            - ELASTICITY : "NULL"
            - POWDER/HOLE : "$powder_gloves_bd"
            - FORMS : $types_gloves

             NEEDLE
            - NEEDLE : "NULL"
            - NEEDLE FORM : "NULL"
            - NEEDLE CIRCLE : "NULL"
            - NEEDLE SIZES : "NULL"
            - UNITS NEEDLES SIZES : "NULL"

            PACKAGE
            - PACKAGE : "$quantity_on_package_gloves"
            - UNITS PACKAGE : NULL

            - MEDICATION : NULL
            - NAME MEDICATION : NULL

            - EXPIRATION DATE . $perumption_date
            
            - NAME ADDING : $name_adding
            - CONS IMAGE : $file_name

            */
  
              $sql_cons_med_id_gloves = "INSERT INTO `cons_med_id` (
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
              '$cleanliness_gloves',
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
                '$sizes_specific', 
                /*COLOR*/
                'NULL',
                /*GAUZES*/
                '$sizes_specific_gauzes',
                /*UNITS*/  
              '$sizes_units_bd', 
              /*OTHERS*/
              'NULL',
              'NULL',
              '$powder_gloves_bd', 
              '$types_gloves',
              /*NEEDLE*/
              'NULL',
              'NULL',
              'NULL',
              'NULL',
              'NULL',
              /*PACKAGES*/
              '$quantity_on_package_gloves', 'NULL',
               /*MEDICATION*/
              'NULL','NULL',
             /*EXPIRATION DATE*/
              '$perumption_date',
              /*RESPONSIBLE*/
              '$name_adding', 
              /*IMG*/
              '$file_name')";
  
              //On prerare la requete
              $query_cons_med_id_gloves = $db->prepare($sql_cons_med_id_gloves);
              //On execute la requete
             $query_cons_med_id_gloves->execute(); 
              //On recupere l'id de l'article
              $cons_med_id = $db->lastInsertId();
                }
            } else {$_SESSION["error"] =["The fils isn't complet"];}
            // VIDE OU ERREUR
            /*
  ================================================================ ADHESIVE END ==========================================
            */
    ?>