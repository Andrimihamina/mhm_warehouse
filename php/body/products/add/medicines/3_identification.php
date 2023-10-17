<?php
    /*
    ============== IDENTIFCATION VARIABLE ============
    =============== ACTIVAL NAME ======================
    */
    $commercial_name= strip_tags($_POST["commercial_name"]);
    $_SESSION["error"] =[];
    $actival_name_0= strip_tags($_POST["actival_name_0"]);
    $_SESSION["error"] =[];

        /*
        =============== DOSAGE ======================
        */
        $dosage_0= strip_tags($_POST["dosage_0"]);
        $_SESSION["error"] =[];
        $dosage_unit_0= strip_tags($_POST["dosage_unit_0"]);
        $_SESSION["error"] =[];
                
            /*
            ----------------- VARIABLE NON OBLIGATOIRE ------------
            POSOLOGY LIQUIDE
            Verification si il y ou il n'y a pas
            */

            $dosage_package_0 = strip_tags($_POST["dosage_package_0"]);

            if($dosage_package_0 != ""){
                $dosage_package_0= strip_tags($_POST["dosage_package_0"]);
                $_SESSION["error"] =[];
                $dosage_package_unit_0= strip_tags($_POST["dosage_package_unit_0"]);
                $_SESSION["error"] =[];
                $dosage_package_quantity_0= strip_tags($_POST["dosage_package_quantity_0"]);
                $_SESSION["error"] =[];
                $dosage_package_quantity_unit_0= strip_tags($_POST["dosage_package_quantity_unit_0"]);
                $_SESSION["error"] =[];
                $package= strip_tags($_POST["package"]);
                $_SESSION["error"] =[];
                $package_unit= strip_tags($_POST["package_unit"]);
                $_SESSION["error"] =[]; 
            }
            else{
                $dosage_package_0= "NULL";
                $_SESSION["error"] =[];
                $dosage_package_unit_0= "NULL";
                $_SESSION["error"] =[];
                $dosage_package_quantity_0= "NULL";
                $_SESSION["error"] =[];
                $dosage_package_quantity_unit_0= "NULL";
                $_SESSION["error"] =[];
                $package= "NULL";
                $_SESSION["error"] =[];
                $package_unit= "NULL";
                $_SESSION["error"] =[];
            }

    /*
    ==================== ACTIVAL NAME 1 ============================
    */
            $actival_name_1 = strip_tags($_POST["actival_name_1"]);
                /*
                Si Actival name existe ou pas
                */
            if($actival_name_1 != "")
            {
            $actival_name_1 = strip_tags($_POST["actival_name_1"]);
            $_SESSION["error"] =[];
                /*
                ==================== DOSAGE 1 ============================
                */
                $dosage_1 = strip_tags($_POST["dosage_1"]);
                $_SESSION["error"] =[];
                $dosage_unit_1= strip_tags($_POST["dosage_unit_1"]);
                $_SESSION["error"] =[];
                
                /*POSOLOGY LIQUIDE
                Verification si il y ou il n'y a pas
                */
                $dosage_package_1 = strip_tags($_POST["dosage_package_1"]);

                if($dosage_package_1 != ""){
                    $dosage_package_1= strip_tags($_POST["dosage_package_1"]);
                    $_SESSION["error"] =[];
                    $dosage_package_unit_1= strip_tags($_POST["dosage_package_unit_1"]);
                    $_SESSION["error"] =[];
                    $dosage_package_quantity_1= strip_tags($_POST["dosage_package_quantity_1"]);
                    $_SESSION["error"] =[];
                    $dosage_package_quantity_unit_1= strip_tags($_POST["dosage_package_quantity_unit_1"]);
                    $_SESSION["error"] =[];
                }
                else{
                    $dosage_package_1= "NULL";
                    $_SESSION["error"] =[];
                    $dosage_package_unit_1= "NULL";
                    $_SESSION["error"] =[];
                    $dosage_package_quantity_1= "NULL";
                    $_SESSION["error"] =[];
                    $dosage_package_quantity_unit_1= "NULL";
                    $_SESSION["error"] =[];
                }
            }
            else{
                    $actival_name_1 = "NULL";
                    $_SESSION["error"] =[];
                    /*
                    ==================== DOSAGE 1 ============================
                    */
                    $dosage_1 = "NULL";
                    $_SESSION["error"] =[];
                    $dosage_unit_1= "NULL";
                    $_SESSION["error"] =[];
                    $dosage_package_1= "NULL";
                    $_SESSION["error"] =[];
                    $dosage_package_unit_1= "NULL";
                    $_SESSION["error"] =[];
                    $dosage_package_quantity_1= "NULL";
                    $_SESSION["error"] =[];
                    $dosage_package_quantity_unit_1= "NULL";
                    $_SESSION["error"] =[];
            }

    /*
    ==================== ACTIVAL NAME 2 ============================
    */
            $actival_name_2 = strip_tags($_POST["actival_name_2"]);
            /*
            Si Actival name existe ou pas
            */
        if($actival_name_2 != "")
        {
        $actival_name_2 = strip_tags($_POST["actival_name_2"]);
        $_SESSION["error"] =[];
                /*
                ==================== DOSAGE 2 ============================
                */
            $dosage_2 = strip_tags($_POST["dosage_2"]);
            $_SESSION["error"] =[];
            $dosage_unit_2 = strip_tags($_POST["dosage_unit_2"]);
            $_SESSION["error"] =[];
            
            /*POSOLOGY LIQUIDE
            Verification si il y ou il n'y a pas
            */
            $dosage_package_2 = strip_tags($_POST["dosage_package_2"]);

            if($dosage_package_2 != ""){
                $dosage_package_2= strip_tags($_POST["dosage_package_2"]);
                $_SESSION["error"] =[];
                $dosage_package_unit_2= strip_tags($_POST["dosage_package_unit_2"]);
                $_SESSION["error"] =[];
                $dosage_package_quantity_2= strip_tags($_POST["dosage_package_quantity_2"]);
                $_SESSION["error"] =[];
                $dosage_package_quantity_unit_2= strip_tags($_POST["dosage_package_quantity_unit_2"]);
                $_SESSION["error"] =[];
            }
            else{
                $dosage_package_2= "NULL";
                $_SESSION["error"] =[];
                $dosage_package_unit_2= "NULL";
                $_SESSION["error"] =[];
                $dosage_package_quantity_2= "NULL";
                $_SESSION["error"] =[];
                $dosage_package_quantity_unit_2= "NULL";
                $_SESSION["error"] =[];
            }
        }
        else{
                $actival_name_2 = "NULL";
                $_SESSION["error"] =[];
                /*
                ==================== DOSAGE 2 ============================
                */
                $dosage_2 = "NULL";
                $_SESSION["error"] =[];
                $dosage_unit_2 = "NULL";
                $_SESSION["error"] =[];
                $dosage_package_2 = "NULL";
                $_SESSION["error"] =[];
                $dosage_package_unit_2 = "NULL";
                $_SESSION["error"] =[];
                $dosage_package_quantity_2 = "NULL";
                $_SESSION["error"] =[];
                $dosage_package_quantity_unit_2 = "NULL";
                $_SESSION["error"] =[];
        }
            /*
             ======================= EXPIRATION DATE ==========================
            */
            $expiration_date= strip_tags($_POST["expiration_date"]);
            $_SESSION["error"] =[];
            /*
            ========================= FORM ==================================
            */
            $form= strip_tags($_POST["form"]);
            $_SESSION["error"] =[];
            /*
            ======================== ID RESPONSIBLE ADDING ===================
            */
            $name_adding = $_SESSION["user"]["username"];

             /*
            =============== APPICATION ======================
            */
            $application= strip_tags($_POST["application"]);
            $_SESSION["error"] =[];
              /*
            =============== CLASSIFCAIION 0 ======================
            */
            $classification_0= strip_tags($_POST["classification_0"]);
            $_SESSION["error"] =[];
            /*
            =============== CLASSIFCAIION 1 ======================
            */
            $classification_1= strip_tags($_POST["classification_1"]);
            $_SESSION["error"] =[];
            /*
            =============== CLASSIFCAIION 2 ======================
            */
            $classification_2= strip_tags($_POST["classification_2"]);
            $_SESSION["error"] =[];
            /*
            =============== LOCATION 0 ======================
            */
            $location_0= strip_tags($_POST["location_0"]);
            $_SESSION["error"] =[];
            /*
            =============== LOCATION 1 ======================
            */
            $location_1= strip_tags($_POST["location_1"]);
            $_SESSION["error"] =[];
            /*
            =============== LOCATION 2 ======================
            */
            $location_2= strip_tags($_POST["location_2"]);
            $_SESSION["error"] =[];
            /*
            =============== QUANTITY PRICE ======================
            */
            $med_quantity= strip_tags($_POST["med_quantity"]);
            $_SESSION["error"] =[];
            /*
            =============== QUANTITY PRICE BOX======================
            */
            $box= strip_tags($_POST["box"]);
            $_SESSION["error"] =[];
            /*
            =============== MED PRICE ======================
            */
            $med_price= strip_tags($_POST["med_price"]);
            $_SESSION["error"] =[];
            /*
            =============== QT INITIAL ======================
            */
            $quantity_initial= $_POST["quantity_initial"];
            $_SESSION["error"] =[];
             /*
            =============== QT MINIMAL ======================
            */
            $quantity_minimal= $_POST["quantity_minimal"];
            $_SESSION["error"] =[];
              /*
            =============== QT AVARAGE ======================
            */
            $quantity_avarage= $_POST["quantity_avarage"];
            $_SESSION["error"] =[];
            /*
            =============== STOCK IN======================
            */
            $stock_in = 0;
             /*
            =============== STOCK OUT======================
            */
            $stock_out = 0;
            /*
            =============== PAS D'ERREUR ====================================
            */
?>