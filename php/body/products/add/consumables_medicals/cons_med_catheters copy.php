<?php
if(
    isset(
            /*
            ========================== NAME PRINCIPALE =======================
            */
            $_POST["Name_catheter"], 
             /*
            ========================== NAME PRINCIPALE =======================
            */
            $_POST["brand_name_catheters"], 
            /*
            ========================== NAME CATHEGORIES =======================
            */
            $_POST["cath"], 
            /*
            =================== PERUMPTION DATE =====================
            */
            $_POST["perumption_date"],
            
            )
            /*
            =================== N'EST PAS VIDE ========================
            */
                && !empty($_POST["Name_catheter"])
                && !empty($_POST["brand_name_catheters"])
                && !empty($_POST["cath"])
                && !empty($_POST["perumption_date"])
            ){

            /*
            ============== IDENTIFCATION VARIABLE ============
            */
            // NAME
              $Name_catheter= strip_tags($_POST["Name_catheter"]);
              $_SESSION["error"] =[];
                // print_r($Name_catheter);

            // BRAND
              $brand_name_catheters= strip_tags($_POST["brand_name_catheters"]);
              $_SESSION["error"] =[];
                // print_r($brand_name_catheters);
            
            // CATEGORIES
              $cath= strip_tags($_POST["cath"]);
              $_SESSION["error"] =[];
                // print_r($cath);

            // PERUMTPTION DATE
                $perumption_date= strip_tags($_POST["perumption_date"]);
                $_SESSION["error"] =[];
                  // print_r($perumption_date);


            /*
            ============================= CHOOSE THE CATEGORIES =================
            */
            // VARIABLE A IDENTIFIER
            $intravenous = "intravenous";
            $intraarterial = "intraarterial";
            $intraosseous = "intraosseous";
            $central = "central";
            $umbilical = "umbilical";
            $oxygen = "oxygen";
            $suction = "suction";
            $urinary = "urinary";

            switch($cath){
              /*
              =========================================================== INTRAVENOUS ===================================================================
              */
                case "$intravenous" :
                // print_r( "$intravenous");
                  $Name_catheters = "Catheters Intravenous";

                  if(
                    isset(
                        // SIZES GAUGE
                        $_POST["sizes_gauge_cath"],
                        // SIZES GAUGE
                        $_POST["sizes_color_cath"], 
                        )
                    && !empty($_POST["sizes_gauge_cath"])
                    && !empty($_POST["sizes_color_cath"])
                  ){
                    $sizes_gauge_cath= strip_tags($_POST["sizes_gauge_cath"]);
                    $sizes_color_cath= strip_tags($_POST["sizes_color_cath"]);

                    /*================TYPES====================*/
                    $types_1 = "";
                    $types_1_bd = "NULL";

                    $types_2 = "";
                    $types_2_bd = "NULL";
                    /*==================MODULATION=============================*/
                    // SIZES
                    // SPECIFIC TAILLE M/S/L
                          $sizes_specific_bags = "Chooses Sizes...";

                          if($sizes_specific_bags != "Chooses Sizes..."){
                            $sizes_specific = $sizes_specific_bags;
                          }else{
                            $sizes_specific = "NULL";
                          }
                    // CHARRIERE
                          $sizes_charrieres_bags = "Chooses Sizes...";

                          if($sizes_charrieres_bags != "Chooses Sizes..."){
                            $sizes_charriere = $sizes_charrieres_bags;
                          }else{
                            $sizes_charriere = "NULL";
                          }
                    // GAUZES
                          if($sizes_gauge_cath != "Chooses Sizes..."){
                            $sizes_gauzes = $sizes_gauge_cath;
                          }else{
                            $sizes_gauzes = "NULL";
                          }
                    // COLOR
                        if($sizes_color_cath != "Chooses Sizes..."){
                          $sizes_color = $sizes_color_cath;
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
                  }
                      break;
              /*
              =========================================================== INTRAARTERIAL ===================================================================
              */
              case "$intraarterial" :
                // print_r( "$intraarterial");
                  $Name_catheters = "Catheters Intraarterial";

                  if(
                    isset(
                        // SIZES GAUGE
                        $_POST["sizes_gauge_cath"],
                        // SIZES GAUGE
                        $_POST["sizes_color_cath"], 
                        )
                    && !empty($_POST["sizes_gauge_cath"])
                    && !empty($_POST["sizes_color_cath"])
                  ){
                    $sizes_gauge_cath= strip_tags($_POST["sizes_gauge_cath"]);
                    $sizes_color_cath= strip_tags($_POST["sizes_color_cath"]);
              /*================TYPES====================*/
              $types_1 = "";
              $types_1_bd = "NULL";

              $types_2 = "";
              $types_2_bd = "NULL";
              /*==================MODULATION=============================*/
                // SIZES
                // SPECIFIC TAILLE M/S/L
                    $sizes_specific_bags = "Chooses Sizes...";

                    if($sizes_specific_bags != "Chooses Sizes..."){
                      $sizes_specific = $sizes_specific_bags;
                    }else{
                      $sizes_specific = "NULL";
                    }
              // CHARRIERE
                    $sizes_charrieres_bags = "Chooses Sizes...";

                    if($sizes_charrieres_bags != "Chooses Sizes..."){
                      $sizes_charriere = $sizes_charrieres_bags;
                    }else{
                      $sizes_charriere = "NULL";
                    }
              // GAUZES
                    if($sizes_gauge_cath != "Chooses Sizes..."){
                      $sizes_gauzes = $sizes_gauge_cath;
                    }else{
                      $sizes_gauzes = "NULL";
                    }
              // COLOR
                  if($sizes_color_cath != "Chooses Sizes..."){
                    $sizes_color = $sizes_color_cath;
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
                  }
                      break;
              /*
              =========================================================== INTRAOSSEOUS ===================================================================
              */
              case "$intraosseous" :
                // print_r( "$intraosseous");
                  $Name_catheters = "Catheters Intraosseous";

                  if(
                    isset(
                        // SIZE AGE
                        $_POST["pediatric_cath_intraosseous"],
                        // SIZES GAUGE
                        $_POST["sizes_gauge_cath"],
                        // SIZES GAUGE
                        $_POST["sizes_color_cath"], 
                        )
                    && !empty($_POST["pediatric_cath_intraosseous"])
                    && !empty($_POST["sizes_gauge_cath"])
                    && !empty($_POST["sizes_color_cath"])
                  ){
                    $pediatric_cath_intraosseous= strip_tags($_POST["pediatric_cath_intraosseous"]);
                    $sizes_gauge_cath= strip_tags($_POST["sizes_gauge_cath"]);
                    $sizes_color_cath= strip_tags($_POST["sizes_color_cath"]);
              /*================TYPES====================*/
              $types_1 = $pediatric_cath_intraosseous;
              $types_1_bd = $pediatric_cath_intraosseous;

              $types_2 = "";
              $types_2_bd = "NULL";    
              /*==================MODULATION=============================*/
                // SIZES
                // SPECIFIC TAILLE M/S/L
                    $sizes_specific_bags = "Chooses Sizes...";

                    if($sizes_specific_bags != "Chooses Sizes..."){
                      $sizes_specific = $sizes_specific_bags;
                    }else{
                      $sizes_specific = "NULL";
                    }
              // CHARRIERE
                    $sizes_charrieres_bags = "Chooses Sizes...";

                    if($sizes_charrieres_bags != "Chooses Sizes..."){
                      $sizes_charriere = $sizes_charrieres_bags;
                    }else{
                      $sizes_charriere = "NULL";
                    }
              // GAUZES
                    if($sizes_gauge_cath != "Chooses Sizes..."){
                      $sizes_gauzes = $sizes_gauge_cath;
                    }else{
                      $sizes_gauzes = "NULL";
                    }
              // COLOR
                  if($sizes_color_cath != "Chooses Sizes..."){
                    $sizes_color = $sizes_color_cath;
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
                  }
                      break;
              /*
              =========================================================== CENTRAL ===================================================================
              */
              case "$central" :
                // print_r( "$central");
                  $Name_catheters = "Catheters Central";

                  if(
                    isset(
                        // SIZES GAUGE
                        $_POST["sizes_gauge_cath"],
                        // SIZES GAUGE
                        $_POST["sizes_color_cath"], 
                        )
                    && !empty($_POST["sizes_gauge_cath"])
                    && !empty($_POST["sizes_color_cath"])
                  ){
                    $sizes_gauge_cath= strip_tags($_POST["sizes_gauge_cath"]);
                    $sizes_color_cath= strip_tags($_POST["sizes_color_cath"]);
                  
                  /*================TYPES====================*/
              $types_1 = "";
              $types_1_bd = "NULL";

              $types_2 = "";
              $types_2_bd = "NULL";
              /*==================MODULATION=============================*/
                // SIZES
                // SPECIFIC TAILLE M/S/L
                    $sizes_specific_bags = "Chooses Sizes...";

                    if($sizes_specific_bags != "Chooses Sizes..."){
                      $sizes_specific = $sizes_specific_bags;
                    }else{
                      $sizes_specific = "NULL";
                    }
              // CHARRIERE
                    $sizes_charrieres_bags = "Chooses Sizes...";

                    if($sizes_charrieres_bags != "Chooses Sizes..."){
                      $sizes_charriere = $sizes_charrieres_bags;
                    }else{
                      $sizes_charriere = "NULL";
                    }
              // GAUZES
                    if($sizes_gauge_cath != "Chooses Sizes..."){
                      $sizes_gauzes = $sizes_gauge_cath;
                    }else{
                      $sizes_gauzes = "NULL";
                    }
              // COLOR
                  if($sizes_color_cath != "Chooses Sizes..."){
                    $sizes_color = $sizes_color_cath;
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
                  }
                      break;
              /*
              =========================================================== UMBILICAL ===================================================================
              */
              case "$umbilical" :
                // print_r( "$umbilical");
                  $Name_catheters = "Catheters Umbilical";

                  if(
                    isset(
                        // SIZES GAUGE
                        $_POST["sizes_gauge_cath"],
                        // SIZES GAUGE
                        $_POST["sizes_color_cath"], 
                        )
                    && !empty($_POST["sizes_gauge_cath"])
                    && !empty($_POST["sizes_color_cath"])
                  ){
                    $sizes_gauge_cath= strip_tags($_POST["sizes_gauge_cath"]);
                    $sizes_color_cath= strip_tags($_POST["sizes_color_cath"]);
                
              /*================TYPES====================*/
              $types_1 = "";
              $types_1_bd = "NULL";

              $types_2 = "";
              $types_2_bd = "NULL";
              /*==================MODULATION=============================*/
                // SIZES
                // SPECIFIC TAILLE M/S/L
                    $sizes_specific_bags = "Chooses Sizes...";

                    if($sizes_specific_bags != "Chooses Sizes..."){
                      $sizes_specific = $sizes_specific_bags;
                    }else{
                      $sizes_specific = "NULL";
                    }
              // CHARRIERE
                    $sizes_charrieres_bags = "Chooses Sizes...";

                    if($sizes_charrieres_bags != "Chooses Sizes..."){
                      $sizes_charriere = $sizes_charrieres_bags;
                    }else{
                      $sizes_charriere = "NULL";
                    }
              // GAUZES
                    if($sizes_gauge_cath != "Chooses Sizes..."){
                      $sizes_gauzes = $sizes_gauge_cath;
                    }else{
                      $sizes_gauzes = "NULL";
                    }
              // COLOR
                  if($sizes_color_cath != "Chooses Sizes..."){
                    $sizes_color = $sizes_color_cath;
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
                  }
                      break;
              /*
              =========================================================== SUCTION ===================================================================
              */
              case "$suction" :
                // print_r( "$suction");
                  $Name_catheters = "Suction Catheters";

                  if(
                    isset(
                        // TYPES YANKEUR / SIMPLE
                        $_POST["type_suction_cath"],
                        // TYPES INGERTIPS / SIMPLE
                        $_POST["fingertips_cath"],
                        // SIZES GAUGE
                        $_POST["sizes_charriere_cath"],
                        // SIZES GAUGE
                        $_POST["sizes_color_cath"], 
                        )
                    && !empty($_POST["type_suction_cath"])
                    && !empty($_POST["fingertips_cath"])
                    && !empty($_POST["sizes_charriere_cath"])
                    && !empty($_POST["sizes_color_cath"])
                  ){
                    $type_suction_cath= strip_tags($_POST["type_suction_cath"]);
                    $fingertips_cath= strip_tags($_POST["fingertips_cath"]);
                    $sizes_charriere_cath= strip_tags($_POST["sizes_charriere_cath"]);
                    $sizes_color_cath= strip_tags($_POST["sizes_color_cath"]);
                
              /*================TYPES====================*/
              $types_1 = $type_suction_cath;
              $types_1_bd = $type_suction_cath;

              $types_2 = $fingertips_cath;
              $types_2_bd = $fingertips_cath;
              /*==================MODULATION=============================*/
              // SIZES
              // SPECIFIC TAILLE M/S/L
                    $sizes_specific_bags = "Chooses Sizes...";

                    if($sizes_specific_bags != "Chooses Sizes..."){
                      $sizes_specific = $sizes_specific_bags;
                    }else{
                      $sizes_specific = "NULL";
                    }
              // CHARRIERE
                    if($sizes_charriere_cath != "Chooses Sizes..."){
                      $sizes_charriere = $sizes_charriere_cath;
                    }else{
                      $sizes_charriere = "NULL";
                    }
              // GAUZES
                  $sizes_gauge_cath = "Chooses Sizes...";

                    if($sizes_gauge_cath != "Chooses Sizes..."){
                      $sizes_gauzes = $sizes_gauge_cath;
                    }else{
                      $sizes_gauzes = "NULL";
                    }
              // COLOR
                  if($sizes_color_cath != "Chooses Sizes..."){
                    $sizes_color = $sizes_color_cath;
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
                  }
                      break;
                
              /*
              =========================================================== URINARY ===================================================================
              */
              case "$urinary" :
                // print_r( "$urinary");
                  $Name_catheters = "Urinary Catheters";

                  if(
                    isset(
                        // TYPES YANKEUR / SIMPLE
                        $_POST["type_cath_urinary"],
                        // SIZES GAUGE
                        $_POST["sizes_charriere_cath"],
                        // SIZES GAUGE
                        $_POST["sizes_color_cath"], 
                        )
                    && !empty($_POST["type_cath_urinary"])
                    && !empty($_POST["sizes_charriere_cath"])
                    && !empty($_POST["sizes_color_cath"])
                  ){
                    $type_cath_urinary= strip_tags($_POST["type_cath_urinary"]);
                    $sizes_charriere_cath= strip_tags($_POST["sizes_charriere_cath"]);
                    $sizes_color_cath= strip_tags($_POST["sizes_color_cath"]);
                  
                  /*================TYPES====================*/
              $types_1 = $type_cath_urinary;
              $types_1_bd = $type_cath_urinary;

              $types_2 = "";
              $types_2_bd = "NULL";
              /*==================MODULATION=============================*/
              // SIZES
              // SPECIFIC TAILLE M/S/L
                    $sizes_specific_bags = "Chooses Sizes...";

                    if($sizes_specific_bags != "Chooses Sizes..."){
                      $sizes_specific = $sizes_specific_bags;
                    }else{
                      $sizes_specific = "NULL";
                    }
              // CHARRIERE
                    if($sizes_charriere_cath != "Chooses Sizes..."){
                      $sizes_charriere = $sizes_charriere_cath;
                    }else{
                      $sizes_charriere = "NULL";
                    }
              // GAUZES
                  $sizes_gauge_cath = "Chooses Sizes...";

                    if($sizes_gauge_cath != "Chooses Sizes..."){
                      $sizes_gauzes = $sizes_gauge_cath;
                    }else{
                      $sizes_gauzes = "NULL";
                    }
              // COLOR
                  if($sizes_color_cath != "Chooses Sizes..."){
                    $sizes_color = $sizes_color_cath;
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
                  }
                      break;

                /*
              =========================================================== OXYGEN ===================================================================
              */
              case "$oxygen" :
                // print_r( "$oxygen");
                  $Name_catheters = "Oxygen Catheters";

                  if(
                    isset(
                        // TYPES YANKEUR / SIMPLE
                        $_POST["type_cath_oxygen"], 
                        )
                    && !empty($_POST["type_cath_oxygen"])
                  ){
                    $type_cath_oxygen= strip_tags($_POST["type_cath_oxygen"]);
                
                /*================TYPES====================*/
              $types_1 = $type_cath_oxygen;
              $types_1_bd = $type_cath_oxygen;

              $types_2 = "";
              $types_2_bd = "NULL";
              /*==================MODULATION=============================*/
              // SIZES
              // SPECIFIC TAILLE M/S/L
                    $sizes_specific_bags = "Chooses Sizes...";

                    if($sizes_specific_bags != "Chooses Sizes..."){
                      $sizes_specific = $sizes_specific_bags;
                    }else{
                      $sizes_specific = "NULL";
                    }
              // CHARRIERE
                   $sizes_charriere_cath = "Chooses Sizes...";

                    if($sizes_charriere_cath != "Chooses Sizes..."){
                      $sizes_charriere = $sizes_charriere_cath;
                    }else{
                      $sizes_charriere = "NULL";
                    }
              // GAUZES
                  $sizes_gauge_cath = "Chooses Sizes...";

                    if($sizes_gauge_cath != "Chooses Sizes..."){
                      $sizes_gauzes = $sizes_gauge_cath;
                    }else{
                      $sizes_gauzes = "NULL";
                    }
              // COLOR
              $sizes_color_cath = "Chooses Sizes...";

                  if($sizes_color_cath != "Chooses Sizes..."){
                    $sizes_color = $sizes_color_cath;
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
                    
                  }
                      break;
              }
            //FIN CATHEGOIE

            // BRAND
                $brand_cons_med = $brand_name_catheters;

            // TYPE ONE
              $types_1 = $types_1;
              $types_1_bd = $types_1;
              $types_2 = $types_2;
              $types_2_bd = $types_2;
            
            // SIZES
              // SPECIFIQUE
                  $sizes_specific = $sizes_specific;
              // CHARRIERE
                  $affiche_sizes_specific = $sizes_specific;
              // GAUGE
                  $sizes_gauzes = $sizes_gauzes;
              // COLOR
                  $sizes_color = $sizes_color;
              // WIDTH
                  $size_width = $size_width;
                  $units_size_width = $units_size_width;
              // LENGHT
                  $size_lenght = $size_lenght;
                  $units_size_lenght = $units_size_lenght;

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
            $size_width_units = $size_lenght . $affiche_units_sizes_width ;
  
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
  
              $association_sizes = $sizes_gauzes_affiche ." ". $sizes_charrieres_affiche ." ". $sizes_specific_color;
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
            $Name = $Name_catheters ." " .  $types_1 . " ". $types_2 . " ". $association_sizes;
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

            - SIZE CHARRIERS : $sizes_charriere
            - SIZE SPECIFIC : "$sizes_specific"
            - SIZE COLOR : "$sizes_color"
            - SIZE GAUZE : "$sizes_gauzes"

            - SIZE UNITS : "NULL"

            OTHERS
            - ADHESIVNESS : "NULL"
            - ELASTICITY : "NULL"
            - POWDER/HOLE : "$types_1_bd"
            - FORMS : "$types_2_bd"

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
  
              $sql_cons_med_id_catheters = "INSERT INTO `cons_med_id` (
              `id_code_med`, `created_date_cons_med`, 
              `cons_med_abrev`, `cons_med_nbr_abrev`, `id_code_cons_med`, 
              /*NAME*/
              `name_cons_med`, 
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
              '$types_1_bd', 
              '$types_2_bd',
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
              $query_cons_med_id_catheters = $db->prepare($sql_cons_med_id_catheters);
              //On execute la requete
             $query_cons_med_id_catheters->execute(); 
              //On recupere l'id de l'article
              $cons_med_id = $db->lastInsertId();
                }
            }else {exit($_SESSION["error"] =["The fils isn't complet"]);}
            // VIDE OU ERREUR
            /*
  ================================================================ ADHESIVE END ==========================================
            */
    ?>