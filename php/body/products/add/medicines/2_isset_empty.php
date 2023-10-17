<?php
if(
    isset(
        //IDENTITIFACTION
        $_POST["commercial_name"], 
        /*
        ==================== ACTIVAL NAME ==============================
        */
        $_POST["actival_name_0"],
            //DOSAGE
            $_POST["dosage_0"], 
            $_POST["dosage_unit_0"],
            $_POST["dosage_package_0"], 
            $_POST["dosage_package_unit_0"],
            $_POST["dosage_package_quantity_0"], 
            $_POST["dosage_package_quantity_unit_0"],
            $_POST["package"], 
            $_POST["package_unit"],
        /*
        ================== ACTIVAL NAME 1 =======================
        */
        $_POST["actival_name_1"],
            //DOSAGE
            $_POST["dosage_1"], 
            $_POST["dosage_unit_1"],
            $_POST["dosage_package_1"], 
            $_POST["dosage_package_unit_1"],
            $_POST["dosage_package_quantity_1"], 
            $_POST["dosage_package_quantity_unit_1"],
        /*
        ================== ACTIVAL NAME 2 ========================
        */
        $_POST["actival_name_2"],
            //DOSAGE
            $_POST["dosage_2"], 
            $_POST["dosage_unit_2"],
            $_POST["dosage_package_2"], 
            $_POST["dosage_package_unit_2"],
            $_POST["dosage_package_quantity_2"], 
            $_POST["dosage_package_quantity_unit_2"],


        /*
        =============== EXPIRATION DATE =======================
        */
        $_POST["expiration_date"],
        /*
        ==================== FORM ============================
        */
        $_POST["form"],
        /*
        ==================== APPLICATIOn ============================
        */
          //APPLICATION 0
          $_POST["application"],

        /*
        ==================== CLASSIFICATION 0 ============================
        */
          //CLASSIFICATION 0
          $_POST["classification_0"],
          /*
        ==================== CLASSIFICATION 1 ============================
        */
          //CLASSIFICATION 1
          $_POST["classification_1"],
            /*
        ==================== CLASSIFICATION 2 ============================
        */
          //CLASSIFICATION 2
          $_POST["classification_2"],
            /*
        ==================== LOCATION 0 ============================
        */
          //LOCATION 0
          $_POST["location_0"],
            /*
        ==================== LOCATION 1 ============================
        */
          //LOCATION 1
          $_POST["location_1"],
            /*
        ==================== LOCATION 2 ============================
        */
          //LOCATION 2
          $_POST["location_2"],
            /*
        ==================== PRICE QUANTITY ============================
        */
          //PRICE QUANTITY 
          $_POST["med_quantity"],
            /*
        ==================== PRICE BOX ============================
        */
          //PRICE BOX 
          $_POST["box"],
          /*
        ==================== PRICE  ============================
        */
          //PRICE
          $_POST["med_price"],
          /*
        ==================== QUANTITY INITIAL  ============================
        */
          //PRICE
          $_POST["quantity_initial"],
          /*
        ==================== QUANTITY MINIMAL  ============================
        */
          //PRICE
          $_POST["quantity_minimal"],
        /*
        ==================== QUANTITY AVARAGE  ============================
        */
          //PRICE
          $_POST["quantity_avarage"])

        /*
        LE VARIABLE OBLIGATOIRE NE PAS VIDE
        */
        /*
        ================= ACTIVAL NAME ========================
        */
        && !empty($_POST["commercial_name"]) 
        && !empty($_POST["actival_name_0"])
                /*
                ===================== DOSAGE ==================
                */
                && !empty($_POST["dosage_0"])
                && !empty($_POST["dosage_unit_0"]) 

        /*
        =================== EXPIRATION DATE ====================
        */
        && !empty($_POST["expiration_date"])
        /*
        ===================== FORM ==========================
        */
        && !empty($_POST["form"])
        /*
        ===================== APPLICATION OBLIGATOIR ==========================
        */
        && !empty($_POST["application"]) 
        /*
        ===================== CLASSIFICATION OBLIGATOIR ==========================
        */
        && !empty($_POST["classification_0"]) 
         /*
        ===================== LOCATION OBLIGATOIR ==========================
        */
        && !empty($_POST["location_0"]) 
         /*
        ===================== LOCATION OBLIGATOIR ==========================
        */
        && !empty($_POST["location_1"]) 
         /*
        ===================== PRICE QUANTITY OBLIGATOIR ==========================
        */
        && !empty($_POST["med_quantity"])
         /*
        ===================== PRICE QUANTITY BOX OBLIGATOIR ==========================
        */
        && !empty($_POST["box"])
         /*
        ===================== PRICE QUANTITY OBLIGATOIR ==========================
        */
        && !empty($_POST["med_price"])
         /*
        ===================== QT INITIAL==========================
        */
        && !empty($_POST["quantity_initial"])
         /*
        ===================== QT MINIMAL==========================
        */
        && !empty($_POST["quantity_minimal"])
        /*
        ===================== QT AVARAGE==========================
        */
        && !empty($_POST["quantity_avarage"])
    )
?>