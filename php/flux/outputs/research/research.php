<?php
if(!isset($_SESSION["services"])){header("Location: ../flux/outputs_services.php");
    exit;
}

$priority = $_SESSION["services"]["priority"];
$services = $_SESSION["services"]["services"];

// SERVICE AFFICHE
if($services!=""){
    $sql_services = "SELECT * FROM `services` WHERE `id_service` = '$services'";
    $requete_services = $db->query($sql_services);
    $affiche_services = $requete_services ->fetchall();
    $services_affiches =  $affiche_services[0]["services_descriptions"];
}

$nbr_chr = $_SESSION["services"]["nbr_chr"];
$id_code_out = $_SESSION["services"]["id_code_out"];

foreach( $_POST as $cle =>$value ){
    if ($value == "done"){
      $var_id = "$cle";

    $categories = substr($var_id, 0, 13);
    
    // MEDICINE
    include_once("categories/medicines.php"); 

    // CONSUMABLES MEDICAL
    include_once("categories/cons_med.php");

    // MATERIALS MEDICAL
    include_once("categories/mat_med.php");

    // CONSUMABLES LOGISTIC
    include_once("categories/cons_log.php");

    // MATERIALS LOGISTIC
    include_once("categories/mat_log.php");

    // CONSUMABLES TECHICAL
    include_once("categories/cons_tec.php");

    // MATERIALS TECHICAL
    include_once("categories/mat_tec.php");

    // CONSUMABLES ITC
    include_once("categories/cons_itc.php");

    // MATERIALS ITC
    include_once("categories/mat_itc.php");

    // CONSUMABLES FOODS
    include_once("categories/cons_foo.php");

    // MATERIALS FOODS
    include_once("categories/mat_foo.php");

    // MATERIALS IMMO
    include_once("categories/mat_imo.php");
    }
    
}
 
?>