<?php
include_once ("../../env/dns_warehouse.php");
// DOSAGE UNITS 0
     $id_dosage_unit_0 = $edits_med_id[0]["dosage_unit_0"];
     if($id_dosage_unit_0 !=""){
     $sql_edit_units_dosage_0= "SELECT * FROM medicine_id JOIN med_units ON medicine_id.dosage_unit_0 = med_units.id_units_mv  WHERE medicine_id.dosage_unit_0 = '$id_dosage_unit_0'";
     $requete_edit_units_dosage_0 = $db->query($sql_edit_units_dosage_0);
     $edits_units_dosage_0 = $requete_edit_units_dosage_0->fetchAll();

     $dosage_units_0 = $edits_units_dosage_0[0]["units_description"];
     }else{$dosage_units_0 = "Choose...";}

// DOSAGE PACKAGE UNITS 0
     $id_dosage_package_unit_0 = $edits_med_id[0]["dosage_package_unit_0"];
     if($id_dosage_package_unit_0 !=""){
     $sql_edit_units_dosage_package_0 = "SELECT * FROM medicine_id JOIN med_units ON medicine_id.dosage_package_unit_0 = med_units.id_units_mv  WHERE medicine_id.dosage_package_unit_0 = '$id_dosage_package_unit_0'";
     $requete_edit_units_dosage_package_0 = $db->query($sql_edit_units_dosage_package_0);
     $edits_units_dosage_package_0 = $requete_edit_units_dosage_package_0->fetchAll();

     $dosage_package_units_0 = $edits_units_dosage_package_0[0]["units_description"];
     }else{$dosage_package_units_0 = "Choose...";}

// DOSAGE PAKAGE QUANTITY UNITS 0
     $id_dosage_package_quantity_unit_0 = $edits_med_id[0]["dosage_package_quantity_unit_0"];
     if($id_dosage_package_quantity_unit_0 !=""){
     $sql_edit_units_dosage_package_quantity_0= "SELECT * FROM medicine_id JOIN med_units ON medicine_id.dosage_package_quantity_unit_0 = med_units.id_units_mv  WHERE medicine_id.dosage_package_quantity_unit_0 = '$id_dosage_package_quantity_unit_0'";
     $requete_edit_units_dosage_package_quantity_0 = $db->query($sql_edit_units_dosage_package_quantity_0);
     $edits_units_dosage_package_quantity_0 = $requete_edit_units_dosage_package_quantity_0->fetchAll();

     $dosage_package_quantity_units_0 = $edits_units_dosage_package_quantity_0[0]["units_description"];
     }else{$dosage_package_quantity_units_0 = "Choose...";}

// DOSAGE PAKAGE QUANTITY UNITS 0
     $id_package_unit_0 = $edits_med_id[0]["package_unit"];
     if($id_package_unit_0 !=""){
     $sql_edit_units_package="SELECT * FROM medicine_id JOIN med_units ON medicine_id.package_unit = med_units.id_units_mv  WHERE medicine_id.package_unit = '$id_package_unit_0'";
     $requete_edit_units_package_0 = $db->query($sql_edit_units_package);
     $edits_units_package_0 = $requete_edit_units_package_0->fetchAll();

     $T_dosage_package_units_0 = $edits_units_package_0[0]["units_description"];
     }else{$T_dosage_package_units_0 = "Choose...";}

// DOSAGE UNITS 1
     $id_dosage_unit_1= $edits_med_id[0]["dosage_unit_1"];
     if($id_dosage_unit_1!=""){
     $sql_edit_units_dosage_0= "SELECT * FROM medicine_id JOIN med_units ON medicine_id.dosage_unit_1= med_units.id_units_mv  WHERE medicine_id.dosage_unit_1= '$id_dosage_unit_0'";
     $requete_edit_units_dosage_1= $db->query($sql_edit_units_dosage_0);
     $edits_units_dosage_1= $requete_edit_units_dosage_0->fetchAll();

     $dosage_units_1= $edits_units_dosage_0[0]["units_description"];
     }else{$dosage_units_1= "Choose...";}

// DOSAGE PACKAGE UNITS 1
          $id_dosage_package_unit_1= $edits_med_id[0]["dosage_package_unit_1"];
          if($id_dosage_package_unit_1!=""){
          $sql_edit_units_dosage_package_1= "SELECT * FROM medicine_id JOIN med_units ON medicine_id.dosage_package_unit_1= med_units.id_units_mv  WHERE medicine_id.dosage_package_unit_1= '$id_dosage_package_unit_0'";
          $requete_edit_units_dosage_package_1= $db->query($sql_edit_units_dosage_package_0);
          $edits_units_dosage_package_1= $requete_edit_units_dosage_package_0->fetchAll();

          $dosage_package_units_1= $edits_units_dosage_package_0[0]["units_description"];
          }else{$dosage_package_units_1= "Choose...";}

// DOSAGE PAKAGE QUANTITY UNITS 1
     $id_dosage_package_quantity_unit_1= $edits_med_id[0]["dosage_package_quantity_unit_1"];
     if($id_dosage_package_quantity_unit_1!=""){
     $sql_edit_units_dosage_package_quantity_0= "SELECT * FROM medicine_id JOIN med_units ON medicine_id.dosage_package_quantity_unit_1= med_units.id_units_mv  WHERE medicine_id.dosage_package_quantity_unit_1= '$id_dosage_package_quantity_unit_0'";
     $requete_edit_units_dosage_package_quantity_1= $db->query($sql_edit_units_dosage_package_quantity_0);
     $edits_units_dosage_package_quantity_1= $requete_edit_units_dosage_package_quantity_0->fetchAll();

     $dosage_package_quantity_units_1= $edits_units_dosage_package_quantity_0[0]["units_description"];
     }else{$dosage_package_quantity_units_1= "Choose...";}

// DOSAGE UNITS 2
     $id_dosage_unit_2= $edits_med_id[0]["dosage_unit_2"];
     if($id_dosage_unit_2!=""){
     $sql_edit_units_dosage_0= "SELECT * FROM medicine_id JOIN med_units ON medicine_id.dosage_unit_2= med_units.id_units_mv  WHERE medicine_id.dosage_unit_2= '$id_dosage_unit_0'";
     $requete_edit_units_dosage_2= $db->query($sql_edit_units_dosage_0);
     $edits_units_dosage_2= $requete_edit_units_dosage_0->fetchAll();

     $dosage_units_2= $edits_units_dosage_0[0]["units_description"];
     }else{$dosage_units_2= "Choose...";}

// DOSAGE PACKAGE UNITS 2
     $id_dosage_package_unit_2= $edits_med_id[0]["dosage_package_unit_2"];
     if($id_dosage_package_unit_2!=""){
     $sql_edit_units_dosage_package_2= "SELECT * FROM medicine_id JOIN med_units ON medicine_id.dosage_package_unit_2= med_units.id_units_mv  WHERE medicine_id.dosage_package_unit_2= '$id_dosage_package_unit_0'";
     $requete_edit_units_dosage_package_2= $db->query($sql_edit_units_dosage_package_0);
     $edits_units_dosage_package_2= $requete_edit_units_dosage_package_0->fetchAll();

     $dosage_package_units_2= $edits_units_dosage_package_0[0]["units_description"];
     }else{$dosage_package_units_2= "Choose...";}

// DOSAGE PAKAGE QUANTITY UNITS 2
     $id_dosage_package_quantity_unit_2= $edits_med_id[0]["dosage_package_quantity_unit_2"];
     if($id_dosage_package_quantity_unit_2!=""){
     $sql_edit_units_dosage_package_quantity_0= "SELECT * FROM medicine_id JOIN med_units ON medicine_id.dosage_package_quantity_unit_2= med_units.id_units_mv  WHERE medicine_id.dosage_package_quantity_unit_2= '$id_dosage_package_quantity_unit_0'";
     $requete_edit_units_dosage_package_quantity_2= $db->query($sql_edit_units_dosage_package_quantity_0);
     $edits_units_dosage_package_quantity_2= $requete_edit_units_dosage_package_quantity_0->fetchAll();

     $dosage_package_quantity_units_2= $edits_units_dosage_package_quantity_0[0]["units_description"];
     }else{$dosage_package_quantity_units_2= "Choose...";}

// FORMS
     $id_forms= $edits_med_id[0]["form"];
     $id_forms_1= $edits_med_id[0]["form"];

     if($id_forms!=""){
     $sql_edit_forms= "SELECT * FROM medicine_id JOIN med_form ON medicine_id.form = med_form.id_form  WHERE medicine_id.form = '$id_forms'";
     $requete_edit_forms= $db->query($sql_edit_forms);
     $edits_units_forms= $requete_edit_forms->fetchAll();

     $id_forms= $edits_units_forms[0]["forms_description"];
     }else{$id_forms= "Choose...";}
?>