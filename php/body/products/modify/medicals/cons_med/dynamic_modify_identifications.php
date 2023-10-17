<?php
foreach( $_POST as $cle =>$value )
{
    if ($value == "modify"){
        $var_id = "$cle";

        $id = str_replace("id-", "", $var_id);

if(!empty($_POST)){
    //POST n'est pas vide, on verifier que toutes les donnes sont presents
             /*
            =============== ACTIVAL NAME ======================
            */
            $commercial_name= strip_tags($_POST["commercial_name-$id"]);
            $_SESSION["error"] =[];
            $actival_name_0= strip_tags($_POST["actival_name_0-$id"]);
            $_SESSION["error"] =[];
                /*
                =============== DOSAGE ======================
                */
                $dosage_0= strip_tags($_POST["dosage_0-$id"]);
                $_SESSION["error"] =[];
                $dosage_unit_0= strip_tags($_POST["dosage_unit_0-$id"]);
                $_SESSION["error"] =[];
                
                /*
                ----------------- VARIABLE NON OBLIGATOIRE ------------
                
                POSOLOGY LIQUIDE
                Verification si il y ou il n'y a pas
                */

                $dosage_package_0 = strip_tags($_POST["dosage_package_0-$id"]);

                if($dosage_package_0 != ""){
                    $dosage_package_0= strip_tags($_POST["dosage_package_0-$id"]);
                    $dosage_package_unit_0= strip_tags($_POST["dosage_package_unit_0-$id"]);
                    $dosage_package_quantity_0= strip_tags($_POST["dosage_package_quantity_0-$id"]);
                    $dosage_package_quantity_unit_0= strip_tags($_POST["dosage_package_quantity_unit_0-$id"]);
                    $package= strip_tags($_POST["package-$id"]);
                    $package_unit= strip_tags($_POST["package_unit-$id"]);  
                    // pour la bd
                    $dosage_package_0_bd= strip_tags($_POST["dosage_package_0-$id"]);
                    $dosage_package_unit_0_bd= strip_tags($_POST["dosage_package_unit_0-$id"]);
                    $dosage_package_quantity_0_bd= strip_tags($_POST["dosage_package_quantity_0-$id"]);
                    $dosage_package_quantity_unit_0_bd= strip_tags($_POST["dosage_package_quantity_unit_0-$id"]);
                    $package_bd= strip_tags($_POST["package-$id"]);
                    $package_unit_bd= strip_tags($_POST["package_unit-$id"]);  
                }
                else{
                    $dosage_package_0= "";
                    $dosage_package_unit_0= "";
                    $dosage_package_quantity_0= "";
                    $dosage_package_quantity_unit_0= "";
                    $package= "";
                    $package_unit= "";
                    // Pour la BD
                    $dosage_package_0_bd= "NULL";
                    $dosage_package_unit_0_bd= "NULL";
                    $dosage_package_quantity_0_bd= "NULL";
                    $dosage_package_quantity_unit_0_bd= "NULL";
                    $package_bd= "NULL";
                    $package_unit_bd= "NULL";

                }

                /*
                ==================== ACTIVAL NAME 1 ============================
                */
            $actival_name_1 = strip_tags($_POST["actival_name_1-$id"]);
                /*
                Si Actival name existe ou pas
                */
            if($actival_name_1 != "")
            {
            $actival_name_1 = strip_tags($_POST["actival_name_1-$id"]);
            $actival_name_1_bd = strip_tags($_POST["actival_name_1-$id"]);
                /*
                ==================== DOSAGE 1 ============================
                */
                $dosage_1 = strip_tags($_POST["dosage_1-$id"]);

                if($dosage_1 !=""){
                    $dosage_1 = strip_tags($_POST["dosage_1-$id"]);
                    $dosage_1_bd = strip_tags($_POST["dosage_1-$id"]);
                    $dosage_unit_1 = strip_tags($_POST["dosage_unit_1-$id"]);
                    $dosage_unit_1_bd = strip_tags($_POST["dosage_unit_1-$id"]);
                    
                }else{
                    $dosage_1 = "";
                    $dosage_1_bd = "NULL";
                    $dosage_unit_1 = "";
                    $dosage_unit_1_bd = "NULL";
                }
                
                
                /*POSOLOGY LIQUIDE
                Verification si il y ou il n'y a pas
                */
                $dosage_package_1 = strip_tags($_POST["dosage_package_1-$id"]);

                if($dosage_package_1 != ""){
                    $dosage_package_1= strip_tags($_POST["dosage_package_1-$id"]);
                    $dosage_package_unit_1= strip_tags($_POST["dosage_package_unit_1-$id"]);
                    $dosage_package_quantity_1= strip_tags($_POST["dosage_package_quantity_1-$id"]);
                    $dosage_package_quantity_unit_1= strip_tags($_POST["dosage_package_quantity_unit_1-$id"]);
                    // BD
                    $dosage_package_1_bd= strip_tags($_POST["dosage_package_1-$id"]);
                    $dosage_package_unit_1_bd= strip_tags($_POST["dosage_package_unit_1-$id"]);
                    $dosage_package_quantity_1_bd= strip_tags($_POST["dosage_package_quantity_1-$id"]);
                    $dosage_package_quantity_unit_1_bd= strip_tags($_POST["dosage_package_quantity_unit_1-$id"]);
                }
                else{
                    $dosage_package_1= "";
                    $dosage_package_unit_1= "";
                    $dosage_package_quantity_1= "";
                    $dosage_package_quantity_unit_1= "";
                    // BD
                    $dosage_package_1_bd= "NULL";
                    $dosage_package_unit_1_bd= "NULL";
                    $dosage_package_quantity_1_bd= "NULL";
                    $dosage_package_quantity_unit_1_bd= "NULL";
                }
            }
            else{
                    $actival_name_1 = "";
                    $actival_name_1_bd = "NULL";
                    /*
                    ==================== DOSAGE 1 ============================
                    */
                    $dosage_1 = "";
                    $dosage_1_bd = "NULL";
                    $dosage_unit_1 = "";
                    $dosage_unit_1_bd = "NULL";


                    $dosage_package_1= "";
                    $dosage_package_unit_1= "";
                    $dosage_package_quantity_1= "";
                    $dosage_package_quantity_unit_1= "";
                    // BD
                    $dosage_package_1_bd= "NULL";
                    $dosage_package_unit_1_bd= "NULL";
                    $dosage_package_quantity_1_bd= "NULL";
                    $dosage_package_quantity_unit_1_bd= "NULL";
            }

                /*
                ==================== ACTIVAL NAME 2 ============================
                */
            $actival_name_2 = strip_tags($_POST["actival_name_2-$id"]);
            /*
            Si Actival name existe ou pas
            */
        if($actival_name_2 != "")
        {
        $actival_name_2 = strip_tags($_POST["actival_name_2-$id"]);
        $actival_name_2_bd = strip_tags($_POST["actival_name_2-$id"]);
                /*
                ==================== DOSAGE 2 ============================
                */
                $dosage_2 = strip_tags($_POST["dosage_2-$id"]);
                if($dosage_2 !=""){
                    $dosage_2 = strip_tags($_POST["dosage_2-$id"]);
                    $dosage_2_bd = strip_tags($_POST["dosage_2-$id"]);
                    $dosage_unit_2 = strip_tags($_POST["dosage_unit_2-$id"]);
                    $dosage_unit_2_bd = strip_tags($_POST["dosage_unit_2-$id"]);
                    
                }else{
                    $dosage_2 = "";
                    $dosage_2_bd = "NULL";
                    $dosage_unit_2 = "";
                    $dosage_unit_2_bd = "NULL";
                }
            /*POSOLOGY LIQUIDE
            Verification si il y ou il n'y a pas
            */
            $dosage_package_2 = strip_tags($_POST["dosage_package_2-$id"]);

            if($dosage_package_2 != ""){
                $dosage_package_2= strip_tags($_POST["dosage_package_2-$id"]);
                $dosage_package_unit_2= strip_tags($_POST["dosage_package_unit_2-$id"]);
                $dosage_package_quantity_2= strip_tags($_POST["dosage_package_quantity_2-$id"]);
                $dosage_package_quantity_unit_2= strip_tags($_POST["dosage_package_quantity_unit_2-$id"]);
                // BD
                $dosage_package_2_bd= strip_tags($_POST["dosage_package_2-$id"]);
                $dosage_package_unit_2_bd= strip_tags($_POST["dosage_package_unit_2-$id"]);
                $dosage_package_quantity_2_bd= strip_tags($_POST["dosage_package_quantity_2-$id"]);
                $dosage_package_quantity_unit_2_bd= strip_tags($_POST["dosage_package_quantity_unit_2-$id"]);
            }
            else{
                $dosage_package_2= "";
                $dosage_package_unit_2= "";
                $dosage_package_quantity_2= "";
                $dosage_package_quantity_unit_2= "";
                // BD
                $dosage_package_2_bd= "NULL";
                $dosage_package_unit_2_bd= "NULL";
                $dosage_package_quantity_2_bd= "NULL";
                $dosage_package_quantity_unit_2_bd= "NULL";
            }
        }
        else{
                $actival_name_2 = "";
                $actival_name_2_bd = "NULL";
                /*
                ==================== DOSAGE 2 ============================
                */

                $dosage_2 = "";
                $dosage_2_bd = "NULL";
                $dosage_unit_2 = "";
                $dosage_unit_2_bd = "NULL";

                $dosage_package_2= "";
                $dosage_package_unit_2= "";
                $dosage_package_quantity_2= "";
                $dosage_package_quantity_unit_2= "";
                // BD
                $dosage_package_2_bd= "NULL";
                $dosage_package_unit_2_bd= "NULL";
                $dosage_package_quantity_2_bd= "NULL";
                $dosage_package_quantity_unit_2_bd= "NULL";
        }
            /*
             ======================= EXPIRATION DATE ==========================
            */
            $expiration_date= strip_tags($_POST["expiration_date-$id"]);
            $_SESSION["error"] =[];
            /*
            ========================= FORM ==================================
            */
            $form= strip_tags($_POST["form-$id"]);
            $_SESSION["error"] =[];

            if($_SESSION["error"]===[]){
                /*
                on se connecte a la base
                */
                require_once("../../../../../php/dns/connect.php");
            
               
            /*ASSOCIATION DU NAME
            *WE TAKE ALL
            */
            $assoc_name = $actival_name_0 ." ". $actival_name_1 . " " . $actival_name_2;

                  /*
            ---------------------------ASSOCIATION DOSAGE-----------------------
            */
            include_once("../../../../../php/body/products/modify/medicals/medicines/affiche_units.php");

/*
===================== COMBINANAISON DES DOSAGE=======================
*/
//COMBINANASON DES DOSAGE
        /*
        ACTIVAL NAME 0
        DOSAGE
        */
        $comb_dosage_0 = $dosage_0 ."". $affiche_dosage_unit_0;
        /*
        PACKAGE
        */
            $comb_dosage_package_0 = $dosage_package_0 ."". $affiche_dosage_package_unit_0;
            $comb_dosage_package_quantity_0 = $dosage_package_quantity_0 ."". $affiche_dosage_package_quantity_unit_0;
         /*
        ACTIVAL NAME 1
        DOSAGE
        */
            $comb_dosage_1 = $dosage_1 ."". $affiche_dosage_unit_1;
        /*
        PACKAGE
        */
            $comb_dosage_package_1 = $dosage_package_1 ."". $affiche_dosage_package_unit_1;
            $comb_dosage_package_quantity_1 = $dosage_package_quantity_1 ."". $affiche_dosage_package_quantity_unit_1;
        /*
        ACTIVAL NAME 2
        DOSAGE
        */
            $comb_dosage_2 = $dosage_2 ."". $affiche_dosage_unit_2;
        /*
        PACKAGE
        */
            $comb_dosage_package_2 = $dosage_package_2 ."". $affiche_dosage_package_unit_2;
            $comb_dosage_package_quantity_2 = $dosage_package_quantity_2 ."". $affiche_dosage_package_quantity_unit_2;
           
        /*
        PACKAGE TOTAL
        */
        $total_package = $package ."". $affiche_package_unit;

        /*
        ==================  DOSAGE  ==========================
        */
        $assoc_dosage = $comb_dosage_0 . " " . $comb_dosage_package_0 ." ". $comb_dosage_package_quantity_0
        ." ". $comb_dosage_1 ." ". $comb_dosage_package_1 . " ". $comb_dosage_package_quantity_1 
        . " ". $comb_dosage_2 ." ". $comb_dosage_package_2 . " ". $comb_dosage_package_quantity_2 ." " . $total_package;
        
        $assoc_dosage = str_replace('  ', ' ', $assoc_dosage);
        /*
        ==================  PRINCIPE ACTIF  ==========================
        */
               
        $Name = $assoc_name . " ". $assoc_dosage ." ". $affiche_form;
                // print_r($Name);
        $Name = str_replace('  ', ' ', $Name);

            /*
            =========ON INJECT LE L'APPLICATION =================
            */  
        // IDENTIFICATION
            $sql_medicine_id= "UPDATE `medicine_id` SET 
                `name`= '$Name',
                `assoc_name`= '$assoc_name',
                /*name details*/
                `commercial_name`='$commercial_name',
                /*actival name 0*/ 
                `actival_name_0`= '$actival_name_0',
                `dosage_0`= '$dosage_0',
                `dosage_unit_0`= '$dosage_unit_0',
                `dosage_package_0`= '$dosage_package_0_bd',
                `dosage_package_unit_0`= '$dosage_package_unit_0_bd',
                `dosage_package_quantity_0`='$dosage_package_quantity_0_bd',
                `dosage_package_quantity_unit_0`= '$dosage_package_quantity_unit_0_bd',
                /*actival name 1*/
                `actival_name_1`='$actival_name_1_bd',
                `dosage_1`= '$dosage_1_bd',
                `dosage_unit_1`= '$dosage_unit_1_bd',
                `dosage_package_1`= '$dosage_package_1_bd',
                `dosage_package_unit_1` = '$dosage_package_unit_1_bd',
                `dosage_package_quantity_1`='$dosage_package_quantity_1_bd',
                `dosage_package_quantity_unit_1`= '$dosage_package_quantity_unit_1_bd',
                 /*actival name 2*/
                `actival_name_2`= '$actival_name_2_bd',
                `dosage_2`='$dosage_2_bd',
                `dosage_unit_2`='$dosage_unit_2_bd',
                `dosage_package_2`= '$dosage_package_2_bd',
                `dosage_package_unit_2`= '$dosage_package_unit_2_bd',
                `dosage_package_quantity_2`=  '$dosage_package_quantity_2_bd',
                `dosage_package_quantity_unit_2`= '$dosage_package_quantity_unit_2_bd',
                /*TOTAL PACKAGE*/
                `package`= '$package_bd',
                `package_unit`= '$package_unit_bd',
                /* epiration date*/
                `expiration_date`= '$expiration_date',
                /*form*/
                `form`='$form'
                WHERE 
                `medicine_id`.`id_med` = '$id'
     ";


            //On prerare la requete
            $query_medicine_id = $db->prepare($sql_medicine_id);

            //On execute la requete
            $query_medicine_id->execute();
        
            /*
             Application
             */
            $sql_medicine_application= "UPDATE `medicine_application` SET
            `med_name` = '$Name'
            WHERE 
            `medicine_application`.`id_med` = '$id'";

            //On prerare la requete
            $query_medicine_application = $db->prepare($sql_medicine_application);
            //On execute la requete
           $query_medicine_application->execute();

             /*
            ======================== UPDATE NAME IN CLASSIFCAATION CLASSIFICATION =============
            */
            $sql_medicine_classification= "UPDATE`medicine_classification` SET 
            `med_name`= '$Name' 
            WHERE 
            `medicine_classification`.`id_med` = '$id'";

            //On prerare la requete
            $query_medicine_classificaiton = $db->prepare($sql_medicine_classification);
            //On execute la requete
            $query_medicine_classificaiton->execute();
            //On connectera l'utilisateur

             /*
            ======================== UPDATE NAME LOCATION =============
            */
            $sql_medicine_location= "UPDATE `medicine_location` SET
            `med_name`= '$Name'  
            WHERE 
            `medicine_location`.`id_med` = '$id'";


            //On prerare la requete
            $query_medicine_location = $db->prepare($sql_medicine_location);
            //On execute la requete
            $query_medicine_location->execute();

            /*
            ======================== UPDATE PRICE =============
            */
            $sql_medicine_price= "UPDATE`medicine_price` SET 
            `med_name`= '$Name'   
            WHERE 
            `medicine_price`.`id_med` = '$id'";

            //On prerare la requete
            $query_medicine_price = $db->prepare($sql_medicine_price);
            //On execute la requete
            $query_medicine_price->execute();

            /*
            ======================== UPDATE FROM =============
            */
            $sql_medicine_from= "UPDATE `medicine_from` SET
            `med_name`= '$Name'   
            WHERE 
            `medicine_from`.`id_med` = '$id'";

            //On prerare la requete
            $query_medicine_from = $db->prepare($sql_medicine_from);
            //On execute la requete
            $query_medicine_from->execute();

            /*
            ======================== UPDATE AUTHORIZATION ACTIVE =============
            */
            $sql_medicine_auth = "UPDATE `medicine_authorizations_active` SET
            `med_name`= '$Name'   
            WHERE 
            `medicine_authorizations_active`.`id_med` = '$id'";

            //On prerare la requete
            $query_medicine_auth= $db->prepare($sql_medicine_auth);
            //On execute la requete
            $query_medicine_auth->execute();

            /*
            ======================== UPDATE AUTHORIZATION PASSSIVE =============
            */
            $sql_medicine_auth_passive = "UPDATE `medicine_authorizations_passive` SET
            `med_name`= '$Name'   
            WHERE 
            `medicine_authorizations_passive`.`id_med` = '$id'";

            //On prerare la requete
            $query_medicine_auth_passive= $db->prepare($sql_medicine_auth_passive);
            //On execute la requete
            $query_medicine_auth_passive->execute();

            /*
            ======================== UPDATE AUTHORIZATION TEMPORARY =============
            */
            $sql_medicine_auth_temporary= "UPDATE `medicine_authorizations_temporary` SET
            `med_name`= '$Name'   
            WHERE 
            `medicine_authorizations_temporary`.`id_med` = '$id'";

            //On prerare la requete
            $query_medicine_auth_temporary= $db->prepare($sql_medicine_auth_temporary);
            //On execute la requete
            $query_medicine_auth_temporary->execute();

            }    

}
    }
}
?>