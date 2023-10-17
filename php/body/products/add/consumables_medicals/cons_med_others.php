<?php
if(
    isset(
            /*
            ========================== NAME PRINCIPALE =======================
            */
            $_POST["Name_others"], 
             /*
            ========================== NAME PRINCIPALE =======================
            */
            $_POST["brand_name_others"], 
            /*
            ==================== CLEANLINESS-NEEDLES==============================
            */
            $_POST["cleanliness_others"],
            /*
            =================== PERUMPTION DATE =====================
            */
            $_POST["perumption_date"],
            
            )
            /*
            =================== N'EST PAS VIDE ========================
            */
                && !empty($_POST["Name_others"])
                && !empty($_POST["brand_name_others"])
                && !empty($_POST["cleanliness_others"])
                && !empty($_POST["perumption_date"])
            ){
            /*
            ============== IDENTIFCATION VARIABLE ============
            */
            // NAME
              $Name_others= strip_tags($_POST["Name_others"]);
              $_SESSION["error"] =[];
                // print_r($Name_others);

            // BRAND
              $brand_name_others= strip_tags($_POST["brand_name_others"]);
              $_SESSION["error"] =[];
                // print_r($brand_name_others);
            
            // CLEANLINESS
              $cleanliness_others= strip_tags($_POST["cleanliness_others"]);
              $_SESSION["error"] =[];
                // print_r($cleanliness_others);
            
            // ------------------CHARACTERISTIC
              // CHARACTERISTIC 1
                $characteristic_1= strip_tags($_POST["characteristic_1"]);
                $_SESSION["error"] =[];
                  // print_r($characteristic_1);

              // CHARACTERISTIC 2
                $characteristic_2 = strip_tags($_POST["characteristic_2"]);
                $_SESSION["error"] =[];
                  // print_r($characteristic_2);

              // CHARACTERISTIC 3
                  $characteristic_3 = strip_tags($_POST["characteristic_3"]);
                  $_SESSION["error"] =[];
                    // print_r($characteristic_3);
              
              // CHARACTERISTIC 4
                  $characteristic_4 = strip_tags($_POST["characteristic_4"]);
                  $_SESSION["error"] =[];
                    // print_r($characteristic_4);

            // --------------------SIZES 
              // WIDTH
                $width_others= strip_tags($_POST["width_others"]);
                $_SESSION["error"] =[];
                    // print_r($width_others);

                $units_width_others= strip_tags($_POST["units_width_others"]);
                $_SESSION["error"] =[];
                    // print_r($units_width_others);

              // LENGHT
                $length_others= strip_tags($_POST["length_others"]);
                $_SESSION["error"] =[];
                    // print_r($length_others);

                $units_lenght_others= strip_tags($_POST["units_lenght_others"]);
                $_SESSION["error"] =[];
                    // print_r($units_lenght_others);

              // THICKNESS
                $thickness_others= strip_tags($_POST["thickness_others"]);
                $_SESSION["error"] =[];
                    // print_r($thickness_others);

                $units_thickness_others= strip_tags($_POST["units_thickness_others"]);
                $_SESSION["error"] =[];
                    // print_r($units_thickness_others);

              // SIZES SPECIFIC
                $sizes_specific_others= strip_tags($_POST["sizes_specific_others"]);
                $_SESSION["error"] =[];
                  // print_r($sizes_specific_others);
              
              // SIZES GAUZE
                $sizes_gauges_others = strip_tags($_POST["sizes_gauges_others"]);
                $_SESSION["error"] =[];
                  // print_r($sizes_gauges_others);
              
              // SIZES CHARRIERES
                $sizes_charriere_others= strip_tags($_POST["sizes_charriere_others"]);
                $_SESSION["error"] =[];
                  // print_r($sizes_charriere_others);
              
              // SIZES COLOR
                $sizes_color_others= strip_tags($_POST["sizes_color_others"]);
                $_SESSION["error"] =[];
                    // print_r($sizes_color_others);
              
              // SIZES UNITS
                $sizes_mesurs_others= strip_tags($_POST["sizes_mesurs_others"]);
                $_SESSION["error"] =[];
                    // print_r($sizes_mesurs_others);

            // PERUMTPTION DATE
                $perumption_date= strip_tags($_POST["perumption_date"]);
                $_SESSION["error"] =[];
                  // print_r($perumption_date);
              
            /*
             =========================== MODULATION ===========================
            */

            //BRAND NAME  
                $brand_cons_med = $brand_name_others;

            // CHARACTERISTIC
            // 1
              if($characteristic_1!=""){
                $characteristic_1 = $characteristic_1;
                $characteristic_1_bd = $characteristic_1;
              } else{
                $characteristic_1 = "";
                $characteristic_1_bd = "NULL";
              }
            
            // 2
              if($characteristic_2!=""){
                $characteristic_2 = $characteristic_2;
                $characteristic_2_bd = $characteristic_2;
              } else{
                $characteristic_2 = "";
                $characteristic_2_bd = "NULL";
              }

            // 3
              if($characteristic_3!=""){
                $characteristic_3 = $characteristic_3;
                $characteristic_3_bd = $characteristic_3;
              } else{
                $characteristic_3 = "";
                $characteristic_3_bd = "NULL";
              }
            
            // 4
              if($characteristic_4!=""){
                $characteristic_4 = $characteristic_4;
                $characteristic_4_bd = $characteristic_4;
              } else{
                $characteristic_4 = "";
                $characteristic_4_bd = "NULL";
              }

            // ----------------------SIZE

            // SPECIFIC TAILLE M/S/L
              if($sizes_specific_others != "Chooses Sizes..."){
                $sizes_specific = $sizes_specific_others;
              }else{
                $sizes_specific = "NULL";
              }
            
            // CHARRIERE
              if($sizes_charriere_others != "Chooses Sizes..."){
                $sizes_charriere = $sizes_charriere_others;
              }else{
                $sizes_charriere = "NULL";
              }
            
            // GAUZES
              if($sizes_gauges_others != "Chooses Sizes..."){
                $sizes_gauzes = $sizes_gauges_others;
              }else{
                $sizes_gauzes = "NULL";
              }

            // COLOR
            if($sizes_color_others != "Chooses Sizes..."){
              $sizes_color = $sizes_color_others;
            }else{
              $sizes_color = "NULL";
            }

           // WIDTH
              if($width_others != "" AND $units_width_others != "Chooses Sizes..."){
                $size_width = $width_others;
                $units_size_width = $units_width_others;
              }else{
                $size_width = "NULL";
                $units_size_width = "NULL";
              }
              

            // LENGHT
            if($length_others != "" AND $units_lenght_others != "Chooses Sizes..."){
              $size_lenght = $length_others;
              $units_size_lenght = $units_lenght_others;
            }else{
              $size_lenght = "NULL";
              $units_size_lenght = "NULL";
            }

            // THICKNESS
            if($thickness_others != "" AND $units_thickness_others != "Chooses Sizes..."){
              $size_thickness = $thickness_others;
              $units_size_thickness = $units_thickness_others;
            }else{
              $size_thickness = "NULL";
              $units_size_thickness = "NULL";
            }

            // UNITS
            if($sizes_mesurs_others!=""){
              $sizes_mesurs_others = $sizes_mesurs_others;
              $sizes_mesurs_others_bd = $sizes_mesurs_others;
            } else{
              $sizes_mesurs_others = "";
              $sizes_mesurs_others_bd = "NULL";
            }

            // ASSOCIATION 
            $associations = strip_tags($_POST["associations"]);

            if($associations != "true"){
              $associations_name_others = "";
              $associations_form_1_others = "";
              $associations_form_2_others = "";
              $associations_size_others = "";
              $associations_units_others = "";

              $associations_name_others_bd = "NULL";
              $associations_form_1_others_bd = "NULL";
              $associations_form_2_others_bd = "NULL";
              $associations_size_others_bd = "NULL";
              $associations_units_others_bd = "NULL";
            }else{
                $associations_name_others = strip_tags($_POST["associations_name_others"]);
                $associations_form_1_others = strip_tags($_POST["associations_form_1_others"]);
                $associations_form_2_others = strip_tags($_POST["associations_form_2_others"]);
                $associations_size_others = strip_tags($_POST["associations_size_others"]);
                $associations_units_others = strip_tags($_POST["associations_units_others"]);

              if($associations_name_others!="Name"){
                $associations_name_others = $associations_name_others;
                $associations_name_others_bd = $associations_name_others;
              }else{
                $associations_name_others = "";
                $associations_name_others_bd = "NULL";
              }

              if($associations_form_1_others!="Form 1"){
                $associations_form_1_others = $associations_form_1_others;
                $associations_form_1_others_bd = $associations_form_1_others;
              }else{
                $associations_form_1_others = "";
                $associations_form_1_others_bd = "NULL";
              }

              if($associations_form_2_others!="Form 2"){
                $associations_form_2_others = $associations_form_2_others;
                $associations_form_2_others_bd = $associations_form_2_others;
              }else{
                $associations_form_2_others = "";
                $associations_form_2_others_bd = "NULL";
              }

              if($associations_size_others!="Size"){
                $associations_size_others = $associations_size_others;
                $associations_size_others_bd = $associations_size_others;
              }else{
                $associations_size_others = "";
                $associations_size_others_bd = "NULL";
              }

              if($associations_units_others!="Units"){
                $associations_units_others = $associations_units_others;
                $associations_units_others_bd = $associations_units_others;
              }else{
                $associations_units_others = "";
                $associations_units_others_bd = "NULL";
              }
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
          
            // UNITS THICKNESS
            $size_thickness_units = $size_thickness . $affiche_units_size_thickness ;
  
            if($size_thickness_units == "NULLNULL"){
              $size_thickness_units ="";
            } else {$size_thickness_units = $size_thickness_units;}
            /*
            ============================== ASSOCIATION ==================================
            */
  
              $association_sizes = $size_width_units ." ".$size_lenght_units ." ". $size_thickness_units  ." ". $sizes_specific_affiche ." ". $sizes_gauzes_affiche ." ".  $sizes_charrieres_affiche ." ". $sizes_specific_color ." ". $sizes_mesurs_others ." ". $associations_name_others ." ".$associations_form_1_others ." ". $associations_form_2_others ." ". $associations_size_others ." ". $associations_units_others;
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
            $Name = $Name_others  . " ". $cleanliness_others . " ". $characteristic_1 . " ". $characteristic_2 . " ". $characteristic_3 . " ". $characteristic_4 . " ".   $association_sizes;
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

            - CLEANLINESS : "$cleanliness_others"

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

            - SIZE UNITS : $sizes_mesurs_others_bd

            OTHERS
            - ADHESIVNESS : $characteristic_1_bd
            - ELASTICITY : $characteristic_2_bd
            - POWDER/HOLE : $characteristic_3_bd
            - FORMS : characteristic_4_bd

             NEEDLE
            - NEEDLE : $associations_name_others_bd
            - NEEDLE FORM : $associations_form_1_others_bd
            - NEEDLE CIRCLE : $associations_form_2_others_bd
            - NEEDLE SIZES : $associations_size_others_bd
            - UNITS NEEDLES SIZES : $associations_units_others_bd

            PACKAGE
            - PACKAGE : "NULL"
            - UNITS PACKAGE : NULL

            - MEDICATION : NULL
            - NAME MEDICATION : NULL

            - EXPIRATION DATE . $perumption_date
            
            - NAME ADDING : $name_adding
            - CONS IMAGE : $file_name

            */
  
              $sql_cons_med_id_others= "INSERT INTO `cons_med_id` (
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
              '$cleanliness_others',
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
                '$sizes_mesurs_others_bd', 
              /*OTHERS*/
              '$characteristic_1_bd',
              '$characteristic_2_bd',
              '$characteristic_3_bd', 
              '$characteristic_4_bd',
              /*NEEDLE*/
              '$associations_name_others_bd',
              '$associations_form_1_others_bd',
              '$associations_form_2_others_bd',
              '$associations_size_others_bd',
              '$associations_units_others_bd',
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
              $query_cons_med_id_others = $db->prepare($sql_cons_med_id_others);
              //On execute la requete
             $query_cons_med_id_others->execute(); 
              //On recupere l'id de l'article
              $cons_med_id = $db->lastInsertId();
                }
            }else {exit($_SESSION["error"] =["The fils isn't complet"]);}
            // VIDE OU ERREUR
            /*
  ================================================================ ADHESIVE END ==========================================
            */
    ?>