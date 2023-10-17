<?php
if(!empty($_POST)){
    if(
        include_once("../../../../../php/body/products/add/medicines/2_isset_empty.php")
    ){
        //ON INCLU LES IDENTIFICATION DES VARIABLE
        include_once("../../../../../php/body/products/add/medicines/3_identification.php");

            // PAS D'ERREUR SUR LES DONNEES
            if($_SESSION["error"]===[]){

            //  CONNECTION A LA BASE 
            require_once("../../../../../php/dns/connect.php");
        
            //    ABREVIATION
            include_once("../../../../../php/body/products/add/medicines/4_abreviation.php");
            
            /*
            =========================================== ASSOCIATION NAME ====================================================
            */
            //ON INCLU LES IDENTIFICATION DES VARIABLE
            include("../../../../../php/body/products/add/medicines/5_descriptions.php");


            /*
            ================================== ASSOCIATION DOSAGE =============================================
            */
            include_once("../../../../../php/body/products/add/medicines/6_affiche_units.php");
            
            /*
            ================================== ASSOCIATION DES NAME ===========================================
            */
            include_once("../../../../../php/body/products/add/medicines/7_dosage.php");

            /*
            ================================== APPLICATION ===========================================
            */
            include_once("../../../../../php/body/products/add/medicines/8_application.php");
                 
            /*
            ================== ASSOCIATION CLASSIFCIATION ==========================
            */
            include_once("../../../../../php/body/products/add/medicines/9_affiche_classification.php");
            include_once("../../../../../php/body/products/add/medicines/10_classification.php");

            /*
            ==================  LOCATION ==========================
            */
            include_once("../../../../../php/body/products/add/medicines/11_affiche_location.php");
            include_once("../../../../../php/body/products/add/medicines/12_location.php");
    
            /*
            ======================== ON INSERT LE FROM =============================
            */
            //GERMANY
                    $froms_germany = isSet($_POST['froms_germany']) ? 1 : 0;
            //MADAGASKAR
                    $froms_madagaskar = isSet($_POST['froms_madagaskar']) ? 1 : 0;
            /*
            ============= NOM DE L'IMG==================================
            */
            
            $file_name = "medicine-img-" . $file_name;

            /*
            =================================VERIFICATION DEJA ENREGISTRER=======================
            */
            $check_medicine_id= mysqli_query($dbc,"SELECT * FROM `medicine_id` WHERE `Descriptions` ='$name'");
            $checkrows_medicine_id=mysqli_num_rows($check_medicine_id);
 
            if($checkrows_medicine_id > 0)
            {$_SESSION["error"][] = "This medicines is alredy register";}
            else
            {
            /*
            =========ON INJECT LE L'APPLICATION =================
            */  
            include_once("../../../../../php/body/products/add/medicines/13_affiche_applications.php");            
            include_once("../../../../../php/body/products/add/medicines/14_affiche_box.php");

            //MEDICINE ID 
            $sql_medicine_id= "INSERT INTO `medicine_id` 
                (`med_abrev`,
                `med_nbr_abrev`,
                `id_code_med`,
                `Descriptions`,
                `assoc_name`,
                /*name details*/
                `commercial_name`,
                /*actival name 0*/ 
                `actival_name_0`,
                `dosage_0`,
                `dosage_unit_0`,
                `dosage_package_0`,
                `dosage_package_unit_0`,
                `dosage_package_quantity_0`,
                `dosage_package_quantity_unit_0`,
                `package`,
                `package_unit`,
                /*actival name 1*/
                `actival_name_1`,
                `dosage_1`,
                `dosage_unit_1`,
                `dosage_package_1`,
                `dosage_package_unit_1`,
                `dosage_package_quantity_1`,
                `dosage_package_quantity_unit_1`,
                 /*actival name 2*/
                `actival_name_2`,
                `dosage_2`,
                `dosage_unit_2`,
                `dosage_package_2`,
                `dosage_package_unit_2`,
                `dosage_package_quantity_2`,
                `dosage_package_quantity_unit_2`,
                /* epiration date*/
                `expiration_date`,
                /*form*/
                `form`,
                 /*name adding*/
                `name_adding`,
                `med_img`
                ) 
            VALUES 
                ('$med_abrev',
                '$med_nbr_abrev',
                '$id_code_med',
                '$name',
                '$assoc_name',
                /*name details*/
                '$commercial_name', 
                /*actival name 0*/
                '$actival_name_0',
                '$dosage_0',
                '$dosage_unit_0',
                '$dosage_package_0',
                '$dosage_package_unit_0',
                '$dosage_package_quantity_0',
                '$dosage_package_quantity_unit_0',
                '$package',
                '$package_unit',
                /*actival name 1*/
                '$actival_name_1',
                '$dosage_1',
                '$dosage_unit_1',
                '$dosage_package_1',
                '$dosage_package_unit_1',
                '$dosage_package_quantity_1',
                '$dosage_package_quantity_unit_1',
                /*actival name 2*/
                '$actival_name_2',
                '$dosage_2',
                '$dosage_unit_2',
                '$dosage_package_2',
                '$dosage_package_unit_2',
                '$dosage_package_quantity_2',
                '$dosage_package_quantity_unit_2',
                /* epiration date*/
                '$expiration_date',
                /*form*/
                '$form',
                /*name adding*/
                '$name_adding',
                '$file_name'
                )";


            //On prerare la requete
            $query_medicine_id = $db->prepare($sql_medicine_id);

            //On execute la requete
            $query_medicine_id->execute();

            //On recupere l'id de l'article
            $medicine_id = $db->lastInsertId();
            
            // APPLICATION
            $sql_medicine_application= "INSERT INTO `medicine_application` 
            (`id`, 
            `id_med`,  
            `med_affiche_application`, 
            `med_application`) 
            VALUES 
            (NULL, 
            '$medicine_id', 
            '$affiche_application', 
            '$application'
            )";

            //On prerare la requete
            $query_medicine_application = $db->prepare($sql_medicine_application);
            //On execute la requete
           $query_medicine_application->execute();
           
            /*
            ======================== INSERTION CLASSIFICATION =============
            */
           $sql_medicine_classification= "INSERT INTO `medicine_classification` 
            (`id`, 
            `id_med`,  
            `med_affiche_classification`, 
            `classification_0`, 
            `classification_1`, 
            `classification_2`) 
            VALUES 
            (NULL, 
            '$medicine_id', 
            '$classification', 
            '$classification_0', 
            '$classification_1', 
            '$classification_2')";

            //On prerare la requete
            $query_medicine_classificaiton = $db->prepare($sql_medicine_classification);
            //On execute la requete
           $query_medicine_classificaiton->execute();
            //On connectera l'utilisateur
    
    /*
    ======================== INSERTION LOCATION =============
    */
    $sql_medicine_location= "INSERT INTO `medicine_location` 
    (`id`, 
    `id_med`, 
    `med_affiche_location`, 
    `location_0`, 
    `location_1`, 
    `location_2`) 
    VALUES 
    (NULL, 
    '$medicine_id', 
    '$location', 
    '$location_0', 
    '$location_1', 
    '$location_2')";

    //On prerare la requete
    $query_medicine_location = $db->prepare($sql_medicine_location);
    //On execute la requete
   $query_medicine_location->execute();
    
    /*
    ======================== INSERTION PRICE =============
    */
    $sql_medicine_price= "INSERT INTO `medicine_price` (`id`, `id_med`, `price_quantity`, `box`, `box_name`, `price`) VALUES 
                                                        (NULL, '$medicine_id', '$med_quantity', '$box', '$affiche_box', '$med_price')";
   
    //On prerare la requete
    $query_medicine_price = $db->prepare($sql_medicine_price);
    //On execute la requete
   $query_medicine_price->execute();

   /*
    ======================== INSERTION FROM =============
    */
    $sql_medicine_from= "INSERT INTO `medicine_from` 
    (`id`, 
    `id_med`,  
    `germany`,
    `madagaskar`) 
    VALUES 
    (NULL, 
    '$medicine_id',  
    '$froms_germany',
    '$froms_madagaskar')"; 

    //On prerare la requete
    $query_medicine_from = $db->prepare($sql_medicine_from);
    //On execute la requete
   $query_medicine_from->execute();

   /*
   ===== ON INCLUT LA QUANTITE=====================
   */
  $sql_medicine_quantity= "INSERT INTO `medicine_quantity` 
  (`id`, `id_med`, 
  `quantity_initial`, `quantity_minimal`, `quantity_avarage`, 
  `stock`, `stock_in`, `stock_out`) 
  VALUES (NULL,
    '$medicine_id', 
    '$quantity_initial', '$quantity_minimal', '$quantity_avarage',
    '$quantity_initial', '$stock_in', '$stock_out')";

    //On prerare la requete
    $query_medicine_quantity = $db->prepare($sql_medicine_quantity);
    //On execute la requete
   $query_medicine_quantity->execute();

    /*
    =============ON ILCU LE DYNAMIC DE L'AUTORIZATION===========
    */
    include_once("../../../../../php/body/products/authorizations/dynamic_authorization.php");

    /*
    =============ON ILCU LE DYNAMIC DE PATIENTS SYSTEM ITEMS===========
    */
    include_once("../../../../../php/body/products/add/medicines/add_patient_system.php");

     /*
    =============ON ILCU LE DYNAMIC DE PATIENTS SYSTEM INVENTORY===========
    */
    include_once("../../../../../php/body/products/add/medicines/inventory.php");

             //On va stocke dans $_SESSION les inforamations de l'utilisateur
             $_SESSION["medicine"] = [
                "medicine_id" => $medicine_id,
            ];

        header("Location: ../../view/view");
    }       
}
}
else
{$_SESSION["error"] = ["The file isn't complet"];}
}
?>