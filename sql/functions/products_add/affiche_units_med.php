<?php
/*============== ACTIVAL NAME 0 ==========================*/
// DOSAGE UNITS 0 
    if($dosage_unit_0 != NULL AND $dosage_unit_0 != "Choose..."){
        $sql_affiche_dosage__unit_0 = "SELECT * FROM `med_units` WHERE `id_units_mv` = $dosage_unit_0";
        $requete_affiche_dosage_unit_0  = $db->query($sql_affiche_dosage__unit_0);
        $affiche_dosage_unit_0 = $requete_affiche_dosage_unit_0 ->fetchAll();

          $affiche_dosage_unit_0 = $affiche_dosage_unit_0[0]["units_description"];
    }else{$affiche_dosage_unit_0 = NULL;}
// DOSAGE PACKAGE UNITS 0
    if($dosage_package_unit_0 != NULL AND $dosage_package_unit_0 != "Choose..."){
    $sql_affiche_dosage_package_unit_0 = "SELECT * FROM `med_units` WHERE `id_units_mv` = $dosage_package_unit_0";
    $requete_affiche_package_unit_0 = $db->query($sql_affiche_dosage_package_unit_0);
    $affiche_dosage_package_unit_0 = $requete_affiche_package_unit_0->fetchAll();

          $affiche_dosage_package_unit_0= $affiche_dosage_package_unit_0[0]["units_description"];
    }else{$affiche_dosage_package_unit_0 = NULL;
    }
// PACKAGE PER DOSAGE  UNITS 0
    if($dosage_package_quantity_unit_0 != NULL AND $dosage_package_quantity_unit_0 != "Choose..."){
    $sql_affiche_dosage_package_quantity_unit_0 = "SELECT * FROM `med_units` WHERE `id_units_mv` = $dosage_package_quantity_unit_0";
    $requete_dosage_package_quantity_unit_0 = $db->query($sql_affiche_dosage_package_quantity_unit_0);
    $affiche_dosage_package_quantity_unit_0 = $requete_dosage_package_quantity_unit_0->fetchAll();

          $affiche_dosage_package_quantity_unit_0 = $affiche_dosage_package_quantity_unit_0[0]["units_description"];
    }else{$affiche_dosage_package_quantity_unit_0 = NULL;}

/*============== ACTIVAL NAME 1 ==========================*/
// DOSAGE UNITS 1
    if($dosage_unit_1 != NULL AND $dosage_unit_1 != "Choose..."){
    $sql_affiche_dosage_unit_1 = "SELECT * FROM `med_units` WHERE `id_units_mv` = $dosage_unit_1";
    $requete_affiche_dosage_unit_1  = $db->query($sql_affiche_dosage_unit_1);
    $affiche_dosage_unit_1 = $requete_affiche_dosage_unit_1 ->fetchAll();

          $affiche_dosage_unit_1 = $affiche_dosage_unit_1[0]["units_description"];
    }else{$affiche_dosage_unit_1 = NULL;}
// DOSAGE PACKAGE UNITS 1
if($dosage_package_unit_1 != NULL AND $dosage_package_unit_1 != "Choose..."){
     $sql_affiche_dosage_package_unit_1 = "SELECT * FROM `med_units` WHERE `id_units_mv` = $dosage_package_unit_1";
     $requete_affiche_dosage_package_unit_1 = $db->query($sql_affiche_dosage_package_unit_1);
     $affiche_dosage_package_unit_1 = $requete_affiche_dosage_package_unit_1 ->fetchAll();

          $affiche_dosage_package_unit_1= $affiche_dosage_package_unit_1[0]["units_description"];
     }else{$affiche_dosage_package_unit_1 = NULL;} 
// PACKAGE PER DOSAGE  UNITS 1
     if($dosage_package_quantity_unit_1 != NULL AND $dosage_package_quantity_unit_1 != "Choose..."){
     $sql_affiche_dosage_package_quantity_unit_1 = "SELECT * FROM `med_units` WHERE `id_units_mv` = $dosage_package_quantity_unit_1";
     $requete_affiche_dosage_package_quantity_unit_1 = $db->query($sql_affiche_dosage_package_quantity_unit_1);
     $affiche_dosage_package_quantity_unit_1 = $requete_affiche_dosage_package_quantity_unit_1->fetchAll();

          $affiche_dosage_package_quantity_unit_1= $affiche_dosage_package_quantity_unit_1[0]["units_description"];
     }else{$affiche_dosage_package_quantity_unit_1 = NULL;}

/*============== ACTIVAL NAME 2 ==========================*/
// DOSAGE UNITS 2
    if( $dosage_unit_2 != NULL AND $dosage_unit_2 != "Choose..."){
    $sql_affiche_dosage__unit_2 = "SELECT * FROM `med_units` WHERE `id_units_mv` = $dosage_unit_2";
    $requete_affiche_dosage_unit_2  = $db->query($sql_affiche_dosage__unit_2);
    $affiche_dosage_unit_2 = $requete_affiche_dosage_unit_2 ->fetchAll();

          $affiche_dosage_unit_2 = $affiche_dosage_unit_2[0]["units_description"];
    }else{$affiche_dosage_unit_2 = NULL;}
// DOSAGE PACKAGE UNITS 2
     if($dosage_package_unit_2 != NULL AND $dosage_package_unit_2 != "Choose..."){
     $sql_affiche_dosage_package_unit_2 = "SELECT * FROM `med_units` WHERE `id_units_mv` = $dosage_package_unit_2";
     $requete_affiche_dosage_package_unit_2 = $db->query($sql_affiche_dosage_package_unit_2);
     $affiche_dosage_package_unit_2 = $requete_affiche_dosage_package_unit_2 ->fetchAll();

     $affiche_dosage_package_unit_2 = $affiche_dosage_package_unit_2[0]["units_description"];
     }else{$affiche_dosage_package_unit_2 =NULL;} 
// PACKAGE PER DOSAGE  UNITS 1
     if($dosage_package_quantity_unit_2 != NULL AND $dosage_package_quantity_unit_2 != "Choose..."){
     $sql_affiche_dosage_package_quantity_unit_2 = "SELECT * FROM `med_units` WHERE `id_units_mv` = $dosage_package_quantity_unit_2";
     $requete_affiche_dosage_package_quantity_unit_2 = $db->query($sql_affiche_dosage_package_quantity_unit_2);
     $affiche_dosage_package_quantity_unit_2 = $requete_affiche_dosage_package_quantity_unit_2->fetchAll();

          $affiche_dosage_package_quantity_unit_2= $affiche_dosage_package_quantity_unit_2[0]["units_description"];
     }else{$affiche_dosage_package_quantity_unit_2= NULL;}
  
/*============== PACKAGE UNIT==========================*/
     if($package_unit !=NULL AND $package_unit != "Choose..."){
     $sql_affiche_package_unit = "SELECT * FROM `med_units` WHERE `id_units_mv` = $package_unit";
     $requete_affiche_package_unit= $db->query($sql_affiche_package_unit);     
     $affiche_package_unit = $requete_affiche_package_unit->fetchAll();

          $affiche_package_unit= $affiche_package_unit[0]["units_description"];
     }else{$affiche_package_unit = NULL;}

/*============== FORMS=================================*/
  if($form != NULL AND $form != "Choose..."){
     $sql_affiche_form = "SELECT * FROM `med_form` WHERE `id_form` = $form";
     $requete_affiche_form= $db->query($sql_affiche_form);
     $affiche_form = $requete_affiche_form->fetchAll();
   
          $affiche_form= $affiche_form[0]["forms_description"];
     }else{$affiche_form = NULL;}
?>