<?php
if(
    isset(
            /*
            ========================== NAME PRINCIPALE =======================
            */
            $_POST["Name_gauzes"], 
             /*
            ========================== NAME PRINCIPALE =======================
            */
            $_POST["brand_name_gauzes"], 
            /*
            ==================== CLEANLINESS-GAUZES==============================
            */
            $_POST["cleanliness_gauzes"],
            /*
             ==================== ADHESIVNESS-GAUZES ==============================
             */
            $_POST["adhesiveness_gauzes"],
            /*
             ==================== FORMS-GAUZES ==============================
             */
            $_POST["forms_gauzes"],
            
            /*
            =================== PERUMPTION DATE =====================
            */
            $_POST["perumption_date"],
            
            /*
            ==================== SIZES ==============================
            */
            // LARGEURS
                    $_POST["width_gauzes"],
                    $_POST["units_width_gauzes"], 
            // LONGEUR
                    $_POST["length_gauzes"],
                    $_POST["units_length_gauzes"], 
            // THICKNESS
                    $_POST["thickness_gauzes"],
                    $_POST["units_thickness_gauzes"], 
            // QUANTITY ON THE PACKAGES
                    $_POST["quantity_on_package_gauzes"],

            /*
            ================ MEDICATION WITH =========================
            */
            // YES/NON
                    $_POST["medication_gauzes"],
            // MEDICATION NAME
                    $_POST["medication_name_gauzes"],
            )
            /*
            =================== N'EST PAS VIDE ========================
            */
                && !empty($_POST["Name_gauzes"])
                && !empty($_POST["cleanliness_gauzes"])
                && !empty($_POST["brand_name_gauzes"])
                && !empty($_POST["forms_gauzes"])
                && !empty($_POST["quantity_on_package_gauzes"])
                && !empty($_POST["perumption_date"])
            ){

            /*
            ============== IDENTIFCATION VARIABLE ============
            */
            // NAME
              $Name_gauzes= strip_tags($_POST["Name_gauzes"]);
              $_SESSION["error"] =[];
                // print_r($Name_gauzes);

             // BRAND
              $brand_name_gauzes= strip_tags($_POST["brand_name_gauzes"]);
              $_SESSION["error"] =[];
                // print_r($brand_name_gauzes);
  
            // CLEANLINESS
              $cleanliness_gauzes= strip_tags($_POST["cleanliness_gauzes"]);
              $_SESSION["error"] =[];
                // print_r($cleanliness_gauzes);
  
            // ADHESIVNESS
              $adhesiveness_gauzes= strip_tags($_POST["adhesiveness_gauzes"]);
              $_SESSION["error"] =[];
                // print_r($adhesiveness_gauzes);
            
            // FORMS
              $forms_gauzes= strip_tags($_POST["forms_gauzes"]);
              $_SESSION["error"] =[];
                // print_r($forms_gauzes);
  
            // SIZES
              // WIDTH
                $width_gauzes= strip_tags($_POST["width_gauzes"]);
                $_SESSION["error"] =[];
                    // print_r($width_gauzes);

                $units_width_gauzes= strip_tags($_POST["units_width_gauzes"]);
                $_SESSION["error"] =[];
                    // print_r($units_width_gauzes);
  
              // LENGHT
                $length_gauzes= strip_tags($_POST["length_gauzes"]);
                $_SESSION["error"] =[];
                    // print_r($length_gauzes);

                $units_length_gauzes= strip_tags($_POST["units_length_gauzes"]);
                $_SESSION["error"] =[];
                    // print_r($units_length_gauzes);

              
              // THICKNESS
                $thickness_gauzes= strip_tags($_POST["thickness_gauzes"]);
                $_SESSION["error"] =[];
                    // print_r($thickness_gauzes);

                $units_thickness_gauzes= strip_tags($_POST["units_thickness_gauzes"]);
                $_SESSION["error"] =[];
                    // print_r($units_thickness_gauzes);
  
            // QUANTITY ON THE PACKAGE
              $quantity_on_package_gauzes= strip_tags($_POST["quantity_on_package_gauzes"]);
              $_SESSION["error"] =[];
                  // print_r($quantity_on_package_gauzes);

            // MEDICATION
              $medication_gauzes= strip_tags($_POST["medication_gauzes"]);
              $_SESSION["error"] =[];
                  // print_r($medication_gauzes);
            
            // NAME MEDICATION
              $medication_name_gauzes= strip_tags($_POST["medication_name_gauzes"]);
              $_SESSION["error"] =[];
                  // print_r($medication_name_gauzes);

            // PERUMTPTION DATE
                $perumption_date= strip_tags($_POST["perumption_date"]);
                $_SESSION["error"] =[];
                  // print_r($perumption_date);
              
            /*
             =========================== MODULATION ===========================
            */

             //BRAND NAME  
                $brand_cons_med = $brand_name_gauzes;

            // BANDAGE ADHESIVNESS
              if($adhesiveness_gauzes != "NULL"){
                $adhesiveness_gauzes_bd = $adhesiveness_gauzes;
              }else{
                $adhesiveness_gauzes_bd = "NULL";
                $adhesiveness_gauzes = "";
              }

            // MEDICATION
              if($medication_gauzes != ""){
                $medication_gauzes_bd = $medication_gauzes;
              }else{
                  $medication_gauzes_bd = "NULL";
              }

            // MEDICATION NAME
              if($medication_name_gauzes != ""){
                $medication_name_gauzes_bd = $medication_name_gauzes;
              }else{
                  $medication_name_gauzes_bd = "NULL";
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
            $sizes_specific_gauzes = "Chooses Sizes...";

            if($sizes_specific_gauzes != "Chooses Sizes..."){
              $sizes_specific = $sizes_specific_gauzes;
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
            $sizes_color_gauzes = "Chooses Sizes...";

            if($sizes_color_gauzes != "Chooses Sizes..."){
              $sizes_color = $sizes_color_gauzes;
            }else{
              $sizes_color = "NULL";
            }

            // WIDTH
              if($width_gauzes != "" AND $units_width_gauzes != ""){
                $size_width = $width_gauzes;
                $units_size_width = $units_width_gauzes;
              }else{
                $size_width = "NULL";
                $units_size_width = "NULL";
              }

            // LENGHT
              if($length_gauzes != "" AND $units_length_gauzes != ""){
                $size_lenght = $length_gauzes;
                $units_size_lenght = $units_length_gauzes;
              }else{
                $size_lenght = "NULL";
                $units_size_lenght = "NULL";
              }
            
            // THICKNESS
              if($thickness_gauzes != "" AND $units_thickness_gauzes!= ""){
                $size_thickness = $thickness_gauzes;
                $units_size_thickness = $units_thickness_gauzes;
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
  
              $association_sizes = $size_width_units . " " . $size_lenght_units . " " . $size_thickness_units . " " . "inbox : " ."". $quantity_on_package_gauzes;
              // echo "$association_sizes";

              $association_sizes = str_replace('  ', '', $association_sizes);
  
              // echo "$association_sizes";
  
            /*
            =====================RESUMER GAUZE===================================

                NAME = $Name_gauzes
                CLEANLINESS = $cleanliness_gauzes
                SIZE = $association_sizes
                ADHESIVNESS = $adhesiveness_gauzes
                Forms = $forms_gauzes
                MEDICATION = $medication_name_gauzes


            */
            $Name = $Name_gauzes ." " .  $cleanliness_gauzes . " " . $association_sizes  . " ". $adhesiveness_gauzes . " ". $forms_gauzes . " " . $medication_name_gauzes;
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

            - CLEANLINESS : $cleanliness_gauzes

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
            - SIZE GAUZE : $sizes_specific_gauzes

            - SIZE UNITS : "NULL"

            OTHERS
            - ADHESIVNESS : $adhesiveness_gauzes_bd
            - ELASTICITY : "NULL"
            - HOLE : "NULL"
            - FORMS : $forms_gauzes

            NEEDLE
            - NEEDLE : "NULL"
            - NEEDLE FORM : "NULL"
            - NEEDLE CIRCLE : "NULL"
            - NEEDLE SIZES : "NULL"
            - UNITS NEEDLES SIZES : "NULL"

            PACKAGE
            - PACKAGE : "$quantity_on_package_gauzes"
            - UNITS PACKAGE : NULL

            - MEDICATION : $medication_gauzes
            - NAME MEDICATION : $medication_name_gauzes_bd

            - EXPIRATION DATE . $perumption_date
            
            - NAME ADDING : $name_adding
            - CONS IMAGE : $file_name

            */
  
              $sql_cons_med_id_gauze = "INSERT INTO `cons_med_id` (
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
              '$cleanliness_gauzes',
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
                    '$sizes_specific_gauzes', 
                /*UNITS*/ 
                    'NULL',
              /*OTHERS*/
              '$adhesiveness_gauzes_bd',
              'NULL', 
              'NULL',
              '$forms_gauzes',
              /*NEEDLE*/
              'NULL',
              'NULL',
              'NULL',
              'NULL',
              'NULL',
              /*PACKAGES*/
              '$quantity_on_package_gauzes', 'NULL',
              /*MEDICATION*/
              '$medication_gauzes','$medication_name_gauzes_bd',
              /*EXPIRATION DATE*/
              '$perumption_date',
              /*RESPONSIBLE*/
              '$name_adding', 
              /*IMG*/
              '$file_name')";
  
              //On prerare la requete
              $query_cons_med_id_gauze = $db->prepare($sql_cons_med_id_gauze);
              //On execute la requete
             $query_cons_med_id_gauze->execute();
               //On recupere l'id de l'article
               $cons_med_id = $db->lastInsertId();
                }
            } else {$_SESSION["error"] =["The fils isn't complet"];}
            // VIDE OU ERREUR
            /*
  ================================================================ ADHESIVE END ==========================================
            */
    ?>