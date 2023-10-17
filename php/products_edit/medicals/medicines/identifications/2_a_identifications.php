<?php
    $id = strip_tags($_POST["edit"]);

    /*==================== OBLIGATORY VARIABLE DESCRIPTIONS====================*/
    // ACTIVAL NAME
    $commercial_name= strip_tags($_POST["commercial_name"]);
    if($commercial_name==""){$_SESSION["error_incomplet"] =["Generic Name Empty"];}
    $actival_name_0= strip_tags($_POST["actival_name_0"]);
    if($actival_name_0==""){$_SESSION["error_incomplet"] =["Actival Name Empty"];}
    // DOSAGE_0
    $dosage_0= strip_tags($_POST["dosage_0"]);
    if($dosage_0==""){$_SESSION["error_incomplet"] =["Dosage Empty"];}
    $dosage_unit_0= strip_tags($_POST["dosage_unit_0"]);
    if($dosage_unit_0=="Choose..."){$_SESSION["error_incomplet"] =["Units Dosage Empty"];}
 
    /*==================== NOT OBLIGATORY VARIABLE ====================*/
    $package = strip_tags($_POST["package"]);

    $dosage_package_0 = strip_tags($_POST["dosage_package_0"]);
    // ACTIVAL NAME 0
    if($dosage_package_0 != ""){
        $dosage_package_unit_0= strip_tags($_POST["dosage_package_unit_0"]);
        $dosage_package_quantity_0= strip_tags($_POST["dosage_package_quantity_0"]);
        $dosage_package_quantity_unit_0= strip_tags($_POST["dosage_package_quantity_unit_0"]);
        $package= strip_tags($_POST["package"]);
        $package_unit= strip_tags($_POST["package_unit"]);
 
        }
            else
        {
                $dosage_package_0= NULL;
                $dosage_package_unit_0= NULL;
                $dosage_package_quantity_0= NULL;
                $dosage_package_quantity_unit_0= NULL;
                $package_unit= NULL;
        }

    // ACTIVAL NAME 1
    $actival_name_1 = strip_tags($_POST["actival_name_1"]);
        if($actival_name_1 != ""){
            $actival_name_1 = strip_tags($_POST["actival_name_1"]);
                // DOSAGE 1 
                $dosage_1 = strip_tags($_POST["dosage_1"]);
                $dosage_unit_1= strip_tags($_POST["dosage_unit_1"]);
                // POSOLOGY LIQUIDE
                $dosage_package_1 = strip_tags($_POST["dosage_package_1"]);
                if($dosage_package_1 != ""){
                    $dosage_package_unit_1= strip_tags($_POST["dosage_package_unit_1"]);
                    $dosage_package_quantity_1= strip_tags($_POST["dosage_package_quantity_1"]);
                    $dosage_package_quantity_unit_1= strip_tags($_POST["dosage_package_quantity_unit_1"]);
            
                }
                else
                {
                    $dosage_package_1= NULL;
                    $dosage_package_unit_1= NULL;
                    $dosage_package_quantity_1= NULL;
                    $dosage_package_quantity_unit_1= NULL;
                }
            }
            else{
                    $actival_name_1 = NULL;

                    //  DOSAGE 1
                    $dosage_1 = NULL;
                    $dosage_unit_1= NULL;
                    $dosage_package_1= NULL;
                    $dosage_package_unit_1= NULL;
                    $dosage_package_quantity_1= NULL;
                    $dosage_package_quantity_unit_1= NULL;
            }

    // ACTIVAL NAME 2 
    $actival_name_2 = strip_tags($_POST["actival_name_2"]);
        if($actival_name_2 != ""){
        $actival_name_2 = strip_tags($_POST["actival_name_2"]);
            // DOSAGE 2
            $dosage_2 = strip_tags($_POST["dosage_2"]);
            $dosage_unit_2 = strip_tags($_POST["dosage_unit_2"]);

            // POSOLOGY LIQUIDE
            $dosage_package_2 = strip_tags($_POST["dosage_package_2"]);
            if($dosage_package_2 != ""){
                $dosage_package_2= strip_tags($_POST["dosage_package_2"]);
                $dosage_package_unit_2= strip_tags($_POST["dosage_package_unit_2"]);
                $dosage_package_quantity_2= strip_tags($_POST["dosage_package_quantity_2"]);
                $dosage_package_quantity_unit_2= strip_tags($_POST["dosage_package_quantity_unit_2"]);
    
            }
            else{
                $dosage_package_2= NULL;
                $dosage_package_unit_2= NULL;
                $dosage_package_quantity_2= NULL;
                $dosage_package_quantity_unit_2= NULL;
            }
        }
        else
        {
                $actival_name_2 = NULL;
                
                // DOSAGE 2
                $dosage_2 = NULL;
                $dosage_unit_2 = NULL;
                $dosage_package_2 = NULL;
                $dosage_package_unit_2 = NULL;
                $dosage_package_quantity_2 = NULL;
                $dosage_package_quantity_unit_2 = NULL;     
        }
    /* ==================== OBLIGATORY VARIABLE EXPIRATION DATE ET FORM====================*/
        $expiration_date= strip_tags($_POST["expiration_date"]);
        if($expiration_date==""){$_SESSION["error_incomplet"] = ["Expiration date empty"];}
        $form= strip_tags($_POST["form"]);
        if($form=="Choose..."){$_SESSION["error_incomplet"] =["Form empty"];}


?>