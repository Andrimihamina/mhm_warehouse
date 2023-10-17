<?php
session_start();
/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
*/

include_once("../../../../dns/connect.php");

if(!empty($_POST)){
    
foreach( $_POST as $cles =>$values)
    {
     /*   
    echo "<pre>";
    echo $cles." = ".$values;
    echo "</pre>";
    */

    /*====================== ANULATION=========================*/
    if($_POST["cancel"] == "cancel"){
       //LES 13 PREMIERE LETTRE
      $id = substr($cles, 0, 14);
      //ID CONS
      $id_cons = substr($cles, 0, 18);

      //LES 3PREMIER LETTRE
      $abbrev_value =  substr($id, 0, 3);
      //LES 7LETRE PREMIER QUI EST POUR LES CONSOMABLE ET MATERIALS
      $abbrev_value_indentif =  substr($id, 0, 8);
       
      /*============MEDICINE================================*/
      require("../../../../../php/body/flux/output/research/cancel/medicines.php");
    
      /*============CONSUMABLES MEDICALE================================*/
      require("../../../../../php/body/flux/output/research/cancel/cons_med.php");

      /*============MAT MED MEDICALE================================*/
      require("../../../../../php/body/flux/output/research/cancel/mat_med.php");
   
       /*============CONSUMABLES LOGISTICS================================*/
       require("../../../../../php/body/flux/output/research/cancel/cons_log.php");
      
        /*============MATERIALS LOGISTICS================================*/
        require("../../../../../php/body/flux/output/research/cancel/mat_log.php");

   /*===================== REGISTRATION============================*/
    }elseif($_POST["register"] == "done"){
        /*
        On  update le donne 
       */
    //LES 13 PREMIERE LETTRE
    $id = substr($cles, 0, 14);
    //ID CONS
    $id_cons = substr($cles, 0, 18);

    //LES 3PREMIER LETTRE
    $abbrev_value =  substr($id, 0, 3);
    //LES 7LETRE PREMIER QUI EST POUR LES CONSOMABLE ET MATERIALS
    $abbrev_value_indentif =  substr($id, 0, 8);

   /*============MEDICINE================================*/
      require("../../../../../php/body/flux/output/research/register_categories/medicines.php"); 
   /*============CONSUMABLES MEDICALE================================*/
      require("../../../../../php/body/flux/output/research/register_categories/cons_med.php");
   /*============MATERIAL MEDICALE================================*/
      require("../../../../../php/body/flux/output/research/register_categories/mat_med.php");
   /*============CONSUMABLES LOGISTICS================================*/
     require("../../../../../php/body/flux/output/research/register_categories/cons_log.php");
   /*============MATERIALS LOGISTICS================================*/
      require("../../../../../php/body/flux/output/research/register_categories/mat_log.php");
   /*============CONSUMABLES TECHNICALS================================*/
      require("../../../../../php/body/flux/output/research/register_categories/cons_tec.php");
   /*============MATERIALS TECHNICALS================================*/
      require("../../../../../php/body/flux/output/research/register_categories/mat_tec.php");
   /*============CONSUMABELS ITC================================*/
      require("../../../../../php/body/flux/output/research/register_categories/cons_itc.php");
   /*============MATERIALS ITC================================*/
      require("../../../../../php/body/flux/output/research/register_categories/mat_itc.php");
   /*============CONSUMABLES FOODS================================*/
      require("../../../../../php/body/flux/output/research/register_categories/cons_foo.php");
   /*============MATERIALS FOODS================================*/
      require("../../../../../php/body/flux/output/research/register_categories/mat_foo.php");
   /*============MATERIALS IMMO================================*/
   require("../../../../../php/body/flux/output/research/register_categories/mat_imo.php");
       }

       unset($_SESSION["services"]); 

       header("Location: ../../../../../html/body/flux_output/orders/research");
    }
}
?>