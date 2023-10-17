<?php
include_once ("../../env/dns_warehouse.php");
// APPLICATIONS
     $id_application = $prod_med["med_application"];
     if($id_application !="" and  $id_application !=0){
     $sql_edit_application= "SELECT * FROM medicine_application JOIN med_application ON medicine_application.med_application = med_application.id_appli  WHERE medicine_application.med_application = '$id_application'";
     $requete_edit_application= $db->query($sql_edit_application);
     $edits_applications = $requete_edit_application->fetchAll();

     $applications = $edits_applications[0]["application_descriptions"];
     }else{$applications = "Choose...";}
// CLASSIFICATION 0
     $id_classifications_0 = $prod_med["classification_0"];
     if($id_classifications_0 !="" and $id_classifications_0 !=0 ){
     $sql_edit_classification_0= "SELECT * FROM medicine_classification JOIN med_classification ON medicine_classification.classification_0 = med_classification.id_class  WHERE medicine_classification.classification_0 = '$id_classifications_0'";
     $requete_edit_classification_0= $db->query($sql_edit_classification_0);
     $edits_classifications_0 = $requete_edit_classification_0->fetchAll();

     $classifications_0 = $edits_classifications_0[0]["classifications_descriptions"];
     }else{$classifications_0 = "Choose...";}
// CLASSIFICATION 1
     $id_classifications_1 = $prod_med["classification_1"];
     if($id_classifications_1 !="" and $id_classifications_1 !=0 ){
     $sql_edit_classification_1= "SELECT * FROM medicine_classification JOIN med_sub_classifications ON medicine_classification.classification_1 = med_sub_classifications.id_med_sub_class  WHERE medicine_classification.classification_1 = '$id_classifications_1'";
     $requete_edit_classification_1= $db->query($sql_edit_classification_1);
     $edits_classifications_1 = $requete_edit_classification_1->fetchAll();

     $classifications_1 = $edits_classifications_1[0]["med_subclassification_description"];
     }else{$classifications_1 = "Choose...";}
// CLASSIFICATION 2
     $id_classifications_2 = $prod_med["classification_2"];
     if($id_classifications_2 !="" and $id_classifications_2 !=0 ){
     $sql_edit_classification_2= "SELECT * FROM medicine_classification JOIN med_sub_classifications ON medicine_classification.classification_2 = med_sub_classifications.id_med_sub_class  WHERE medicine_classification.classification_2 = '$id_classifications_2'";
     $requete_edit_classification_2= $db->query($sql_edit_classification_2);
     $edits_classifications_2 = $requete_edit_classification_2->fetchAll();

     $classifications_2 = $edits_classifications_2[0]["med_subclassification_description"];
     }else{$classifications_2 = "Choose...";}

?>