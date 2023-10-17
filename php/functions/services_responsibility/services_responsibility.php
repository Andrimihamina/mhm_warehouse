<?php
    //On connect le msqli
    require_once "../../../../../php/dns/connect.php";
    
    /*RECHERCHER LE SERVICE VALIDE POUR LE RESPONSABLE*/
    $id_resp = $responsi[0]["id_resp"];            
    //OPTION BUTTUN LIST DEROULANT          
    $list_services = $mysqli -> query("SELECT id_service, services FROM service_responsibility WHERE `$id_resp` = 1");

    include_once("../../../../../php/dns/connect.php");

    //MEDICINE ID
     $sql_medicine_id= "SELECT id_med,  FROM `medicine_authorizations_active`  ORDER BY `id_med` ASC";

     //On execute la requete
     $requete_medicine_id = $db->query($sql_medicine_id);

     //On recupere les donnes
     $products_medicine_id= $requete_medicine_id->fetchAll();
?> 