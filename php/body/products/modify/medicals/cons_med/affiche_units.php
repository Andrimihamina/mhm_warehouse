<?php
     require_once("../../../../../php/dns/connect.php");
     /*
     ============== DOSAGE UNITS 0========================================
     */
    if($dosage_unit_0 != ""){
        $sql_affiche_dosage__unit_0 = "SELECT * FROM `med_units` WHERE `id_units_mv` = '$dosage_unit_0'";

        //On excute directement la requete
        $requete_affiche_dosage_unit_0  = $db->query($sql_affiche_dosage__unit_0);

        //On recupere les donnees (fetch ou fetchall)
        $affiche_dosage_unit_0 = $requete_affiche_dosage_unit_0 ->fetch();

       $affiche_dosage_unit_0 = $affiche_dosage_unit_0["units_description"];
    }else{
     $affiche_dosage_unit_0 = "";
    }
     /*
     ============== DOSAGE PACKAGE UNITS 0========================================
     */
    if($dosage_package_unit_0_bd != "NULL"){
    $sql_affiche_dosage_package_unit_0 = "SELECT * FROM `med_units` WHERE `id_units_mv` = '$dosage_package_unit_0_bd'";

    //On excute directement la requete
    $requete_affiche_package_unit_0 = $db->query($sql_affiche_dosage_package_unit_0);

    //On recupere les donnees (fetch ou fetchall)
    $affiche_dosage_package_unit_0 = $requete_affiche_package_unit_0->fetch();

   $affiche_dosage_package_unit_0= $affiche_dosage_package_unit_0["units_description"];
    }else{
     $affiche_dosage_package_unit_0 = "";
    }
   /*
   ============== PACKAGE PER DOSAGE  UNITS 0========================================
     */
    if($dosage_package_quantity_unit_0_bd != "NULL"){
    $sql_affiche_dosage_package_quantity_unit_0 = "SELECT * FROM `med_units` WHERE `id_units_mv` = '$dosage_package_quantity_unit_0_bd'";

    //On excute directement la requete
    $requete_dosage_package_quantity_unit_0 = $db->query($sql_affiche_dosage_package_quantity_unit_0);

    //On recupere les donnees (fetch ou fetchall)
    $affiche_dosage_package_quantity_unit_0 = $requete_dosage_package_quantity_unit_0->fetch();

   $affiche_dosage_package_quantity_unit_0 = $affiche_dosage_package_quantity_unit_0["units_description"];
    }else{
     $affiche_dosage_package_quantity_unit_0 = "";
    }
  /*
  ============================ 1====================================
  */
    /*
     ============== DOSAGE UNITS 1========================================
     */
    if($dosage_unit_1_bd != "NULL"){
    $sql_affiche_dosage_unit_1 = "SELECT * FROM `med_units` WHERE `id_units_mv` = '$dosage_unit_1_bd'";

    //On excute directement la requete
    $requete_affiche_dosage_unit_1  = $db->query($sql_affiche_dosage_unit_1);

    //On recupere les donnees (fetch ou fetchall)
    $affiche_dosage_unit_1 = $requete_affiche_dosage_unit_1 ->fetch();

   $affiche_dosage_unit_1 = $affiche_dosage_unit_1["units_description"];
    }else{
     $affiche_dosage_unit_1 = "";
    }
 /*
 ============== DOSAGE PACKAGE UNITS 1========================================
 */
if($dosage_package_unit_1_bd != "NULL"){
$sql_affiche_dosage_package_unit_1 = "SELECT * FROM `med_units` WHERE `id_units_mv` = '$dosage_package_unit_1_bd'";

//On excute directement la requete
$requete_affiche_dosage_package_unit_1 = $db->query($sql_affiche_dosage_package_unit_1);

//On recupere les donnees (fetch ou fetchall)
$affiche_dosage_package_unit_1 = $requete_affiche_dosage_package_unit_1 ->fetch();

$affiche_dosage_package_unit_1= $affiche_dosage_package_unit_1["units_description"];
}else{
     $affiche_dosage_package_unit_1 = "";
} 
/*
============== PACKAGE PER DOSAGE  UNITS 1========================================
 */
if($dosage_package_quantity_unit_1_bd != "NULL"){
$sql_affiche_dosage_package_quantity_unit_1 = "SELECT * FROM `med_units` WHERE `id_units_mv` = '$dosage_package_quantity_unit_1_bd'";

//On excute directement la requete
$requete_affiche_dosage_package_quantity_unit_1 = $db->query($sql_affiche_dosage_package_quantity_unit_1);

//On recupere les donnees (fetch ou fetchall)
$affiche_dosage_package_quantity_unit_1 = $requete_affiche_dosage_package_quantity_unit_1->fetch();

$affiche_dosage_package_quantity_unit_1= $affiche_dosage_package_quantity_unit_1["units_description"];
}else{
     $affiche_dosage_package_quantity_unit_1 = "";
}
 /*
  ============================ 2====================================
  */
    /*
     ============== DOSAGE UNITS 2========================================
     */
    if( $dosage_unit_2_bd != "NULL"){
    $sql_affiche_dosage__unit_2 = "SELECT * FROM `med_units` WHERE `id_units_mv` = '$dosage_unit_2_bd'";

    //On excute directement la requete
    $requete_affiche_dosage_unit_2  = $db->query($sql_affiche_dosage__unit_2);

    //On recupere les donnees (fetch ou fetchall)
    $affiche_dosage_unit_2 = $requete_affiche_dosage_unit_2 ->fetch();

   $affiche_dosage_unit_2 = $affiche_dosage_unit_2["units_description"];
    }else{
     $affiche_dosage_unit_2 = "";
    }
 /*
 ============== DOSAGE PACKAGE UNITS 2========================================
 */
if($dosage_package_unit_2_bd != "NULL"){
$sql_affiche_dosage_package_unit_2 = "SELECT * FROM `med_units` WHERE `id_units_mv` = '$dosage_package_unit_2_bd'";

//On excute directement la requete
$requete_affiche_dosage_package_unit_2 = $db->query($sql_affiche_dosage_package_unit_2);

//On recupere les donnees (fetch ou fetchall)
$affiche_dosage_package_unit_2 = $requete_affiche_dosage_package_unit_2 ->fetch();

$affiche_dosage_package_unit_2 = $affiche_dosage_package_unit_2["units_description"];
}else{
     $affiche_dosage_package_unit_2 ="";
} 
/*
============== PACKAGE PER DOSAGE  UNITS 1========================================
 */
if($dosage_package_quantity_unit_2_bd != "NULL"){
$sql_affiche_dosage_package_quantity_unit_2 = "SELECT * FROM `med_units` WHERE `id_units_mv` = '$dosage_package_quantity_unit_2_bd'";

//On excute directement la requete
$requete_affiche_dosage_package_quantity_unit_2 = $db->query($sql_affiche_dosage_package_quantity_unit_2);

//On recupere les donnees (fetch ou fetchall)
$affiche_dosage_package_quantity_unit_2 = $requete_affiche_dosage_package_quantity_unit_2->fetch();

$affiche_dosage_package_quantity_unit_2= $affiche_dosage_package_quantity_unit_2["units_description"];
}else{
     $affiche_dosage_package_quantity_unit_2= "";  
}
  
   /*
   ============== PACKAGE UNIT========================================
   */
  if($package_unit_bd !="NULL"){
  $sql_affiche_package_unit = "SELECT * FROM `med_units` WHERE `id_units_mv` = '$package_unit_bd'";

  //On excute directement la requete
  $requete_affiche_package_unit= $db->query($sql_affiche_package_unit);

  //On recupere les donnees (fetch ou fetchall)
  $affiche_package_unit = $requete_affiche_package_unit->fetch();

 $affiche_package_unit= $affiche_package_unit["units_description"];
  }else{
     $affiche_package_unit = "";
  }


  /*
   ============== FORMS========================================
   */
  if($form != ""){
     $sql_affiche_form = "SELECT * FROM `med_form` WHERE `id_form` = '$form'";
   
     //On excute directement la requete
     $requete_affiche_form= $db->query($sql_affiche_form);
   
     //On recupere les donnees (fetch ou fetchall)
     $affiche_form = $requete_affiche_form->fetch();
   
    $affiche_form= $affiche_form["forms_description"];
     }else{
        $affiche_form = "";
     }

  
?>